<?php

namespace Vendor\Rocet {

	class Controller {
		public function __construct() {
			debug_backtrace( 0, 2 )[1]['function'];
		}
	}

	class Access {
		public function can() {
			$count  = intval( 2147483649 ) > 0 ? 64 : 32;
			$rules  = range( 1, $count );
			$allows = array_rand( $rules, rand( 2, $count ) );
			$access = 0;
			foreach ( $allows as $value ) {
				$access |= 1 << array_search( $value, $rules );
			}
			foreach ( $rules as $key => $value ) {
				echo ' [' . $value . ':' . ( ( $access & ( 1 << $key ) ) ? 'Y' : 'N' ) . '] ';
			}
		}
	}

	class Card {
		public function create() {
			$rows = range( 'A', 'Z' );
			$cols = range( '0', '9' );
			var_dump( $rows, $cols );
		}
	}
}

namespace Vendor\Core {

	trait TSingleton {
		protected static $instance;

		private function __construct() {

		}

		public static function instance() {
			static::$instance or static::$instance = new static;

			return static::$instance;
		}

		public function __clone() {

		}
	}


	trait TSubject {
		private $_obServers;
		private $_change;

		public function attach( \SplObserver $obServer ) {
			$this->_obServers[] = $obServer;
		}

		public function detach( \SplObserver $obServer ) {
			$index = array_search( $obServer, $this->_obServers );
			if ( $index !== false ) {
				unset( $this->_obServers[ $index ] );
			}
		}

		public function getChange() {
			return $this->_change;
		}

		public function setChange( $change ) {
			$this->_change = $change;
			$this->notify();
		}

		public function notify() {
			if ( ! empty( $this->_obServers ) ) {
				foreach ( $this->_obServers as $obServer ) {
					$obServer->update( $this );
				}
			}
		}
	}

	trait TServer {
		public function update( \SplSubject $obSubject ) {
			echo $obSubject->getChange();
		}
	}

	abstract class Subject implements \SplSubject {
		use TSubject;
	}

	abstract class SubjectSingleton implements \SplSubject {
		use TSubject;
		use TSingleton;

		public static function change( $change ) {
			static::instance()->setChange( $change );
		}
	}

	abstract class Server implements \SplObserver {
		use TServer;
	}

	class Storage extends \ArrayObject {
		public function __construct( array $array ) {
			parent::__construct( $array );
		}
	}

	class Loader {
		public static function regist() {
			foreach ( Config::get( 'init' ) as $class ) {
				class_alias( 'Vendor\\Core\\' . $class['class'], '\App\Controller\\' . $class['class'], true );
			}
		}
	}

	class Container {
		use TSingleton;
		protected $services;
		protected $config;
		protected $components;

		protected function __construct() {
			if ( ! $this->config ) {
				$this->config = Config::get( 'init' );
			}
			$this->setComponents( $this->config );
		}

		protected function setComponents( $config ) {
			foreach ( $config as $v ) {
				$this->setComponent( $v['class'], new $v['class']( $v['arguments'] ) );
			}
		}

		public function setComponent( $class, $objInstantiate ) {
			$this->components[ $class ] = $objInstantiate;
		}

		public function getComponent( $req ) {
			return isset( $this->config[ $req ] ) ? $this->components[ $this->config[ $req ]['class'] ] : 0;
		}

		public function dump( $variable, $dump = 0 ) {
			if ( $dump ) {
				ob_start();
				var_dump( $variable );
				$variable = ob_get_clean();
			} else {
				$variable = ( $variable ? print_r( $variable, true ) : var_export( $variable, true ) );
			}

			return '<pre>' . $variable . '</pre>';
		}
	}

	class Component extends Container {

	}

	class Service {
		protected $app;

		public function __construct( $app ) {
			$this->app = $app;
		}
	}

	class Event {

	}

	class Request {

	}

	class Response extends Component {
		protected static $instance;

		public function __construct() {
		}

		public static function __callStatic( $name, $arguments ) {
			return call_user_func_array( array( self::instance(), $name ), $arguments );
		}

		public static function json( $data ) {
			header( 'Content-Type:application/json;charset=UTF-8' );
			ob_get_clean();
			exit( json_encode( $data ) );
		}

		public static function html( $data ) {
			echo $data;
		}

