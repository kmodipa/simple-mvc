<?php

define('ROOT_DIR', dirname(__FILE__));
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
    if (file_exists(ROOT_DIR.'/classes/'.$class_name.'.php'))
    {
        require_once (ROOT_DIR.'/classes/'.$class_name.'.php');
    }
    elseif (file_exists(ROOT_DIR.'/Controllers/'.$class_name.'.php'))
    {
        require_once (ROOT_DIR.'/Controllers/'.$class_name.'.php');
    }

}

?>