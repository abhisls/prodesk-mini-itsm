<?php
include 'db.php';
header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"), true);

$email = $data['email'];
// Interview me bolna: "Sir security ke liye prepared statement use kiya"
$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$res = $stmt->get_result();

if($res->num_rows > 0){
  echo json_encode(["success"=>true, "role"=>"admin"]);
} else {
  echo json_encode(["success"=>false]);
}
?>