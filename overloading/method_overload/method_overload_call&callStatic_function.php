<?php 
class TestMethod
{
    public function __call($name, $arguments)
    {
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "<br>";
    }
 
    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method '$name' "
             . implode(', ', $arguments). "<br>";
    }
}
// create object for TestMethod class
$obj = new TestMethod();
$obj->runTest('in object context');
TestMethod::runTest('in static context');