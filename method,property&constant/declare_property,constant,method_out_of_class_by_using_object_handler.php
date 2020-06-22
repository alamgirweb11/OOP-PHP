<?php 
class SimpleClass{
	    public $name = "Alamgir Hosen"; // public propety declare
   		private const a = "America"; // private constant property declare
       
       // public method declare
   		public function disName(){
   			  echo $this->name;
   		}
   	}
   		//object creation
   		$obj =new SimpleClass();
   		$obj->disName();