<?php

class Input
{

    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    public static function get($key, $default = null)
    {
        if (Input::has($key)){
            return $_REQUEST[$key];
        } else {
            return $default;
    }
    }


    public static function safe($string){
        return htmlspecialchars(strip_tags($string));
    }

    public static function inputHas($key){
        return isset($_REQUEST[$key]);
    }


    public static function inputGet($key, $default =""){
        if (inputHas($key)){
            return $_REQUEST[$key];
        } else {
            return $default;
        }
    }

//escape hacker input

    public static function escape($input){
        if(!is_string($input)){
            return false;
        } else {
            return Input::safe($input);
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
