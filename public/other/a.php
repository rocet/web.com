<?php

header( 'Content-Type:text/html;charset=UTF-8' );
function dump() {
	echo '<pre>';
	foreach ( func_get_args() as $dump ) {
		ob_start();
		echo '<?php ' . PHP_EOL;
		var_dump( $dump );
		echo highlight_string( ob_get_clean(), true );
	}
	echo '</pre>';
}

echo '<h2>工厂模式</h2>';

interface IFactory {
	public static function build( $config );
}

interface IPrototype {
	public function copy();

	public function copyFull();
}

abstract class Factory implements IFactory {
	public static function build( $config ) {
		$prototype           = substr( get_called_class(), 0, - 7 );
		$prototypeReflection = class_exists( $prototype ) ? new ReflectionClass( $prototype ) : null;
		$iterator = new RecursiveIteratorIterator( new RecursiveArrayIterator( $config ), RecursiveIteratorIterator::CHILD_FIRST );
		while ( $iterator->valid() ) {
			if ( $iterator->hasChildren() ) {
				$attrPrototype = $iterator->key();
				$attrPrototypeReflection = class_exists( $attrPrototype ) ? new ReflectionClass( $attrPrototype ) : null;
				if( $attrPrototypeReflection && $attrPrototypeReflection->implementsInterface( 'IPrototype' ) ){
					$iterator->offsetSet($attrPrototype, $attrPrototypeReflection->getMethod( 'copyFull' )->invoke( new $attrPrototype( $iterator->getChildren() ) ) );
				}
			}
			$iterator->next();
		}
		return $prototypeReflection && $prototypeReflection->implementsInterface( 'IPrototype' ) ? $prototypeReflection->getMethod( 'copyFull' )->invoke( new $prototype( $iterator->getArrayCopy() ) ) : null;
	}
}

abstract class Prototype implements IPrototype {
	public function __construct( $config = null ) {
		foreach ( $config as $key => $item ) {
			$this->$key = $item;
		}
	}

	public function copy() {
		return clone $this;
	}

	public function copyFull() {
		return unserialize( serialize( $this ) );
	}
}

class Bord extends Prototype {

}

class Cpu extends Prototype {

}

class Memory extends Prototype {

}

class Disk extends Prototype {

}

class Monitor extends Prototype {

}

interface IComputerComponents {

}

interface IComputer {

}

class ComputerComponents extends Prototype implements IComputerComponents {

}

class Computer extends Prototype implements IComputer  {

}

class Brand extends Prototype{

}

class BordFactory extends Factory {

}

class CpuFactory extends Factory {

}

class MemoryFactory extends Factory {

}

class DiskFactory extends Factory {

}

class MonitorFactory extends Factory {

}

class ComputerComponentsFactory extends Factory {

}

class ComputerFactory extends Factory {

}

dump( $mac = BordFactory::build( array( 'brand' => 'MIS' ) ), $pc = CpuFactory::build( array( 'brand' => 'AMD' ) ) );

echo '<h2>工厂方法模式, 建造者模式</h2>';

dump( $mycomputer = ComputerFactory::build( array(
	'Bord'    => array( 'Brand' => array('sss' => 'MIS')  ),
	'Cpu'     => array( 'brand' => 'Inter' ),
	'Memory'  => array( 'brand' => 'Hynix' ),
	'Disk'    => array( 'brand' => 'Ibm' ),
	'Monitor' => array( 'brand' => 'LCD' ),
) ) );

dump( ComputerComponentsFactory::build(array( 'Bord' => array('ss') )));

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


class ConcretePrototype implements IPrototype {
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

