<?php include 'config.php';
$title=$_POST['title']; $desc=$_POST['desc']; $assign=$_POST['assign_to'];
$conn->query("INSERT INTO tasks (title, description, assigned_to) VALUES ('$title','$desc',$assign)");
echo "Task Created";
?>