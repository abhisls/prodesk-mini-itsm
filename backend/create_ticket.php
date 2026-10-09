<?php
include 'db.php';
header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"), true);

$stmt = $conn->prepare("INSERT INTO tickets (user_id, title, problem, category, priority) VALUES (?,?,?,?,?)");
$stmt->bind_param("issss", $data['user_id'], $data['title'], $data['problem'], $data['category'], $data['priority']);

if($stmt->execute()){
  echo json_encode(["success"=>true, "message"=>"Ticket Created"]);
} else {
  echo json_encode(["success"=>false]);
}
?>