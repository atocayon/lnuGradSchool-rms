<?php
// Start the session
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lnu_grad_school";
$con = mysqli_connect($servername,$username,$password,$dbname);

$doc = $_GET['doc'];

$select_file = $con->query("SELECT * FROM forms WHERE id = '$doc'");

if ($select_file ) {
  $resFileSelected = $select_file->fetch_assoc();

  if (!unlink($resFileSelected['directory'])) {
    echo $resFileSelected['fileName']."cannot be deleted due to an error";
  }else{
    $delete_query= $con->query("DELETE FROM forms WHERE id = '$doc'");
    header("Location: home.php");
  }

}



?>