		public function setHeaders() {
			header( 'Access-Control-Allow-Origin: http://angular' );
			header( 'Access-Control-Allow-Methods: GET, POST, PUT, DELETE' );
			header( 'Access-Control-Allow-Headers: Content-Type, Authorization, Accept, Range, Origin' );
			header( 'Access-Control-Expose-Headers: Content-Range' );
			header( 'Access-Control-Max-Age: 3600' );
			if ( $_SERVER['REQUEST_METHOD'] == 'OPTIONS' ) {
				header( 'Status:200 OK' );
				exit();
			}
		}
	}

	class Dispatcher {

	}

	class Route {
		public static function get( $uri = null, $callback = null ) {
			if ( is_object( $callback ) && $callback instanceof \Closure ) {
				return $callback();
			} else if ( is_array( $callback ) ) {

			} else if ( is_string( $callback ) ) {

			}

			return 0;
		}
	}

	class Config {
		public static function get( $set ) {
			$config = array(
				'init' => array(
					'controller' => array(
						'class'     => 'Controller',
						'arguments' => ''
					),
					'view'       => array(
						'class'     => 'View',
						'arguments' => ''
					),
					'myPdo'      => array(
						'class'     => 'MyPDO',
						'arguments' => ''
					),
					'model'      => array(
						'class'     => 'Model',
						'arguments' => ''
					),
					'cart'       => array(
						'class'     => 'Cart',
						'arguments' => '',
					),
					'logged'     => array(
						'class'     => 'Logged',
						'arguments' => ''
					),
					'auth'       => array(
						'class'     => 'Auth',
						'arguments' => ''
					)
				)
			);

			return $config[ $set ];
		}
	}

	class Cache extends Storage {

	}

	class Debug {
		public static function showTime() {
			return ' Time: [' . ( round( microtime( true ) - $_SERVER['REQUEST_TIME_FLOAT'], 4 ) * 1000 ) . ' ms]';
		}

		public static function shwoLoadFiles() {
			return print_r( get_included_files(), true );
		}

		public static function showLoadClasses() {
			return print_r( get_declared_classes(), true );
		}

		public static function showMemory() {
			return ' Memory: [' . self::sizeByte( memory_get_usage() ) . ' ]';
		}

		public static function sizeByte( $size, $digits = 2 ) {
			$unit = array( '', 'K', 'M', 'G', 'T', 'P' );
			$base = 1024;
			$i    = floor( log( $size, $base ) );

			return round( $size / pow( $base, $i ), $digits ) . ' ' . $unit[ $i ] . 'B';
		}
	}

	class Upload {
		public static function show() {
			if ( ! is_dir( __DIR__ . '/uploads' ) ) {
				mkdir( __DIR__ . '/uploads' );
			}
			if ( isset( $_FILES['userfile']['error'] ) && $_FILES['userfile']['error'] == UPLOAD_ERR_OK ) {
				$tmp_name = $_FILES["userfile"]["tmp_name"];
				$name     = $_FILES["userfile"]["name"];
				move_uploaded_file( $tmp_name, "uploads/$name" );
				exit( "uploads/$name" );
			}
			$upfiles = glob( dirname( __FILE__ ) . '/uploads/*' );
			echo '
				 <form enctype="multipart/form-data" action="" method="POST">
				     <input name="userfile" type="file" />
				     <input type="submit" value="Send File" />
				 </form>';
			foreach ( $upfiles as $key => $value ) {
				echo '<a href="' . str_replace( dirname( __FILE__ ), '', $value ) . '">' . basename( $value ) . '</a>';
			}
		}
	}

	class MyPDO extends \PDO {
		use TSingleton;

		public function __construct() {
			if ( ! static::$instance ) {
				try {
					parent::__construct( 'mysql:dbname=web.com;host=127.0.0.1;port=3306', 'root', '123456', array(
						\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
						\PDO::ATTR_STRINGIFY_FETCHES  => false,
						\PDO::ATTR_EMULATE_PREPARES   => false,
						\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
					) );
				} catch ( \PDOException $e ) {
					exit( $e->getMessage() );
				}
			} else {
				static::instance();
			}
		}
	}

	class DB {
		public static function __callStatic( $name, $arguments ) {
			return call_user_func_array( array( new MyPDO, $name ), $arguments );
		}
	}

