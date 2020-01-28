<?php
// Start the session
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lnu_grad_school";
$con = mysqli_connect($servername,$username,$password,$dbname);

if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
}
  else {
        $user = $_SESSION["user"];
        $select_uploader = $con->query("SELECT * FROM user_tbl WHERE uname = '$user'");
        $uploader = $select_uploader->fetch_assoc();
        $id = $uploader['id'];
        $file = $_FILES['file']['name'];
        $dir = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], './uploads/' . $_FILES['file']['name']);
        $upload = $con->query("INSERT INTO forms(fileName, directory, uploader) VALUES('$file', '$dir','$id')");
    }


?>
