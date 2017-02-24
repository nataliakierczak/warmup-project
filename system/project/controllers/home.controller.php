<?php

$task_name = request::post('name', '');
$task_description = request::post('description', '');
$added_by = request::post('added_by', '');

if ($_POST){
    Tasks_Model::setTask($task_name, $task_description, $added_by);
}


$form_view = new view('home/form');
$form_view->task_name = $task_name;
$form_view->description = $task_description;
$form_view->added_by = $added_by;

//page
$page_layout = new view('home/page_layout');
$page_layout->form_view = $form_view;

//sets the title of the page
presenter::setTitle('Homepage');

//give the layout to the presenter
presenter::present($page_layout);
