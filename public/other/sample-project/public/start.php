<?php

require '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Slim\Slim as App;
use Slim\Views as View;

$dbManager = new Manager;
$dbManager->addConnection( array(
	"driver"    => "mysql",
	"host"      => "127.0.0.1",
	"database"  => "zend",
	"username"  => "root",
	"password"  => "123456",
	"charset"   => "utf8",
	"collation" => "utf8_general_ci",
	"prefix"    => ""
) );
$dbManager->bootEloquent();

class Paginator implements ArrayAccess, Countable, IteratorAggregate, Serializable, JsonSerializable {
	protected $pager;
	protected $hasMore;
	protected $perPage;
	protected $total;
	protected $items;
	protected $currentPage;
	protected $lastPage;
	protected $from;
	protected $to;
	protected $app;

	public function __construct( App $app, $pager = 'page' ) {
		$this->app   = $app;
		$this->pager = $pager;
	}

	public function make( $items, $total, $perPage = 10 ) {

		$this->total   = abs( $total );
		$this->perPage = $perPage;
		$this->items   = $items;
		if ( is_null( $this->perPage ) ) {
			$this->perPage = (int) $total;
			$this->hasMore = count( $items ) > $this->perPage;
			$this->items   = array_slice( $items, 0, $this->perPage );
		} else {
			$this->items   = $items;
			$this->total   = (int) $total;
			$this->perPage = (int) $perPage;
		}

		$this->currentPage = $this->app->request->get( 'page', 1 );
		if ( $this->isQuickPaginating() ) {
			$this->lastPage = $this->hasMore ? $this->currentPage + 1 : $this->currentPage;
		} else {
			$this->lastPage = (int) ceil( $this->total / $this->perPage );
		}

		$this->from = $this->total ? ( $this->currentPage - 1 ) * $this->perPage + 1 : 0;
		$this->to   = min( $this->total, $this->currentPage * $this->perPage );

		return $this;
	}

	public function isQuickPaginating() {
		return is_null( $this->total );
	}

	public function links() {
		$html = '<ul class="pagination">';

		$totalPage   = $this->getTotalPage();
		$currentPage = $this->getCurrentPage();

		if ( $totalPage < 10 ) {
			for ( $i = 1; $i <= $totalPage; $i ++ ) {
				$active = $i == $currentPage ? 'class="active"' : '';
				$html .= "<li $active><a href=" . $this->getLink( $i ) . ">$i</a></li>";
			}
		} else {

			if ( $currentPage > 3 ) {
				$html .= "<li><a href=" . $this->getLink( 1 ) . ">&laquo;</a></li>";
				$start = $currentPage - 2;
			} else {
				$start = 1;
			}

			for ( $i = $start; $i <= $currentPage; $i ++ ) {
				$active = $i == $currentPage ? 'class="active"' : '';
				$html .= "<li $active><a href=" . $this->getLink( $i ) . ">$i</a></li>";
			}

			for ( $i = $currentPage + 1; $i <= $currentPage + 3; $i ++ ) {
				$active = $i == $currentPage ? 'class="active"' : '';
				$html .= "<li $active><a href=" . $this->getLink( $i ) . ">$i</a></li>";
			}

			if ( $totalPage - $currentPage >= 5 ) {
				$html .= "<li><a href='javascript:void(0)'>...</a></li>";
				$html .= "<li><a href=" . $this->getLink( $totalPage ) . ">$totalPage</a></li>";
			}
		}
		$html .= '</ul>';

		return $html;
	}

	public function getTotalPage() {
		$this->perPage > 0 || $this->perPage = 10;

		$totalPage = ceil( $this->total / $this->perPage );

		$totalPage >= 1 || $totalPage = 1;

		return $totalPage;
	}

	public function getCurrentPage( $total = null ) {
		$page = abs( $this->app->request->get( 'page', 1 ) );

		if ( $total ) {
			$this->total = $total;
		}

		$page >= 1 || $page = 1;

		if ( $this->items ) {
			$totalPage = $this->getTotalPage();
			$page <= $totalPage || $page = $totalPage;
		}

		return $page;
	}

	public function getLink( $page ) {
		static $query;

		if ( is_null( $query ) ) {
			$query = $this->app->request->get();
		}

		$query['page'] = $page;

		return "?" . http_build_query( $query );
	}

	public function jsonSerialize() {
		return $this->items;
	}

	public function serialize() {
		return serialize( $this->items );
	}

	public function unserialize( $data ) {
		return $this->items = unserialize( $data );
	}

	public function getIterator() {
		return new ArrayIterator( $this->items );
	}

