<?php
$main_folder = 'main';
$apps_folder = 'apps';

$constants = array('BASEDIR' => str_replace('\\', '/', realpath($main_folder)).'/',
					'APPSDIR' => str_replace( '\\', '/', realpath($apps_folder) ).'/');

foreach ($constants as $constant => $value)
	define($constant, $value);

require BASEDIR . 'Boot.php';