<?php

class Controller
{
    public static function CreatView($viewName)
    {
        require_once ("./Views/$viewName.php");
    }
}

?>