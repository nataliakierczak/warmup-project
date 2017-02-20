<?php

$form_view = new view('home/form');
$form_view->name = $name;
$form_view->description = $description;
$form_view->added_by = $added_by;
$form_view->selected_by = $selected_by;

//form
$name = request::post('name', '');
$description = request::post('description', '');
$added_by = request::post('added_by', '');
$selected_by = request::post('selected_by', '');

//page
$page_layout = new view('home/page_layout');
$page_layout->form_view = $form_view;

//sets the title of the page
presenter::setTitle('Homepage');

//give the layout to the presenter
presenter::present($page_layout);