	public function count( $mode = COUNT_NORMAL ) {
		return count( $this->items, $mode );
	}

	public function __get( $key ) {
		return $this[ $key ];
	}

	public function __set( $key, $value ) {
		$this->items[ $key ] = $value;
	}

	public function __isset( $key ) {
		return isset( $this->items[ $key ] );
	}

	public function __unset( $key ) {
		unset( $this->items[ $key ] );
	}

	public function offsetSet( $offset, $value ) {
		$this->items[ $offset ] = $value;
	}

	public function offsetUnset( $offset ) {
		if ( $this->offsetExists( $offset ) ) {
			unset( $this->items[ $offset ] );
		}
	}

	public function offsetExists( $offset ) {
		return isset( $this->items[ $offset ] );
	}

	public function offsetGet( $offset ) {
		return $this->offsetExists( $offset ) ? array_get( $this->items, $offset ) : null;
	}

	public function toJson( $options = 0 ) {
		return json_encode( $this->toArray(), $options );
	}

	public function toArray() {
		return array(
			'total'        => $this->total,
			'per_page'     => $this->perPage,
			'current_page' => $this->currentPage,
			'last_page'    => $this->lastPage,
			'from'         => $this->from,
			'to'           => $this->to,
			'data'         => $this->getCollection()->toArray(),
		);
	}

	public function getCollection() {
		return new Collection( $this->items );
	}

	public function getPerPage() {
		return $this->perPage;
	}


	public function getItems() {
		return $this->items;
	}

	public function setItems( $items ) {
		$this->items = $items;
	}

	public function getTotal() {
		return $this->total;
	}


	public function isEmpty() {
		return empty( $this->items );
	}


	public function __call( $method, $arguments ) {
		return call_user_func_array( array( $this->getCollection(), $method ), $arguments );
	}
}

class GroupResource extends Model {
	protected $table = 'group_resource';
}

class GroupUser extends Model {
	protected $table = 'group_user';
}

class User extends Model {
	protected $perPage = 10;
	protected $table = 'user';

	public function orders() {
		return $this->hasMany( 'Order' );
	}
}

class Cate extends Model {
	protected $perPage = 10;
	protected $table = 'cate';

	public function goods() {
		return $this->hasMany( 'Goods' );
	}
}

class Goods extends Model {
	protected $perPage = 10;
	protected $table = 'goods';

	public function cate() {
		return $this->belongsTo( 'Cate' );
	}
}

class Order extends Model {
	protected $perPage = 10;
	protected $table = 'order';

	public function user() {
		return $this->belongsTo( 'User' );
	}

	public function goods() {
		return $this->hasMany( 'Goods' );
	}
}

App::registerAutoloader();
$app = new App( array(
	'baseUrl'             => 'http://www.web.com/other/sample-project/public',
	'view'                => new View\Blade(),
	'templates.path'      => dirname( __FILE__ ) . '/../templates',
	'cookies.encrypt'     => true,
	'cookies.lifetime'    => '20 minutes',
	'cookies.path'        => '/',
	'cookies.domain'      => '.web.com',
	'cookies.secret_key'  => 'secret',
	'cookies.cipher'      => MCRYPT_RIJNDAEL_256,
	'cookies.cipher_mode' => MCRYPT_MODE_CBC,
	'http.version'        => '1.1',
	'debug'               => true
) );
$app->add( new \Slim\Middleware\SessionCookie( array(
	'expires'     => '20 minutes',
	'path'        => '/',
	'domain'      => null,
	'secure'      => false,
	'httponly'    => false,
	'name'        => 'slim_session',
	'secret'      => 'CHANGE_ME',
	'cipher'      => MCRYPT_RIJNDAEL_256,
	'cipher_mode' => MCRYPT_MODE_CBC
) ) );
$app->view()->parserOptions = array(
	'debug' => true,
	'cache' => dirname( __FILE__ ) . '/../cache'
);
$app->view->setData( 'app', $app );

function asset( $path ) {
	global $app;

	return $app->config( 'baseUrl' ) . '/assets/' . $path;
}

$dbManager->getConnection()->setPaginator( function () use ( $app ) {
	return new Paginator( $app, 'page' );
} );

$app->get( '/', function () use ( $app ) {

	$app->render( 'main', array( 'items' => Order::query()->paginate() ) );
} )->name( 'home' );

