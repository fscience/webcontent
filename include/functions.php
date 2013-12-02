<?php

function __autoload($class) {
	$class = strtolower($class);

	if (file_exists(WEB_ROOT . '/include/' . $class . '.php')) {
		require_once(WEB_ROOT . '/include/' . $class . '.php');
	} else {
		echo '加载失败。';
	}
}