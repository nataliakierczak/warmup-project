<?php

class Tasks_Model extends model
{
    protected static $task_class = 'Task_Object';

    public static function setTask($id, $name, $email)
    {
        // write query
        $query = "
            INSERT INTO task (name, description, added_by, assigned_to)
            VALUES (?, ?, ?, ?)
            
        ";
        // execute query
        $resultset = db::query($query, [$name, $description, $added_by, $assigned_to]);

        return $objects;
    }
}