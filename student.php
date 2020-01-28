<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="src/logo.png" type="image/gif">
    <meta charset="utf-8">
    <title>LNU Graduate School</title>
    <link rel="stylesheet" href="src/viewStudent.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js.js"></script>
    <script type="text/javascript" src="queries.js">
    </script>
  </head>
  <body>
    <?php


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lnu_grad_school";
    $con = mysqli_connect($servername,$username,$password,$dbname);


    if (isset($_GET["id"])) {

      $id = $_GET["id"];

      // Fetch Student Tbl
      $student_tbl = $con->query("SELECT *
        FROM students_tbl
        WHERE students_tbl.id = '$id';
        ");
      $resStudent_tbl = $student_tbl->fetch_assoc();

      // Fetch Enrolled Graduate Program Tbl
      $enrolled_graduate_programs_tbl = $con->query("SELECT * FROM enrolled_graduate_programs_tbl WHERE student_tbl_id = '$id'");
      $resEnrolledGraduatePrograms_tbl = $enrolled_graduate_programs_tbl->fetch_assoc();

      // Fetch Incase of Emergency Tbl
      $incase_of_emergency = $con->query("SELECT * FROM incase_of_emergency WHERE student_tbl_id = '$id'");
      $resIncaseOfEmergency = $incase_of_emergency->fetch_assoc();

      // Fetch School Records
      $school_records_tbl = $con->query("SELECT * FROM school_records_tbl WHERE student_tbl_id = '$id'");

      // Fetch Job Records
      $job_records_tbl = $con->query("SELECT * FROM job_records_tbl WHERE student_tbl_id = '$id'");



    }else{
      echo "404 not found";
    }

    ?>
    <div style="height: 10vh;">

    </div>

    <div class="flex-column card">

      <div class="student-container">
        <div class="flex-row">
          <div class="">
            <div class="">
              <img src="src/avatar.png" alt="avatar" id="user_avatar">
            </div>

            <div class="flex-row justify-center">
              <span id="studentSchoolarship"><?= $resStudent_tbl['scholarship'] ?> Scholar</span>

            </div>

          </div>
          <div class="">
              <span id="studentName"><?= $resStudent_tbl['name'] ?></span>

              <br>
              <span id="enrolledGraduateProgram">
                <?php
                  $res_enrolled = $resEnrolledGraduatePrograms_tbl["degree_program"];
                  $enrolled_graduateProgram = $con->query("SELECT * FROM graduate_programs WHERE id = '$res_enrolled'");
                  $resEnrolledProgram = $enrolled_graduateProgram->fetch_assoc();
                  echo $resEnrolledProgram['program'];
                ?>
              </span>

              <br>
              Age: <?= $resStudent_tbl['age'] ?>
              &nbsp;&nbsp;&nbsp;
              Birthdate: <?= $resStudent_tbl['bdate'] ?>
              &nbsp;&nbsp;&nbsp;
              Sex: <?= $resStudent_tbl['sex'] ?>
              &nbsp;&nbsp;&nbsp;
              Religion: <?= $resStudent_tbl['religion'] ?>
              <br>
              Civil Status: <?= $resStudent_tbl['cvlstatus'] ?>
              &nbsp;&nbsp;&nbsp;
              Birthplace: <?= $resStudent_tbl['bplace'] ?>
              &nbsp;&nbsp;&nbsp;
              Citizenship: <?= $resStudent_tbl['ctznship'] ?>
              <br>
              Person to be contacted in case of Emergency: <?= $resIncaseOfEmergency['name'] ?>
              <br>
              Contact Number of Guardian: <?= $resIncaseOfEmergency['contactNum'] ?>
          </div>
        </div>

        </div>

        <div class="flex-row student-container">
          <div class="">
            Email : <?= $resStudent_tbl['email'] ?>
            <br>
            Celphone No. : <?= $resStudent_tbl['contactNum'] ?>
            <br>
            Facebook : <?= $resStudent_tbl['fbAccnt'] ?>
            <br>
            Residence Address : <?= $resStudent_tbl['residence_address'] ?>
            <br>
            Permanent Address : <?= $resStudent_tbl['permanent_address'] ?>
          </div>

          <div class="flex-column justify-center">
            <div class="">

              <span id="schoolRecordsTitle">
                <ul>
                  <li>
                    <b>School Records</b>
                  </li>
                </ul>

                <br>
              </span>

              <table id="schoolRecords">
                <tr>
                  <th>School Name</th>
                  <th>Degree Earned</th>
                  <th>Major</th>
                  <th>Date of Graduation</th>
                  <th>Honors Received</th>
                </tr>


                  <?php
                    while($resSchoolRecordsTbl = mysqli_fetch_array($school_records_tbl)){
                      ?>
                      <tr>
                        <td><?= $resSchoolRecordsTbl['schoolName'] ?></td>
                        <td><?= $resSchoolRecordsTbl['degree_earned'] ?></td>
                        <td><?= $resSchoolRecordsTbl['major'] ?></td>
                        <td><?= $resSchoolRecordsTbl['date_of_graduation'] ?></td>
                        <td><?= $resSchoolRecordsTbl['honors_received'] ?></td>
                      </tr>
                      <?php
                    }
                   ?>


              </table>

            </div>

            <div class="">
              <br>
              <span id="jobRecordsTitle">
                <ul>
                  <li>
                    <b>Job Records</b>
                  </li>
                </ul>

                <br>
              </span>

              <table id="jobRecords">
                <tr>
                  <th>Job Title</th>
                  <th>Agency</th>
                  <th>Inclusive Date</th>
                </tr>
                <?php

                  while ($resJobRecords = mysqli_fetch_array($job_records_tbl)) {
                    ?>
                    <tr>
                      <td><?= $resJobRecords['job_title'] ?></td>
                      <td><?= $resJobRecords['agency'] ?></td>
                      <td><?= $resJobRecords['inclusive_date'] ?></td>
                    </tr>
                    <?php
                  }

                 ?>

              </table>
            </div>

          </div>

        </div>
      </div>

    </div>
  </body>
</html>
