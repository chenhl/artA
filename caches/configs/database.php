<?php

return array (
	'default' => array (
		'hostname' => $_SERVER['MYSQL_HOST'],
		'port' => $_SERVER['MYSQL_PORT'],
		'database' => $_SERVER['MYSQL_DATABASE'],
		'username' => $_SERVER['MYSQL_USERNAME'],
		'password' => $_SERVER['MYSQL_PASSWORD'],
		'tablepre' => 'v9_',
		'charset' => 'utf8',
		'type' => 'mysqli',
		'debug' => true,
		'pconnect' => 0,
		'autoconnect' => 0
		),
);

?>