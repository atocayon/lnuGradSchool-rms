<?php

// Start the session
session_start();
$email = $_POST["email"];
$uname = $_POST["uname"];
$pword = $_POST["pword"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lnu_grad_school";
$con = mysqli_connect($servername,$username,$password,$dbname);


$register = $con->query("INSERT INTO user_tbl(uname,pword,email,login_status) VALUES('$uname', '$pword', '$email','0')");

if ($register) {
  echo json_encode(array("registration" => "success"));

}else{
  echo json_encode(array("insertData" => mysqli_error($con)));

  echo ("error ".mysqli_error($con));
}
?>
