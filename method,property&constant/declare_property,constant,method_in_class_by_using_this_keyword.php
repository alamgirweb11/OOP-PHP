<?php 
class SimpleClass{
	    public $name = "Alamgir Hosen"; // public propety declaration
   		private const a = "America"; // private constant property declaration
       
       // public method declare
   		public function disName(){
   			  echo $this->name;
   		}
   	}
   		//object creation
   		$obj =new SimpleClass();
   		$obj->disName();