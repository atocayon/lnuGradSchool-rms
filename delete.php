<?php


// Start the session
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lnu_grad_school";
$con = mysqli_connect($servername,$username,$password,$dbname);

  $id = $_GET["id"];
$delete = $con->query("DELETE FROM student_tbl WHERE id = '$id'");
$delete1 = $con->query("DELETE FROM school_records_tbl WHERE student_tbl_id = '$id'");
$delete2 = $con->query("DELETE FROM job_records_tbl WHERE student_tbl_id = '$id'");
$delete3 = $con->query("DELETE FROM incase_of_emergency WHERE student_tbl_id = '$id'");
$delete4 = $con->query("DELETE FROM enrolled_graduate_programs_tbl WHERE student_tbl_id = '$id'");

header("Location: home.php");



?>
