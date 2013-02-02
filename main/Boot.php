<?php
require 'Kroth.php';

function &core_instance() {
	static $_object;
	$_object = new Kroth();
	return $_object->_getMainClassInstance();
}