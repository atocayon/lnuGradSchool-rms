<?php
// Start the session
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lnu_grad_school";
$con = mysqli_connect($servername,$username,$password,$dbname);

if (mysqli_connect_errno()) {
  print_r("Failed to connect to MYSQL: ". mysqli_connect_error());
}

$uname = $_POST["uname"];
$pword = $_POST["pword"];

$login = $con->query("SELECT * FROM user_tbl WHERE uname = '".$uname."' AND pword = '".$pword."'");


if ($login->num_rows > 0) {
  $row = $login->fetch_assoc();
  $_SESSION["user"] = $row["uname"]; //set session
  echo json_encode(array("login" => "success"));
}else{
  echo json_encode(array("login" => "not_available"));
}

 ?>