	class Controller extends Component {
		public function __construct() {
			method_exists( $this, '_init' ) and call_user_func_array( array( $this, '_init' ), array() );
			method_exists( $this, '_before' ) and call_user_func_array( array( $this, '_before' ), array() );
			method_exists( $this, '_after' ) and call_user_func_array( array( $this, '_after' ), array() );
			method_exists( $this, 'index' ) and call_user_func_array( array( $this, 'index' ), array() );
		}

	}

	class Model {
		protected static $_tableName;
		protected static $_pk;

		public static function __callStatic( $name, $arguments ) {
			return call_user_func_array( 'Vendor\Core\DB::' . $name, $arguments );
		}

		public static function findIn( $ids ) {
			return self::process( 'SELECT * FROM ' . static::$_tableName . ' WHERE ' . static::$_pk . ' IN(' . $ids . ')', 'fetchAll' );
		}

		public static function process( $sql, $fetch ) {
			$stmt = self::prepare( $sql );
			if ( ! $stmt ) {
				return null;
			}
			if ( $fetch == 'fetch' ) {
				$stmt->setFetchMode( \PDO::FETCH_CLASS, get_called_class() );
			}
			$stmt->execute();
			if ( $fetch == 'fetch' ) {
				return $stmt->fetch();
			} else {
				return $stmt->fetchAll( \PDO::FETCH_CLASS, get_called_class() );
			}
		}

		public static function all() {
			return self::findAll();
		}

		public static function findAll() {
			return self::process( 'SELECT * FROM ' . static::$_tableName, 'fetchAll' );
		}

		public static function find( $id ) {
			return self::findOne( $id );
		}

		public static function findOne( $id ) {
			return self::process( 'SELECT * FROM ' . static::$_tableName . ' WHERE ' . static::$_pk . '=' . $id, 'fetch' );
		}

		public static function showFields() {
			$columns = self::process( 'SHOW COLUMNS FROM ' . static::$_tableName, 'fetchAll' );
			foreach ( $columns as $key => $value ) {
				echo 'public  $' . $value->Field . ';<br />';
			}
		}
	}

	class View {
		static public function make( $content, $charset = null ) {
			$charset and header( 'Content-Type:text/html;charset=' . $charset );
			echo $content;
		}
	}

	class App extends Component {
		protected static $instance;
		protected $components;

		public function __construct( array $config = array() ) {
			$this->components['config'] = 'Vendor\Rocet\Config';

			//class_alias('Vendor\Rocet\Controller', 'App\Controller\Controller');
			$this->services = new Storage( array() );
			new Controller;
		}

		public static function run( array $config = array() ) {
			self::instance( $config )->mainFirst();
			static::instance()->process();
		}

		public function mainFirst() {

		}

		public static function instance( array $config = array() ) {
			self::$instance or self::$instance = new self( $config );

			return self::$instance;
		}

		private function process() {
			Route::get( '/', function () {
				return new \App\Controller\Index();
			} );
		}
	}

	class Order extends Component {

	}

	class Cart extends Component {
		private $user;
		private $collectionIds;
		private $goodsPk = 'id';

		public function __construct( \App\Model\User $user = null ) {
			$this->user = $user;
		}

		public function clear() {
			$this->collectionIds = array();
		}

		public function put( \App\Model\Goods $goods ) {
			if ( $this->has( $goods ) ) {
				$this->collectionIds[ $goods->{$this->goodsPk} ] ++;
			} else {
				$this->collectionIds[ $goods->{$this->goodsPk} ] = 1;
			}
		}

		public function has( \App\Model\Goods $goods ) {
			return isset( $this->collectionIds[ $goods->{$this->goodsPk} ] );
		}

		public function out( \App\Model\Goods $goods ) {
			if ( $this->has( $goods ) ) {
				if ( $this->collectionIds[ $goods->{$this->goodsPk} ] > 1 ) {
					$this->collectionIds[ $goods->{$this->goodsPk} ] --;
				} else {
					unset( $this->collectionIds[ $goods->{$this->goodsPk} ] );
				}
				if ( $this->has( $goods ) ) {
					return $this->collectionIds[ $goods->{$this->goodsPk} ];
				}
			}

			return 0;
		}

		public function allGoods() {
			return $this->collectionIds;
		}

