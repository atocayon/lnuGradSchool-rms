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

$firstJobTitle =  $_POST["firstJobTitle"];
$firstCompanyName = $_POST["firstCompanyName"];
$firstInclusiveDate = $_POST["firstInclusiveDate"];
$secondJobTitle = $_POST["secondJobTitle"];
$secondCompanyName =  $_POST["secondCompanyName"];
$secondInclusiveDate =  $_POST["secondInclusiveDate"];
$thirdJobTitle =  $_POST["thirdJobTitle"];
$thirdCompanyName = $_POST["thirdCompanyName"];
$thirdInclusiveDate = $_POST["thirdInclusiveDate"];
$fourthJobTitle = $_POST["fourthJobTitle"];
$fourthCompanyName =  $_POST["fourthCompanyName"];
$fourthInclusiveDate =  $_POST["fourthInclusiveDate"];
$fifthJobTitle =  $_POST["fifthJobTitle"];
$fifthCompanyName = $_POST["fifthCompanyName"];
$fifthInclusiveDate = $_POST["fifthInclusiveDate"];

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

$insert_student_tbl = $con->query("INSERT INTO students_tbl (
  id,
  scholarship,
  name,
  age,
  bdate,
  sex,
  religion,
  cvlstatus,
  bplace,
  ctznship,
  residence_address,
  permanent_address,
  email,
  contactNum,
  fbAccnt,
  financial_src,
  statusOfEnrollment,
  date_registered
) VALUES (
    '$userID',
    '$scholarship',
    '$fullname',
    '$age',
    '$bday',
    '$gender',
    '$religion',
    '$civilStatus',
    '$bPlace',
    '$citizenship',
    '$residenceAddress',
    '$permanentAddress',
    '$email',
    '$cNumber',
    '$fbName',
    '$financialSource',
    '$statusOfEnrollment',
    '$dateRegistered'
  )");

  if ($insert_student_tbl) {
    echo "success inserting to student table";
  }else{
    echo ("error ".mysqli_error($con));
  }

  $insert_incase_of_emergency = $con->query("INSERT INTO incase_of_emergency (
    student_tbl_id,
    name,
    contactNum
  ) VALUES (
    '$userID',
    '$inCaseOfEmergency',
    '$contactNumberInCaseOfEmergency'
  )");

  $insert_enrolled_graduate_program = $con->query("INSERT INTO enrolled_graduate_programs_tbl (
    student_tbl_id,
    degree_program,
    major
  ) VALUES (
    '$userID',
    '$desiredDegreeProgram',
    '$desiredMajor'
  )");

  if ($firstJobTitle != "none" && $secondJobTitle == "none" && $thirdJobTitle == "none" && $fourthJobTitle == "none" && $fifthJobTitle == "none") {
    $insert_job_records_tbl = $con->query("INSERT INTO job_records_tbl (
      student_tbl_id,
      job_title,
      agency,
      inclusive_date
    ) VALUES (
      '$userID',
      '$firstJobTitle',
      '$firstCompanyName',
      $firstInclusiveDate
    )");


  }

  if ($firstJobTitle != "none" && $secondJobTitle != "none" && $thirdJobTitle == "none" && $fourthJobTitle == "none" && $fifthJobTitle == "none") {
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // begin the transaction
      $conn->beginTransaction();

      $conn->exec("INSERT INTO job_records_tbl (
        student_tbl_id,
        job_title,
        agency,
        inclusive_date
      ) VALUES (
        '$userID',
        '$firstJobTitle',
        '$firstCompanyName',
        $firstInclusiveDate
      )");

      $conn->exec("INSERT INTO job_records_tbl (
        student_tbl_id,
        job_title,
        agency,
        inclusive_date
      ) VALUES (
        '$userID',
        '$secondJobTitle',
        '$secondCompanyName',
        '$secondInclusiveDate'
      )");

      // commit the transaction
      $conn->commit();

    } catch (PDOException $e) {
      // roll back the transaction if something failed
      $conn->rollback();
      echo "Error: " . $e->getMessage();
    }

    $conn = null;
  }

  if ($firstJobTitle != "none" && $secondJobTitle != "none" && $thirdJobTitle != "none" && $fourthJobTitle == "none" && $fifthJobTitle == "none") {
    try {

      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // begin the transaction
      $conn->beginTransaction();

      $conn->exec("INSERT INTO job_records_tbl (
        student_tbl_id,
        job_title,
        agency,
        inclusive_date
      ) VALUES (
        '$userID',
        '$firstJobTitle',
        '$firstCompanyName',
        '$firstInclusiveDate'
      )");

      $conn->exec("INSERT INTO job_records_tbl(
        student_tbl_id,
        job_title,
        agency,
        inclusive_date
      ) VALUES (
        '$userID',
        '$secondJobTitle',
        '$secondCompanyName',
        '$secondInclusiveDate'
      )");

      $conn->exec("INSERT INTO job_records_tbl (
        student_tbl_id,
        job_title,
        agency,
        inclusive_date
      ) VALUES (
        '$userID',
        '$thirdJobTitle',
        '$thirdCompanyName',
        '$thirdInclusiveDate'
      )");

      // commit the transaction
      $conn->commit();

    } catch (PDOException $e) {
      // roll back the transaction if something failed
      $conn->rollback();
      echo "Error: " . $e->getMessage();
    }
    $conn = null;
  }

  if ($firstJobTitle != "none" && $secondJobTitle != "none" && $thirdJobTitle != "none" && $fourthJobTitle != "none" && $fifthJobTitle == "none") {
    try {

      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // begin the transaction
      $conn->beginTransaction();

      $conn->exec("INSERT INTO job_records_tbl (
        student_tbl_id,
        job_title,
        agency,
        inclusive_date
      ) VALUES (
        '$userID',
        '$firstJobTitle',
        '$firstCompanyName',
        '$firstInclusiveDate'
      )");

      $conn->exec("INSERT INTO job_records_tbl(
        student_tbl_id,
        job_title,
        agency,
        inclusive_date
      ) VALUES (
        '$userID',
        '$secondJobTitle',
        '$secondCompanyName',
        '$secondInclusiveDate'
      )");

      $conn->exec("INSERT INTO job_records_tbl (
        student_tbl_id,
        job_title,
        agency,
        inclusive_date
      ) VALUES (
        '$userID',
        '$thirdJobTitle',
        '$thirdCompanyName',
        '$thirdInclusiveDate'
      )");

      $conn->exec("INSERT INTO job_records_tbl (
        student_tbl_id,
        job_title,
        agency,
        inclusive_date
      ) VALUES (
        '$userID',
        '$fourthJobTitle',
        '$fourthCompanyName',
        '$fourthInclusiveDate'
      )");

      // commit the transaction
      $conn->commit();

    } catch (PDOException $e) {
      // roll back the transaction if something failed
      $conn->rollback();
      echo "Error: " . $e->getMessage();
    }
    $conn = null;
  }


  if ($firstJobTitle != "none" && $secondJobTitle != "none" && $thirdJobTitle != "none" && $fourthJobTitle != "none" && $fifthJobTitle != "none") {
    try {

      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // begin the transaction
      $conn->beginTransaction();

      $conn->exec("INSERT INTO job_records_tbl (
        student_tbl_id,
        job_title,
        agency,
        inclusive_date
      ) VALUES (
        '$userID',
        '$firstJobTitle',
        '$firstCompanyName',
        '$firstInclusiveDate'
      )");

      $conn->exec("INSERT INTO job_records_tbl(
        student_tbl_id,
        job_title,
        agency,
        inclusive_date
      ) VALUES (
        '$userID',
        '$secondJobTitle',
        '$secondCompanyName',
        '$secondInclusiveDate'
      )");

      $conn->exec("INSERT INTO job_records_tbl (
        student_tbl_id,
        job_title,
        agency,
        inclusive_date
      ) VALUES (
        '$userID',
        '$thirdJobTitle',
        '$thirdCompanyName',
        '$thirdInclusiveDate'
      )");

      $conn->exec("INSERT INTO job_records_tbl (
        student_tbl_id,
        job_title,
        agency,
        inclusive_date
      ) VALUES (
        '$userID',
        '$fourthJobTitle',
        '$fourthCompanyName',
        '$fourthInclusiveDate'
      )");

      $conn->exec("INSERT INTO job_records_tbl (
        student_tbl_id,
        job_title,
        agency,
        inclusive_date
      ) VALUES (
        '$userID',
        '$fifthJobTitle',
        '$fifthCompanyName',
        '$fifthInclusiveDate'
      )");

      // commit the transaction
      $conn->commit();

    } catch (PDOException $e) {
      // roll back the transaction if something failed
      $conn->rollback();
      echo "Error: " . $e->getMessage();
    }
    $conn = null;
  }

  if ($mastersDegreeEarned != "none") {
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // begin the transaction
      $conn->beginTransaction();

      $conn->exec("INSERT INTO school_records_tbl (
        student_tbl_id,
        degree_earned,
        schoolName,
        level,
        date_of_graduation,
        major,
        honors_received
      ) VALUES (
        '$userID',
        '$collegeDegreeEarned',
        '$collegeSchoolGraduated',
        '3',
        '$collegeDateOfGraduation',
        '$collegeMajor',
        '$collegeHonorsReceived'
      )");

      $conn->exec("INSERT INTO school_records_tbl (
        student_tbl_id,
        degree_earned,
        schoolName,
        level,
        date_of_graduation,
        major,
        honors_received
      ) VALUES (
        '$userID',
        '$mastersDegreeEarned',
        '$mastersSchoolGraduated',
        '4',
        '$mastersDateOfGraduation',
        '$mastersMajor',
        '$mastersHonorsReceived'
      )");

      $conn->commit();
    } catch (PDOException $e) {
      $conn->rollback();
      echo "Error: " . $e->getMessage();
    }
    $conn = null;
  }else{
    $insert_school_records_tbl = $con->query("INSERT INTO school_records_tbl (
      student_tbl_id,
      degree_earned,
      schoolName,
      level,
      date_of_graduation,
      major,
      honors_received
    ) VALUES (
      '$userID',
      '$collegeDegreeEarned',
      '$collegeSchoolGraduated',
      '3',
      '$collegeDateOfGraduation',
      '$collegeMajor',
      '$collegeHonorsReceived'
    )");

  }





  echo json_encode(array("insertData" => "success"));



 ?>
