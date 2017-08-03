
<?php

function safe($string){
    return htmlspecialchars(strip_tags($string));
}

function inputHas($key){
    return isset($_REQUEST[$key]);
}

//value at key

function inputGet($key, $default =""){
    if (inputHas($key)){
        return $_REQUEST[$key];
    } else {
        return $default;
    }
}

//escape hacker input

function escape($input){
    if(!is_string($input)){
        return false;
    } else {
        return safe($input);
    }
}