		public function goodsInfo( $goodsId ) {
			if ( array_key_exists( $goodsId, $this->collectionIds ) ) {
				return \App\Model\Goods::find( $goodsId );
			}

			return 0;
		}
	}

	class Logged extends Component {
		protected static $instance;
		private $user;
		private $cart;

		public function __construct() {
			$this->user = Auth::user();
		}

		public function getCart() {
			if ( ! $this->cart ) {
				$this->cart = new Cart( $this->user );
			}

			return $this->cart;
		}
	}

	class Auth extends Component {
		protected static $instance;
		private $user = null;

		protected function __construct() {

		}

		public static function user() {
			return static::instance()->user;
		}

		public static function login( \App\Model\User $user ) {
			return static::instance()->user = $user;
		}
	}

	class Subject1 extends Subject {
		public function __construct() {
			$this->attach( new Server1() );
			$this->attach( new Server2() );
		}
	}

	class Subject2 extends SubjectSingleton {
		protected static $instance;

		public function __construct() {
			$this->attach( new Server1() );
			$this->attach( new Server2() );
		}
	}

	class Subject3 extends SubjectSingleton {
		protected static $instance;

		public function __construct() {
			$this->attach( new Server1() );
			$this->attach( new Server2() );
		}
	}

	class Server1 extends Server {

	}

	class Server2 extends Server {

	}


	Loader::regist();
}

namespace App\Model {

	use Vendor\Core\Model;

	class User extends Model {
		protected static $_tableName = 'web_user';
		protected static $_pk = 'id';
	}

	class Goods extends Model {
		protected static $_tableName = 'web_group';
		protected static $_pk = 'id';
	}
}

namespace App\Controller {

	use App\Model\Goods;
	use App\Model\User;
	use Vendor\Core\Auth;
	use Vendor\Core\Controller;
	use Vendor\Core\Debug;
	use Vendor\Core\Logged;
	use Vendor\Core\Upload;
	use Vendor\Core\View;


	class Index extends Controller {
		public function index() {
			Auth::login( User::find( 1 ) );
			$logged = Logged::instance();
			$logged->getCart()->put( Goods::find( 1 ) );
			$logged->getCart()->put( Goods::find( 1 ) );
			$logged->getCart()->put( Goods::find( 1 ) );
			$logged->getCart()->put( Goods::find( 1 ) );
			$logged->getCart()->put( Goods::find( 2 ) );
			$logged->getCart()->out( Goods::find( 1 ) );
			$logged->getCart()->out( Goods::find( 1 ) );
			$logged->getCart()->out( Goods::find( 1 ) );

			echo $this->dump( User::findIn( '1,2,3' ) );
			echo $this->dump( User::findOne( 1 ) );

			$subject1 = new \Vendor\Core\Subject1();
			$subject1->setChange( 100 );

			\Vendor\Core\Subject2::change( 60 );

			\Vendor\Core\Subject3::change( 800 );

			echo '<hr />';
			Upload::show();
			echo '<hr />';

			// \Vendor\Core\Response::json( \Vendor\Core\DB::query( 'SHOW DATABASES' )->fetchAll() );

			View::make( $this->dump( $logged->getCart()->allGoods() ) . Debug::showTime() . Debug::showMemory(), 'utf8' );
		}

		public function test() {
			if ( isset( $_POST['testPhar'] ) && class_exists( 'Phar' ) ) {
				$phar = new \Phar( 'slim.phar', 0, 'slim.phar' );
				$phar->buildFromDirectory( dirname( __FILE__ ) . '/Slim' );
				$phar->setStub( $phar->createDefaultStub( 'test.php', 'test.php' ) );
				$phar->compressFiles( \Phar::GZ );
			}
		}
	}
}

namespace App\Module\A\Model {

	use Vendor\Core\Model;

	class Group extends Model {
		protected static $_tableName = 'group';
		protected static $_pk = 'idGroup';
	}

	class User extends Model {
		protected static $_tableName = 'user';
		protected static $_pk = 'id';
	}
}

namespace App\Module\A\Controller {

}

namespace {

	Vendor\Core\App::run( $config = array(
		'abs_path' => __DIR__,
		'app_path' => __DIR__ . DIRECTORY_SEPARATOR . 'app',
		'cof_path' => __DIR__ . DIRECTORY_SEPARATOR . 'config',
	) );

}
