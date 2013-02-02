<?php
/*************************
Kroth PHP Framework

** Requirements: PHP >= 5

*/

$main_folder = 'main';
$apps_folder = 'apps';

$constants = array('BASEDIR' => str_replace('\\', '/', realpath($main_folder)).'/',
  				'APPSDIR' => str_replace( '\\', '/', realpath($apps_folder) ).'/');

function defineConsts($input=NULL) {
	global $constants;
	
	if ($input != NULL) {
		foreach ($input as $constant => $value)
			define($constant, $value);
	}else {
	foreach ($constants as $constant => $value)
			define($constant, $value);
	}
}

defineConsts();

require BASEDIR . 'Boot.php';
