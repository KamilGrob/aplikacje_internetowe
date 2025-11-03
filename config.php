<?php
define('_SERVER_NAME', 'localhost');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '');
define('_APP_URL', _SERVER_URL._APP_ROOT);
define('_CALC_PATH', _APP_URL.'/calculator');
define('_CREDIT_CALC_PATH', _APP_URL.'/creditCalculator');
define('_LOGIN_PATH', _APP_URL.'/security');
define('_LOGOUT_PATH', _APP_URL.'/security/logout.php');
define("_ROOT_PATH", dirname(__FILE__));

function out(&$param){
	if (isset($param)){
		echo $param;
	}
}
?>