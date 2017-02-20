<?php

class Tasks_Model extends model
{
    protected static $object_class = 'Task_Object';

    public static function setTask($description, $selected_by, $added_by)
    {
        // write query
        $query = "
<<<<<<< HEAD
            INSERT INTO task (description, selected_by, added_by)
            VALUES (?, ?, ?)
            
        ";
        // execute query
        $resultset = db::query($query, array($description, $selected_by, $added_by));
=======
            INSERT INTO task (name, description, added_by, selected_by)
            VALUES (?, ?, ?, ?)
            
        ";
        // execute query
        $resultset = db::query($query, [$name, $description, $added_by, $selected_by]);
>>>>>>> 9781c853642ff05c5b482cdb13f3b60251687302

        return $objects;
    }
}