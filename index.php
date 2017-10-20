<?php

/* 1st things 1st we include our routes */
require_once ('Routes.php');


/*  */
function __autoload($class_name)
{
    require_once './classes/'.$class_name.'.php';
}

?>