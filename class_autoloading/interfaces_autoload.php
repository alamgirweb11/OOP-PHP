<?php
  //  interface autoload not class
    /*** nullify any existing autoloads ***/
    spl_autoload_register(null, false);
 
    /*** specify extensions that may be loaded ***/
    spl_autoload_extensions('.php, .class.php');
 
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
 
    /*** register the loader functions ***/
    spl_autoload_register('classLoader');
 
    class blog implements iController
    {
        public function index()
        {
            echo 'hello from the index';
        }
    }
 
    /*** a new blog instance ***/
    $blog = new blog;
 
    /*** run the index method ***/
    $blog->index();