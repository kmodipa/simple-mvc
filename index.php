<?php

/* 1st things 1st we include our routes
 *
 * By including Routes.php we get access to the $Routes
 * array containing all of the valid routes for our app
 */
require_once ('Routes.php');


/* The first thing we do is autoload all of our classes. We're using the older
 * __autoload function as opposed to spl_autoload_register because all of our
 * classes are located in the /classes/ directory.
 */
function __autoload($class_name)
{
    require_once './classes/'.$class_name.'.php';
}

?>