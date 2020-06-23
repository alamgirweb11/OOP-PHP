<?php 
class Math{
		public static $val;
		public static function init($var){
			    static::$val=$var;
			    return new static;
		}
		public static function add($var){
			    static::$val+=$var;
			    return new static;  // this line add for static method
		}
		public static function sub($var){
			    static::$val-=$var;
			    return new static;
		}
		public static function result(){
			    return static::$val;
		}
	}
echo Math::init(20)->add(10)->sub(5)->result()."<br>"; // result = 20+10-5 = 25
echo Math::sub(10)->result(); // result = 25-10 = 15