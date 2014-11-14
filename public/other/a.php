<?php

header( 'Content-Type:text/html;charset=UTF-8' );

echo '<h2>工厂模式</h2>';

interface IFactory {
	public static function factory( $config );
}

abstract class Factory implements IFactory {
//	public static function factory($item){
//		$computerReflection = class_exists($item) ? new ReflectionClass($item) : null;
//		return $computerReflection && $computerReflection->isSubclassOf(substr(__CLASS__, 0, -7)) ? new $item : null;
//	}
}

class ComputerFactory extends Factory {
	public static function factory( $computer ) {
		$computerReflection = class_exists( $computer ) ? new ReflectionClass( $computer ) : null;

		return $computerReflection && $computerReflection->isSubclassOf( substr( __CLASS__, 0, - 7 ) ) ? new $computer : null;
	}
}

abstract class Computer {

}

class Mac extends Computer {
	public function __construct() {
		echo ' [' . __CLASS__ . '] ';
	}
}

class Pc extends Computer {
	public function __construct() {
		echo ' [' . __CLASS__ . '] ';
	}
}

ComputerFactory::factory( 'Mac' );
ComputerFactory::factory( 'Pc' );


echo '<h2>工厂方法模式</h2>';

abstract class Monitor {

}

class CRT extends Monitor {
	public function __construct() {
		echo ' [' . __CLASS__ . '] ';
	}
}

class LCD extends Monitor {
	public function __construct() {
		echo ' [' . __CLASS__ . '] ';
	}
}

class MonitorFactory extends Factory {
	public static function factory( $monitor ) {
		$monitorReflection = class_exists( $monitor ) ? new ReflectionClass( $monitor ) : null;

		return $monitorReflection && $monitorReflection->isSubclassOf( substr( __CLASS__, 0, - 7 ) ) ? new $monitor : null;
	}
}

class FinalFactory {
	public static function factory( $config = null ) {
		foreach ( $config as $factory => $items ) {
			$factory           = $factory . 'Factory';
			$factoryReflection = class_exists( $factory ) ? new ReflectionClass( $factory ) : null;
			if ( $factoryReflection && $factoryReflection->implementsInterface( 'IFactory' ) ) {
				array_walk( $items, function ( $item, $k, $factory ) {
					$itemReflection = class_exists( $item ) ? new ReflectionClass( $item ) : null;
					if ( $itemReflection && $itemReflection->isSubclassOf( substr( $factory, 0, - 7 ) ) ) {
						call_user_func( $factory . '::factory', $item );
					}
					//$config[$factory][$k] = $itemReflection && $itemReflection->isSubclassOf($factory) ? new $item : null;
				}, $factory );
			}
		}
	}
}

FinalFactory::factory( array(
	'Computer' => array( 'Mac', 'Pc' ),
	'Monitor'  => array( 'CRT', 'LCD' ),
) );


echo '<h2>观察者模式</h2>';

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

	public function attach( SplObserver $obServer ) {
		$this->_obServers[] = $obServer;
	}

	public function detach( SplObserver $obServer ) {
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
	public function update( SplSubject $obSubject ) {
		echo $obSubject->getChange();
	}
}

interface IStrategy {
	public function doSomething();
}


interface Prototype {
	public function copy();
}

abstract class Subject implements SplSubject {
	use TSubject;
}

abstract class SubjectSingleton implements SplSubject {
	use TSubject;
	use TSingleton;

	public static function change( $change ) {
		static::instance()->setChange( $change );
	}
}

abstract class Server implements SplObserver {
	use TServer;
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

class Server1 extends Server {

}

class Server2 extends Server {

}

$subject1 = new Subject1();

$subject1->setChange( 100 );

Subject2::change( 60 );


echo '<h2>策略模式</h2>';

class ContextSample {
	private $strategy;

	public function __construct( IStrategy $strategy ) {
		$this->strategy = $strategy;
	}

	public function execute() {
		$this->strategy->doSomething();
	}
}

class Strategy1 implements IStrategy {
	public function doSomething() {
		echo '具体策略1';
	}
}

class Strategy2 implements IStrategy {
	public function doSomething() {
		echo '具体策略2';
	}
}

$context = new ContextSample( new Strategy1 );
$context->execute();

$context = new ContextSample( new Strategy2 );
$context->execute();


echo '<h2>原型模式</h2>';

class ConcretePrototype implements Prototype {
	private $name;

	function __construct( $name ) {
		$this->name = $name;
	}

	function getName() {
		return $this->name;
	}

	function setName( $name ) {
		$this->name = $name;
	}

	function copy() {
		return clone $this;
	}

	function copyFull() {
		return unserialize( serialize( $this ) );
	}

	function __clone() {

	}
}

class Client {

	public static function main() {
		$prototype = new ConcretePrototype( 'prototype' );
		$clone     = $prototype->copy();
		echo $prototype->getName();
		echo $clone->getName();
	}
}

Client::main();


class Marine {
	public $playerID;

	public function __construct( $id ) {
		$this->playerID = $id;
	}
}

class TroopManager {
	public $troopPrototype = array();

	public function addPrototype( $name, $prototype ) {
		$this->troopPrototype[ $name ] = $prototype;
	}

	public function getPrototype( $name ) {
		return clone $this->troopPrototype[ $name ];
	}

	public function getPrototypes() {
		$ret = array();
		foreach ( $this->troopPrototype as $key => $val ) {
			$ret[ $key ] = clone $this->troopPrototype[ $key ];
		}

		return (object) $ret;
	}
}

$manager = new TroopManager();
$m1      = new Marine( 1 );
$m2      = new Marine( 2 );
$manager->addPrototype( 'Marine1', $m1 );
$manager->addPrototype( 'Marine2', $m2 );
$m3 = $manager->getPrototype( 'Marine1' );
print_r( $m3 );
print_r( $manager->getPrototypes() );

echo '<h2>装饰模式</h2>';







