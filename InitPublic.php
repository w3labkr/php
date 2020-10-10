<?php
/**
 * Initializing a class using public methods
 */
class InitPublic {

  private $_foo;

  public function __construct($foo='') {
    $this->_foo = $foo;
  }
  
  public function foo() {
    print $this->_foo;
  }
  
} // end of class

$InitPublic = new InitPublic('foo');