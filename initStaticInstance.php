<?php
/**
 * Initializing a class using static construct
 */
class InitStaticInstance {

  private static $_instance;
  private static $_foo;

  private function __construct() {
    self::runFoo();
  }

  public static function getInstance() {
    if (is_null(self::$_instance)) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }

  public static function setFoo($foo='') {
  	self::$_foo = $foo;
  }

  public static function getFoo() {
  	return self::$_foo;
  }

  public static function runFoo() {
    print self::$_foo;
  }
  
} // end of class

InitStaticInstance::setFoo('Hello');
InitStaticInstance::getInstance();