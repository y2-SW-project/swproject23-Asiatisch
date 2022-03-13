<?php

function data($key, $default=null) {
    if (array_key_exists("data", $_SESSION) && 
        is_array($_SESSION["data"]) && 
        array_key_exists($key, $_SESSION["data"])) 
    {
        return $_SESSION["data"][$key];
    }
    else {
        return $default;
    }
}

function error($key) {
    if (array_key_exists("errors", $_SESSION) && 
        is_array($_SESSION["errors"]) && 
        array_key_exists($key, $_SESSION["errors"])) 
    {
        return $_SESSION["errors"][$key];
    }
    else {
        return null;
    }
}

function chosen($key, $search, $default=null) {
    if (array_key_exists("data", $_SESSION) && 
        is_array($_SESSION["data"]) && 
        array_key_exists($key, $_SESSION["data"])) 
    {
        $value = $_SESSION["data"][$key];
        if (is_array($value)) {
            return in_array($search, $value);
        }
        else {
            return strcmp($value, $search) === 0;
        }
    }
    else if (!array_key_exists("data", $_SESSION) && $default !== null) {
        if (is_array($default)) {
          return in_array($search, $default);
        }
        else {
          return strcmp($default, $search) === 0;
        }
    }
    else {
        return false;
    }
}
?>