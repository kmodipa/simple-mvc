<?php

class Route
{
    public static $validRoutes = array(); /* to collect all the routes passed */

    public static function set($route, $function)
    {
        /* Three special keywords self, parent and static are used to access properties
         * or methods from inside the class definition.*/
        self::$validRoutes[] = $route; /* collect */

        /*print_r(self::$validRoutes);
         *echo '</br>';
         */

        /* Run the correct function */
        if ($_GET['url'] == $route)
        {
            $function->__invoke();  /* This will run the function from Routes.php */
        }
    }
}


?>