<?php
class A {

}

Class B extends A {
  public function __construct($obj6,$obj5) {
	$this->obj6 = $obj6;
	$this->obj7 = $obj7;
 }
  protected $obj6;
  protected $obj7;
}

Class C extends B {
  public function __construct($obj1, $obj2) {
   parent::__construct($obj1);
    $this->obj2 = $obj4;
	$this->obj2 = $obj6;
	$this->obj2 = $obj5;
	$this->obj2 = $obj2;
  }
  protected $obj4;
  protected $obj6;
  protected $obj5;
  protected $obj2;
}

$obj7 = new A();
$obj6 = new A($obj7);
$obj5 = new A($obj6);
$obj4 = new B($obj5,obj6);
$obj3 = new C($obj4);
$obj2 = new ?($obj4);
$obj1 = new C($obj2);
?>