<?php 
// multiple autoloads use for solve the file extension problem
/*** nullify any existing autoloads ***/
spl_autoload_register(null, false);
 
 /*** specify extensions that may be loaded ***/
    spl_autoload_extensions('.php, .class.php, .lib.php');
 
    /*** class Loader ***/
    function classLoader($class)
    {
        $filename = strtolower($class) . '.class.php';
        $file ='classes/' . $filename;
        if (!file_exists($file))
        {
            return false;
        }
        include $file;
    }
 
    function libLoader($class)
    {
        $filename = strtolower($class) . '.lib.php';
        $file ='libs/' . $filename;
        if (!file_exists($file))
        {
            return false;
        }
        include $file;
    }
 
    /*** register the loader functions ***/
    spl_autoload_register('classLoader');
    spl_autoload_register('libLoader');
 
    /*** a new instance of norman ***/
    $norman = new norman;  // result : fatal error beacuse norman class is not exits
 
    /*** make norman do some thing ***/
    $norman->do_something();