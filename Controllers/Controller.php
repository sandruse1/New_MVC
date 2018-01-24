<?php
/**
 * Created by PhpStorm.
 * User: sandruse
 * Date: 24.01.18
 * Time: 12:50 PM
 */

class Controller extends Database
{

    public static function CreateView($viewName) {
        require_once ("./Views/Header.php");
        require_once ("./Views/$viewName.php");
        require_once ("./Views/Footer.php");
    }
}