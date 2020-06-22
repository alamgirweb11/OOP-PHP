<?php 
class SimpleClass{
	    static $name = "Alamgir Hosen"; // public propety declaration
   	  const a = "America"; // private constant property declaration
       
       // public method declare
   		public function disName(){
   			  echo self::$name,"<br>"; // scope resulation with self keyword
          echo self::a;
   		}
   	}
   		//object creation
   		$obj =new SimpleClass();
   		$obj->disName();