<?php
/**
 * Created by PhpStorm.
 * User: sandruse
 * Date: 24.01.18
 * Time: 12:30 PM
 */

require_once('Routes.php');

function __autoload($class_name) {

    if (file_exists('./classes/'.$class_name.'.php')){
        require_once './classes/'.$class_name.'.php';
    } elseif (file_exists('./Controllers/'.$class_name.'.php')){
        require_once './Controllers/'.$class_name.'.php';
    }

}