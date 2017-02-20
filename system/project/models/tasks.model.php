<?php

class Tasks_Model extends model
{
    protected static $task_class = 'Task_Object';

    public static function setTask($id, $name, $email)
    {
        // write query
        $query = "
            INSERT INTO task (name, description, added_by, selected_by)
            VALUES (?, ?, ?, ?)
            
        ";
        // execute query
        $resultset = db::query($query, [$name, $description, $added_by, $selected_by]);

        return $objects;
    }
}