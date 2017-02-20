<?php

class User_Model extends model
{
    protected static $user_class = 'User_Object';

    public static function setUser($id, $name, $email)
    {
        // write query
        $query = "
            INSERT INTO users (id, name, emal)
            VALUES (?, ?, ?)
            
        ";
        // execute query
        $resultset = db::query($query, [$id, $name, $email]);

        return $objects;
    }
}