<?php

class User_Model extends model
{
    protected static $object_class = 'User_Object';

    public static function setUser($id, $name, $email)
    {
        // write query
        $query = "
            INSERT INTO users (id, name, emal)
            VALUES (?, ?, ?)    
        ";
        // execute query
        $resultset = db::query($query, array($id, $name, $email));

        return $objects;
    }
}