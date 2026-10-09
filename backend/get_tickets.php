<?php
include 'db.php';
$result = $conn->query("SELECT * FROM tickets ORDER BY id DESC");
$tickets = [];
while($row = $result->fetch_assoc()){
  $tickets[] = $row;
}
echo json_encode($tickets);
?>