<?php

// Start the session
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lnu_grad_school";
$con = mysqli_connect($servername,$username,$password,$dbname);


$userID = $_POST["userID"];
$scholarship = $_POST["scholarship"];
$fullname = $_POST["fullname"];
$gender = $_POST["gender"];
$bday = $_POST["bday"];
$age = $_POST["age"];
$civilStatus = $_POST["civilStatus"];
$bPlace = $_POST["bPlace"];
$religion = $_POST["religion"];
$citizenship = $_POST["citizenship"];
$cNumber = $_POST["cNumber"];
$email = $_POST["email"];
$fbName = $_POST["fbName"];
$residenceAddress =$_POST["residenceAddress"];
$permanentAddress =$_POST["permanentAddress"];
$financialSource =$_POST["financialSource"];
$statusOfEnrollment =$_POST["statusOfEnrollment"];
$dateRegistered = $_POST["dateRegistered"];

$inCaseOfEmergency = $_POST["inCaseOfEmergency"];
$contactNumberInCaseOfEmergency =$_POST["contactNumberInCaseOfEmergency"];

//
// $firstJobTitle =  $_POST["firstJobTitle"];
// $firstCompanyName = $_POST["firstCompanyName"];
// $firstInclusiveDate = $_POST["firstInclusiveDate"];
// $secondJobTitle = $_POST["secondJobTitle"];
// $secondCompanyName =  $_POST["secondCompanyName"];
// $secondInclusiveDate =  $_POST["secondInclusiveDate"];
// $thirdJobTitle =  $_POST["thirdJobTitle"];
// $thirdCompanyName = $_POST["thirdCompanyName"];
// $thirdInclusiveDate = $_POST["thirdInclusiveDate"];
// $fourthJobTitle = $_POST["fourthJobTitle"];
// $fourthCompanyName =  $_POST["fourthCompanyName"];
// $fourthInclusiveDate =  $_POST["fourthInclusiveDate"];
// $fifthJobTitle =  $_POST["fifthJobTitle"];
// $fifthCompanyName = $_POST["fifthCompanyName"];
// $fifthInclusiveDate = $_POST["fifthInclusiveDate"];

$collegeDegreeEarned =  $_POST["collegeDegreeEarned"];
$collegeSchoolGraduated = $_POST["collegeSchoolGraduated"];
$collegeDateOfGraduation =  $_POST["collegeDateOfGraduation"];
$collegeMajor = $_POST["collegeMajor"];
$collegeHonorsReceived =  $_POST["collegeHonorsReceived"];
$mastersDegreeEarned =  $_POST["mastersDegreeEarned"];
$mastersSchoolGraduated = $_POST["mastersSchoolGraduated"];
$mastersDateOfGraduation =  $_POST["mastersDateOfGraduation"];
$mastersMajor = $_POST["mastersMajor"];
$mastersHonorsReceived =  $_POST["mastersHonorsReceived"];

$desiredDegreeProgram = $_POST["desiredDegreeProgram"];
$desiredMajor = $_POST["desiredMajor"];

$update_student_tbl = $con->query("UPDATE students_tbl SET
  scholarship = '$scholarship',
  name = '$fullname',
  age = '$age',
  bdate = '$bday',
  sex = '$gender',
  religion = '$religion',
  cvlstatus = '$civilStatus',
  bplace = '$bPlace',
  ctznship = '$citizenship',
  residence_address = '$residenceAddress',
  permanent_address = '$permanentAddress',
  email = '$email',
  contactNum = '$cNumber',
  fbAccnt = '$fbName',
  financial_src = '$financialSource',
  statusOfEnrollment = '$statusOfEnrollment',
  date_registered = '$dateRegistered'
  WHERE id = '$userID'
  ");

  $update_collegeSchoolRecords_tbl = $con->query("UPDATE school_records_tbl SET
    degree_earned = '$collegeDegreeEarned',
    schoolName = '$collegeSchoolGraduated',
    date_of_graduation = '$collegeDateOfGraduation',
    major = '$collegeMajor',
    honors_received = '$collegeHonorsReceived'
    WHERE
    level = '3' AND student_tbl_id = '$userID'
  ");

  $update_mastersSchoolRecords_tbl = $con->query("UPDATE school_records_tbl SET
    degree_earned = '$mastersDegreeEarned',
    schoolName = '$mastersSchoolGraduated',
    date_of_graduation = '$mastersSchoolGraduated',
    major = '$mastersMajor',
    honors_received = '$mastersHonorsReceived'
    WHERE
    level = '4' AND student_tbl_id = '$userID'
  ");

  $update_incaseOfEmergency_tbl = $con->query("UPDATE incase_of_emergency SET
    name = '$inCaseOfEmergency',
    contactNum = '$contactNumberInCaseOfEmergency'
    WHERE
    student_tbl_id = '$userID'
  ");

  $update_enrolledGraduatePrograms = $con->query("UPDATE enrolled_graduate_programs_tbl SET
    degree_program = '$desiredDegreeProgram',
    major = '$desiredMajor',
    WHERE student_tbl_id = '$userID'
  ");

  echo json_encode(array("updateData" => "success"));



 ?>
