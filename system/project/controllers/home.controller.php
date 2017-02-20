<?php

$tasks = new view('home/tasks');

$users = new view('home/users');
$users->user = Tasks_Model::setTask($description, $selected_by, $added_by);

//form
$description = request::post('description', '');
$added_by = request::post('added_by', '');
$selected_by = request::post('selected_by', '');

$form_view = new view('home/form');
$description->description = $description;
$added_by->added_by = $added_by;
$selected_by->selected_by = $selected_by;

//page
$page_layout = new view('home/page_layout');
$page_layout->tasks = $tasks;
$page_layout->users = $users;

//sets the title of the page
presenter::setTitle('Homepage');

//give the layout to the presenter
presenter::present($page_layout);
