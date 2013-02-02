<?php
class Kroth {
	
	/**
	 Variable — $INSTANCE_VAR
	 
	 › The instance to access this class from others
	 › when needed.
	 
	 › Example:
	 	<? class Whatever { //...
	 	function myfunction($aparam, $what, $STOP) {
	 		$pfft = &core_instance();
	 		$pfft->something = 5;
	 		return $pfft->something;
	 	}
	 	?>
	 */
	 private static $INSTANCE_VAR;
	 
	 /**
	  PHP Magic — __construct()
	  
	  › 0 params
	  › 0 return
	  */
	 function __construct() {
	 	self::$INSTANCE_VAR = &$this;
	 }
	 
	 /**
	  Function — _getMainClassInstance()
	  
	  › 0 params
	  › 1 return: object
	  */
	 function &_getMainClassInstance() {
	 	return self::$INSTANCE_VAR;
	 }
	 
	
}