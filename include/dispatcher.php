<?php
class Dispatcher {
	static $_instance;
	
	//
	private $_routingTable;
	
	public static function getInstance() {
		if (self::$_instance == null) {
			self::$_instance = new Dispatcher ();
			return self::$_instance;
		} else {
			return self::$_instance;
		}
	}
	
	private function __construct() {
		$this->_routingTable = Configure::getRouteTable();
	}
	
	public function dispatch($url) {
		$defRoute = null;
		
		foreach ($this->_routingTable as $route) {
			if (preg_match($route['hash'], $url, $matches)) {
				$defRoute = $route;
				break;
			}
		}
		
		return $defRoute;
	}
}