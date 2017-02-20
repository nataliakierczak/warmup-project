<?php

class request
{
    /**
    *gets a value from the $_GET global or returns $default
    */
    public static function get($key, $default = null)
    {
        if(isset($_GET[$key]))
        {
            return $_GET[$key];
        }
        else
        {
            return $default;
        }
    }

    public static function post($key, $default = null)
    {
        if(isset($_POST[$key]))
        {
            return $_POST[$key];
        }
        else
        {
            return $default;
        }
    }

    public static function isPost()
    {
       if($_SERVER['REQUEST_METHOD'] == 'POST')
       {
           return true;
       }
       else
       {
           return false;
       }
    }

}