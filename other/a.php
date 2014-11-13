<?php

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

	public function attach(SplObserver $obServer ) {
		$this->_obServers[] = $obServer;
	}

	public function detach(SplObserver $obServer ) {
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
	public function update(SplSubject $obSubject ) {
		echo $obSubject->getChange();
	}
}

abstract class Subject implements SplSubject{
	use TSubject;
}

abstract class SubjectSingleton implements SplSubject{
	use TSubject;
	use TSingleton;
	public static function change($change){
		static::instance()->setChange($change);
	}
}

abstract class Server implements SplObserver{
	use TServer;
}

class Subject1 extends Subject {
	public function __construct(){
		$this->attach(new Server1());
		$this->attach(new Server2());
	}
}

class Subject2 extends SubjectSingleton {
	protected static $instance;
	public function __construct(){
		$this->attach(new Server1());
		$this->attach(new Server2());
	}
}

class Server1 extends Server  {

}

class Server2 extends Server {

}

$subject1 = new Subject1();

$subject1->setChange(100);

Subject2::change(60);
