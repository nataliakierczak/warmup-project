<?php

$tasks = new view('home/tasks');

$users = new view('home/users');
$users->user = User_Model::setUser();

//page
$page_layout = new view('home/page_layout');
$page_layout->tasks = $tasks;
$page_layout->users = $users;

//sets the title of the page
presenter::setTitle('Homepage');

//give the layout to the presenter
presenter::present($page_layout);
