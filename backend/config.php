<?php
session_start();
$host="localhost"; $user="root"; $pass=""; $db="prodesk_db";
$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error) die("DB Connection Failed");
?>