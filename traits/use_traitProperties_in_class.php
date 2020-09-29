<?php
// trait properties declare 
trait fruits{
	    public $orange = 350;
	    public $mango = 300;
	    public $apple = 400;
}
// make a class
class category{
	   use fruits;
	   // change the mango value
	   public $mango = 700;
}

// make object for category class
$fruit = new category();
//echo $fruit->orange; // resutl:350 have to off the new value of mango
echo $fruit->mango; // result:fatal error beacuse we change the property value in category class