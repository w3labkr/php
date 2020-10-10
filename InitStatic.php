<?php
/**
 * Initializing a class using static methods
 */
class InitStatic {

  private static $_foo = 'Hello';

  public static function foo() {
    print self::$_foo;
  }
  
  public static function bar() {
    print 'World';
  }
  
} // end of class

InitStatic::foo();
InitStatic::bar();