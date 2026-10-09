<?php include 'config.php';
$result = $conn->query("SELECT tasks.*, users.name FROM tasks LEFT JOIN users ON tasks.assigned_to=users.id");
$data=[]; while($row=$result->fetch_assoc()){ $data[]=$row; }
echo json_encode($data);
?>