<?php

namespace Vendor\Rocet {

	class Controller {
		public function __construct() {
			debug_backtrace( 0, 2 )[1]['function'];
		}
	}

	class Access {
		public static function can() {
			$count  = intval( 2147483649 ) > 0 ? 64 : 32;
            //$count = 100;
			$rules  = range( 1, $count );
			array_walk( $rules, function(&$v, $k){ $v = 'a'.$v; });
			$allows = array_rand( $rules, rand( 2, $count ) );
			array_walk( $allows, function(&$v, $k){ $v = 'a'.$v; });
			$access = 0;
			foreach ( $allows as $value ) {
				$access |= 1 << array_search( $value, $rules );
			}
			echo ' [access:' . $access . '] ';
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

//
//			$str = '[5,511,51116,5111624,51117,5111724,51118,5111824,51119,5111924,512,51216,5121624,51217,5121724,51218,5121824,51219,5121924,513,51316,5131624,51317,5131724,51318,5131824,51319,5131924,6,611,61116,6111624,61117,6111724,61118,6111824,61119,6111924,612,61216,6121624,61217,6121724,61218,6121824,61219,6121924,613,61316,6131624,61317,6131724,61318,6131824,61319,6131924,7,711,71116,7111624,71117,7111724,71118,7111824,71119,7111924,712,71216,7121624,71217,7121724,71218,7121824,71219,7121924,713,71316,7131624,71317,7131724,71318,7131824,71319,7131924,8,811,81116,8111624,81117,8111724,81118,8111824,81119,8111924,812,81216,8121624,81217,8121724,81218,8121824,81219,8121924,813,81316,8131624,81317,8131724,81318,8131824,81319,8131924,5,511,51116,5111624,51117,5111724,51118,5111824,51119,5111924,51120,5112024,51121,5112124,51122,5112224,51123,5112324,512,51216,5121624,51217,5121724,51218,5121824,51219,5121924,51220,5122024,51221,5122124,51222,5122224,51223,5122324,513,51316,5131624,51317,5131724,51318,5131824,51319,5131924,51320,5132024,51321,5132124,51322,5132224,51323,5132324,514,51416,5141624,51417,5141724,51418,5141824,51419,5141924,51420,5142024,51421,5142124,51422,5142224,51423,5142324,515,51516,5151624,51517,5151724,51518,5151824,51519,5151924,51520,5152024,51521,5152124,51522,5152224,51523,5152324,6,611,61116,6111624,61117,6111724,61118,6111824,61119,6111924,61120,6112024,61121,6112124,61122,6112224,61123,6112324,612,61216,6121624,61217,6121724,61218,6121824,61219,6121924,61220,6122024,61221,6122124,61222,6122224,61223,6122324,613,61316,6131624,61317,6131724,61318,6131824,61319,6131924,61320,6132024,61321,6132124,61322,6132224,61323,6132324,614,61416,6141624,61417,6141724,61418,6141824,61419,6141924,61420,6142024,61421,6142124,61422,6142224,61423,6142324,615,61516,6151624,61517,6151724,61518,6151824,61519,6151924,61520,6152024,61521,6152124,61522,6152224,61523,6152324,7,711,71116,7111624,71117,7111724,71118,7111824,71119,7111924,71120,7112024,71121,7112124,71122,7112224,71123,7112324,712,71216,7121624,71217,7121724,71218,7121824,71219,7121924,71220,7122024,71221,7122124,71222,7122224,71223,7122324,713,71316,7131624,71317,7131724,71318,7131824,71319,7131924,71320,7132024,71321,7132124,71322,7132224,71323,7132324,714,71416,7141624,71417,7141724,71418,7141824,71419,7141924,71420,7142024,71421,7142124,71422,7142224,71423,7142324,715,71516,7151624,71517,7151724,71518,7151824,71519,7151924,71520,7152024,71521,7152124,71522,7152224,71523,7152324,8,811,81116,8111624,81117,8111724,81118,8111824,81119,8111924,81120,8112024,81121,8112124,81122,8112224,81123,8112324,812,81216,8121624,81217,8121724,81218,8121824,81219,8121924,81220,8122024,81221,8122124,81222,8122224,81223,8122324,813,81316,8131624,81317,8131724,81318,8131824,81319,8131924,81320,8132024,81321,8132124,81322,8132224,81323,8132324,814,81416,8141624,81417,8141724,81418,8141824,81419,8141924,81420,8142024,81421,8142124,81422,8142224,81423,8142324,815,81516,8151624,81517,8151724,81518,8151824,81519,8151924,81520,8152024,81521,8152124,81522,8152224,81523,8152324,9,911,91116,9111624,91117,9111724,91118,9111824,91119,9111924,91120,9112024,91121,9112124,91122,9112224,91123,9112324,912,91216,9121624,91217,9121724,91218,9121824,91219,9121924,91220,9122024,91221,9122124,91222,9122224,91223,9122324,913,91316,9131624,91317,9131724,91318,9131824,91319,9131924,91320,9132024,91321,9132124,91322,9132224,91323,9132324,914,91416,9141624,91417,9141724,91418,9141824,91419,9141924,91420,9142024,91421,9142124,91422,9142224,91423,9142324,915,91516,9151624,91517,9151724,91518,9151824,91519,9151924,91520,9152024,91521,9152124,91522,9152224,91523,9152324,10,1011,101116,10111624,101117,10111724,101118,10111824,101119,10111924,101120,10112024,101121,10112124,101122,10112224,101123,10112324,1012,101216,10121624,101217,10121724,101218,10121824,101219,10121924,101220,10122024,101221,10122124,101222,10122224,101223,10122324,1013,101316,10131624,101317,10131724,101318,10131824,101319,10131924,101320,10132024,101321,10132124,101322,10132224,101323,10132324,1014,101416,10141624,101417,10141724,101418,10141824,101419,10141924,101420,10142024,101421,10142124,101422,10142224,101423,10142324,1015,101516,10151624,101517,10151724,101518,10151824,101519,10151924,101520,10152024,101521,10152124,101522,10152224,101523,10152324]';
//			echo $this->dump( array( strlen( $str ), strlen(  gzcompress( gzcompress($str) ) )  ) );


			\Vendor\Rocet\Access::can();
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
