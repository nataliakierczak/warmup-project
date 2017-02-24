<?php

class Tasks_Model extends model
{
    protected static $object_class = 'Task_Object';

    public static function setTask($task_name, $task_description, $added_by)
    {
        // write query
        $query = "
            INSERT INTO tasks (task_name, task_description, added_by)
            VALUES (?, ?, ?)
            
        ";
        // execute query
        db::query($query, array($task_name, $task_description, $added_by));

    }
}