$app->group( '/mobile', function () use ( $app ) {
	exit( 'Auth Error !!' );
}, function () use ( $app ) {

	$app->get( '/order(/:page)', function () use ( $app ) {

		$app->render( 'mobile.order', array( 'items' => Order::query()->paginate()->toJson() ) );
	} )->name( 'mobile.order.index' );

	$app->get( '/order/:id', function ( $id ) {

	} )->name( 'mobile.order.show' );

	$app->get( '/order/:id/edit', function ( $id ) {

	} )->name( 'mobile.order.edit' );

	$app->put( '/order/:id', function ( $id ) {

	} )->name( 'mobile.order.update' );

	$app->delete( '/order/:id', function ( $id ) use ( $app ) {
		$app->response->headers->set( 'Content-Type', 'application/json' );
		$app->response->setBody( json_encode( array( 'SUCCESS' => $id ) ) );
	} )->name( 'mobile.order.delete' );
} );

$app->get( '/admin/login', function () use ( $app ) {
	$app->render( 'admin.login' );
} )->name( 'admin.login' );

$app->post( '/login', function () use ( $app ) {
	var_dump( $_SESSION );
	var_dump( $app->request->post( 'username' ) );
	var_dump( $app->request->post( 'password' ) );
} )->name( 'admin.login.post' );

$app->group( '/admin', function () use ( $app ) {
	$app->flash( 'error', 'Login required' );
	$app->redirect( $app->urlFor( 'admin.login' ) );
}, function () use ( $app ) {

	$app->get( '/', function () use ( $app ) {

		$app->render( 'admin.main', array( 'items' => Order::query()->paginate() ) );
	} )->name( 'admin.main' );

	$app->get( '/logout', function () use ( $app ) {

	} )->name( 'admin.logout' );

	$app->get( '/order(/:page)', function () use ( $app ) {
		$app->render( 'admin.order', array( 'items' => Order::query()->paginate() ) );
	} )->name( 'admin.order.index' );

	$app->get( '/order/:id', function ( $id ) {

	} )->name( 'admin.order.show' );

	$app->get( '/order/:id/edit', function ( $id ) {

	} )->name( 'admin.order.edit' );

	$app->put( '/order/:id', function ( $id ) {

	} )->name( 'admin.order.update' );

	$app->delete( '/order/:id', function ( $id ) use ( $app ) {
		$app->response->headers->set( 'Content-Type', 'application/json' );
		$app->response->setBody( json_encode( array( 'SUCCESS' => $id ) ) );
	} )->name( 'admin.order.delete' );

	$app->get( '/goods(/:page)', function () use ( $app ) {
		$app->render( 'admin.goods', array( 'items' => Goods::query()->paginate() ) );
	} )->name( 'admin.goods.index' );

	$app->get( '/goods/:id', function ( $id ) {

	} )->name( 'admin.goods.show' );

	$app->get( '/goods/:id/edit', function ( $id ) {

	} )->name( 'admin.goods.edit' );

	$app->put( '/goods/:id', function ( $id ) {

	} )->name( 'admin.goods.update' );

	$app->delete( '/goods/:id', function ( $id ) use ( $app ) {
		$app->response->headers->set( 'Content-Type', 'application/json' );
		$app->response->setBody( json_encode( array( 'SUCCESS' => $id ) ) );
	} )->name( 'admin.goods.delete' );

	$app->get( '/user(/:page)', function () use ( $app ) {
		$app->render( 'admin.user', array( 'items' => User::query()->paginate() ) );
	} )->name( 'admin.user.index' );

	$app->get( '/user/:id', function ( $id ) {

	} )->name( 'admin.user.show' );

	$app->get( '/user/:id/edit', function ( $id ) {

	} )->name( 'admin.user.edit' );

	$app->put( '/user/:id', function ( $id ) {

	} )->name( 'admin.user.update' );

	$app->delete( '/cate/:id', function ( $id ) use ( $app ) {
		$app->response->headers->set( 'Content-Type', 'application/json' );
		$app->response->setBody( json_encode( array( 'SUCCESS' => $id ) ) );
	} )->name( 'admin.user.delete' );

	$app->get( '/cate(/:page)', function () use ( $app ) {
		$app->render( 'admin.cate', array( 'items' => Cate::query()->paginate() ) );
	} )->name( 'admin.cate.index' );

	$app->get( '/cate/:id', function ( $id ) {

	} )->name( 'admin.cate.show' );

	$app->get( '/cate/:id/edit', function ( $id ) {

	} )->name( 'admin.cate.edit' );

	$app->put( '/cate/:id', function ( $id ) {

	} )->name( 'admin.cate.update' );

	$app->delete( '/cate/:id', function ( $id ) use ( $app ) {
		$app->response->headers->set( 'Content-Type', 'application/json' );
		$app->response->setBody( json_encode( array( 'SUCCESS' => $id ) ) );
	} )->name( 'admin.cate.delete' );
} );

$app->run();
