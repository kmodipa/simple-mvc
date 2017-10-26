<?php

class Controller extends Database
{
    public static function CreatView($viewName)
    {
        require_once ("./Views/$viewName.php");  /* Load the view */
        //static::doSomething();
    }
}

?>
