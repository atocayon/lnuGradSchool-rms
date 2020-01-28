<?php

// Start the session
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lnu_grad_school";
$con = mysqli_connect($servername,$username,$password,$dbname);

$doc = $_GET['doc'];

$download_query = $con->query("SELECT * FROM forms WHERE id = '$doc'");

if ($download_query) {
  $file = $download_query->fetch_assoc();
  header("Content-disposition: attachment; filename=".$file['fileName']);
  header("Content-type:".$file['directory']);
  readfile($file['fileName']);
}


?>
