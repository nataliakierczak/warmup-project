<?php

class Tasks_Model extends model
{
    protected static $object_class = 'Task_Object';

    public static function setTask($description, $selected_by, $added_by)
    {
        // write query
        $query = "
            INSERT INTO task (description, selected_by, added_by)
            VALUES (?, ?, ?)
            
        ";
        // execute query
        $resultset = db::query($query, array($description, $selected_by, $added_by));

        return $objects;
    }
}