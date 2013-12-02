<?php
class Configure {
	static function getRouteTable() {
		$routetable = array (
				array (
						'hash' => '|^/login$|',
						'url' => '/admin/view/login.php' 
				),
				array (
						'hash' => '|^/main$|',
						'url' => '/admin/view/main.php' 
				) 
		);
		
		return $routetable;
	}
}