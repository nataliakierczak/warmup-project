<?php

class Tasks_Model extends model
{
    protected static $task_class = 'Task_Object';

    public static function setTask($id, $name, $email)
    {
        // write query
        $query = "
            INSERT INTO task (id, name, description, created_date, added_by, selected_by, completed)
            VALUES (?, ?, ?, ?, ?, ?, ?)
            
        ";
        // execute query
        $resultset = db::query($query, [$id, $name, $description, $created_date, $added_by, $selected_by, $completed]);

        return $objects;
    }
}