<?php
/**
 * Created by PhpStorm.
 * User: sandruse
 * Date: 24.01.18
 * Time: 12:40 PM
 */

class Route
{
    public static $validRoutes = array();

    public static function set($route, $function){

        self::$validRoutes[] = $route;

        if ($_GET['url'] == $route) {
            $function->__invoke();
        }


    }
}