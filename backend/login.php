<?php
include 'config.php';
$email = $_POST['email']; $password = $_POST['password'];
$res = $conn->query("SELECT * FROM users WHERE email='$email'");
if($res->num_rows==1){
 $user = $res->fetch_assoc();
  if(password_verify($password, $user['password'])){
    $_SESSION['user'] = $user;
      echo json_encode(["status"=>"success","role"=>$user['role']]);
       } else { echo json_encode(["status"=>"fail"]); }
       } else { echo json_encode(["status"=>"fail"]); }
       ?>