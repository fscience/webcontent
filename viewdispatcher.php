<?php

require_once 'init.php';

function doDispatch () {
	$hash = isset($_GET['hash']) ? $_GET['hash'] : '';
	
	$route = Dispatcher::getInstance()->dispatch($hash);
	
	if ($route != null)
		include WEB_ROOT . $route['url'];
}

doDispatch();