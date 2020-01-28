<?php


// Start the session
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lnu_grad_school";
$con = mysqli_connect($servername,$username,$password,$dbname);


$search = $_POST["search"];
$query = $con->query("SELECT students_tbl.id AS idNumber,
  students_tbl.name AS name,
  graduate_programs.program AS degree
  FROM students_tbl
  INNER JOIN enrolled_graduate_programs_tbl ON students_tbl.id = enrolled_graduate_programs_tbl.student_tbl_id
  INNER JOIN graduate_programs ON enrolled_graduate_programs_tbl.degree_program = graduate_programs.id
  WHERE students_tbl.id LIKE '%$search%'
  OR students_tbl.name
  LIKE '%$search%'
  OR enrolled_graduate_programs_tbl.degree_program
  LIKE '%$search%'");

    $myArray = array();
                            if ($query) {
                              while($row = $query->fetch_array(MYSQLI_ASSOC)) {
                                      $myArray[] = $row;
                              }
                              echo json_encode($myArray);
          
                            }else{
                              echo ("error ".mysqli_error($con));
                            }

?>
