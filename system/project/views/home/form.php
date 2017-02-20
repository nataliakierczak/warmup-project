<<<<<<< HEAD
<?php
if (!empty($_POST)) {
$data= array (
'name'=> $_POST['name'],
'description' => $_POST['description'],
'added-by' => $_POST['added-by'],
'selected-by' => $_POST['selected-by'],
'completed' => $_POST['completed'],
);

insert_data($data);

?>

<form action="" method="post">


=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

<h2>Insert the task details</h2>
Task name:
<input type= "text" name="name">
<br><hr>
>>>>>>> 9781c853642ff05c5b482cdb13f3b60251687302

Description:
<textarea name="description" id="" cols="30" rows="10"></textarea>
<br><hr>

Added by: 
<<<<<<< HEAD
<select name="added-by">
=======
<select name="added_by">
>>>>>>> 9781c853642ff05c5b482cdb13f3b60251687302
<option value="Aniko">Aniko</option>
<option value="Ezequiel">Ezequiel</option>
<option value="Mohamed">Mohamed</option>
<option value="Natalia">Natalia</option>
<option value="Tomomi">Tomomi</option>
</select>
<br><hr>

Selected by: 
<<<<<<< HEAD
<select name="selected-by">
=======
<select name="selected_by">
>>>>>>> 9781c853642ff05c5b482cdb13f3b60251687302
<option value="Aniko">Aniko</option>
<option value="Ezequiel">Ezequiel</option>
<option value="Mohamed">Mohamed</option>
<option value="Natalia">Natalia</option>
<option value="Tomomi">Tomomi</option>
</select>
<br><hr>

<<<<<<< HEAD
Completed:
<input type="checkbox" name="completed">
<br><hr>
=======
>>>>>>> 9781c853642ff05c5b482cdb13f3b60251687302

<input type="submit" value="Submit the task">
<br><hr>
</form>

<<<<<<< HEAD
=======
</body>
</html>
>>>>>>> 9781c853642ff05c5b482cdb13f3b60251687302
