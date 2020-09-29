<?php 
/*
*static property and method both are support in trait
*/
trait fruits{
	    public $mango = 300;
	    public $apple = 400;
	    static public $sell = 700;
	  public static function test(){
	  	   return self::$sell;
	  }
}
class account{
	   use fruits;
}
// make object for account class
$fruit = new account();
echo $fruit::$sell; // 700
echo "\n";
echo account::test(); // 700