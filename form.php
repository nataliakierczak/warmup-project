<?php
if (!empty($_POST)) {
$data= array (
'name'=> $_POST['name'],
'description' => $_POST['description'],
'added-by' => $_POST['added-by'],
'assigned-to' => $_POST['assigned-to'],

);

insert_data($data);
}

?>
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

Description:
<textarea name="description" id="" cols="30" rows="10"></textarea>
<br><hr>

Added by: 
<select name="added-by">
<option value="Aniko">Aniko</option>
<option value="Ezequiel">Ezequiel</option>
<option value="Mohamed">Mohamed</option>
<option value="Natalia">Natalia</option>
<option value="Tomomi">Tomomi</option>
</select>
<br><hr>

Selected by: 
<select name="assigned-to">
<option value="Aniko">Aniko</option>
<option value="Ezequiel">Ezequiel</option>
<option value="Mohamed">Mohamed</option>
<option value="Natalia">Natalia</option>
<option value="Tomomi">Tomomi</option>
</select>
<br><hr>


<input type="submit" value="Submit the task">
<br><hr>
</form>

</body>
</html>
