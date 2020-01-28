<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="src/logo.png" type="image/gif">
    <meta charset="utf-8">
    <title>LNU Graduate School</title>
    <link rel="stylesheet" href="src/update.css">
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

    $id = $_GET["id"];
    // Fetch Student Tbl
    $student_tbl = $con->query("SELECT *
      FROM students_tbl
      WHERE students_tbl.id = '$id';
      ");
    $resStudent_tbl = $student_tbl->fetch_assoc();

    // Fetch Enrolled Graduate Program Tbl
    $enrolled_graduate_programs_tbl = $con->query("SELECT graduate_programs.program as degree_program, enrolled_graduate_programs_tbl.major as major, enrolled_graduate_programs_tbl.degree_program as program_id FROM graduate_programs INNER JOIN enrolled_graduate_programs_tbl ON graduate_programs.id = enrolled_graduate_programs_tbl.degree_program WHERE enrolled_graduate_programs_tbl.student_tbl_id = '$id'");
    $resEnrolledGraduatePrograms_tbl = $enrolled_graduate_programs_tbl->fetch_assoc();


    // Fetch Incase of Emergency Tbl
    $incase_of_emergency = $con->query("SELECT * FROM incase_of_emergency WHERE student_tbl_id = '$id'");
    $resIncaseOfEmergency = $incase_of_emergency->fetch_assoc();

    // Fetch School Records
    $college_school_records_tbl = $con->query("SELECT * FROM school_records_tbl WHERE student_tbl_id = '$id' AND level = '3'");
    $resCollegeSchoolRecords = $college_school_records_tbl->fetch_assoc();

    $master_school_records_tbl = $con->query("SELECT * FROM school_records_tbl WHERE student_tbl_id = '$id' AND level = '4'");
    $resMasterSchoolRecords = $master_school_records_tbl->fetch_assoc();


    // Fetch Job Records
    $job_records_tbl = $con->query("SELECT * FROM job_records_tbl WHERE student_tbl_id = '$id'");

    ?>
    <script type="text/javascript">
      var id = "<?= $id ?>";
    </script>

    <div class="flex-row">
      <div class="update-container">

        <div class="step-1">
          <div class="flex-column">

            <div class="form-input-container">
              <br>
              <label for="scholarship">Scholarship</label><br>
              <input type="text" name="scholarship" placeholder="Scholarship" class="form-input-standard" id="scholarship" value="<?= $resStudent_tbl['scholarship'] ?>">
            </div>

              <div class="form-input-container">
                <br>
                <label for="fullname">Full Name</label><br>
                <input type="text" name="fullname" placeholder="Full Name" class="form-input-standard" id="fullname" value="<?= $resStudent_tbl['name'] ?>">
              </div>


            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="gender">Gender</label>
                  <select  name="gender" class="form-input-non-standard" id="gender">
                    <option value="<?= $resStudent_tbl['sex'] ?>"><?= $resStudent_tbl['sex'] ?></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>

                <div class="">
                  <br>
                  <label for="bdate">&nbsp;&nbsp;&nbsp;Birth Day</label>
                  <input type="date" name="bdate" class="form-input-non-standard" id="bday" value="<?= $resStudent_tbl['bdate'] ?>">
                </div>

                <div class="">
                  <br>
                  <label for="age">&nbsp;&nbsp;&nbsp;Age</label>
                  <input type="text" name="age" placeholder="Age" class="form-input-non-standard" id="age" value="<?= $resStudent_tbl['age'] ?>">
                </div>

              </div>
            </div>

            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="civilStatus">Civil Status</label>
                  <input type="text" name="civilStatus" placeholder="Civil Status" class="form-input-non-standard" id="civilStatus" value="<?= $resStudent_tbl['cvlstatus'] ?>">
                </div>

                <div class="">
                  <br>
                  <label for="bPlace">&nbsp;&nbsp;&nbsp;Birth Place</label>
                  <input type="text" name="bPlace" placeholder="Birth Place" class="form-input-non-standard" id="bPlace" value="<?= $resStudent_tbl['bplace'] ?>">
                </div>

                <div class="">
                  <br>
                  <label for="religion">&nbsp;&nbsp;&nbsp;Religion</label>
                  <input type="text" name="religion" placeholder="Religion" class="form-input-non-standard" id="religion" value="<?= $resStudent_tbl['religion'] ?>">
                </div>
              </div>

            </div>

            <div class="form-input-container">
              <br>
              <label for="citizenship">Citizenship</label>
              <input type="text" name="citizenship" placeholder="Citizenship" class="form-input-non-standard" id="citizenship" value="<?= $resStudent_tbl['ctznship'] ?>">
            </div>

            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="cnum">Contact Number</label>
                  <input type="text" name="cnum" placeholder="Contact Number" class="form-input-non-standard" id="cnum" value="<?= $resStudent_tbl['contactNum'] ?>">
                </div>

                <div class="">
                  <br>
                  <label for="email">&nbsp;&nbsp;&nbsp;Email</label>
                  <input type="email" name="email" placeholder="Email" class="form-input-non-standard" id="email" value="<?= $resStudent_tbl['email'] ?>">
                </div>

                <div class="">
                  <br>
                  <label for="fbName">&nbsp;&nbsp;&nbsp;Facebook Name</label>
                  <input type="text" name="fbName" placeholder="Facebook Name" class="form-input-non-standard" id="fbName" value="<?= $resStudent_tbl['fbAccnt'] ?>">
                </div>

              </div>
            </div>

            <div class="form-input-container">
              <br>
              <label for="personEmergency">In case of Emergency</label><br>
              <input type="text" name="personEmergency" placeholder="Name of person to be contacted" class="form-input-standard" id="personIncaseOfEmergency" value="<?= $resIncaseOfEmergency['name'] ?>">
            </div>

            <div class="form-input-container">
              <br>
              <label for="cNumOfPersonEmergency">Contact number in case of emergency</label><br>
              <input type="text" name="cNumOfPersonEmergency" placeholder="Contact number of person in case of emergency" class="form-input-standard" id="contactPersonIncaseOfEmergency" value="<?= $resIncaseOfEmergency['contactNum'] ?>">
            </div>
          </div>

        </div>

        <div class="step-2">
          <div class="flex-column">

            <div class="flex-row">
              <?php
              if (mysqli_num_rows($job_records_tbl) > 0) {
                ?>
                <table class="job_record_tbl">
                  <thead>
                    <tr>
                      <th>Job Title</th>
                      <th>Company Name</th>
                      <th>Inclusive Date</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                      $i = 0;
                      while ($resJobRecords = mysqli_fetch_assoc($job_records_tbl)) {
                        ?>
                          <tr>
                            <td>
                              <input type="text" name="job_title_1" class="form-input-non-standard" id="job_title_<?= $i ?>">
                            </td>
                            <td>
                              <input type="text" name="companyName_1" class="form-input-non-standard" id="companyName_<?= $i ?>">
                            </td>
                            <td>
                              <input type="date" name="inclusiveDate_1" class="form-input-non-standard" id="inclusiveDate_<?= $i ?>">
                            </td>
                          </tr>
                        <?php
                        ++$i;
                      }

                     ?>

                    </tr>
                  </tbody>
                </table>
                <?php
              }
              ?>

            </div>

            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="college_degree_earned">College Degree Earned</label><br>
                  <input type="text" name="college_degree_earned" placeholder="College Degree Earned" class="form-input-standard" id="college_degree_earned" value="<?= $resCollegeSchoolRecords['degree_earned'] ?>" >
                </div>

              </div>
            </div>

            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="college_school_graduated">School Graduated</label>
                  <input type="text" name="college_school_graduated" placeholder="School Graduated" class="form-input-non-standard" id="college_school_graduated" value="<?= $resCollegeSchoolRecords['schoolName'] ?>">
                </div>

                <div class="">
                  <br>
                  <label for="college_date_of_graduation">&nbsp;&nbsp;&nbsp;Date of Graduation</label>
                  <input type="date" name="college_date_of_graduation" class="form-input-non-standard" id="college_date_of_graduation" value="<?= $resCollegeSchoolRecords['date_of_graduation'] ?>">
                </div>

              </div>
            </div>

            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="college_major">Major</label>
                  <input type="text" name="college_major" placeholder="Major" class="form-input-non-standard" id="college_major" value="<?= $resCollegeSchoolRecords['major'] ?>">
                </div>

                <div class="">
                  <br>
                  <label for="college_honors_received">&nbsp;&nbsp;&nbsp;Honors Received</label>
                  <input type="text" name="college_honors_received" placeholder="Honors Received" class="form-input-non-standard" id="college_honors_received" value="<?= $resCollegeSchoolRecords['honors_received'] ?>">
                </div>

              </div>
            </div>

            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="masters_degree_earned">Masters Degree Earned</label><br>
                  <input type="text" name="masters_degree_earned" placeholder="Masters Degree Earned" class="form-input-standard" id="masters_degree_earned" value="<?= $resMasterSchoolRecords['degree_earned']  ?>" >
                </div>

              </div>
            </div>

            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="masters_school_graduated">School Graduated</label>
                  <input type="text" name="masters_school_graduated" placeholder="School Graduated" class="form-input-non-standard" id="masters_school_graduated" value="<?= $resMasterSchoolRecords['schoolName'] ?>">
                </div>

                <div class="">
                  <br>
                  <label for="masters_date_of_graduation">&nbsp;&nbsp;&nbsp;Date of Graduation</label>
                  <input type="date" name="masters_date_of_graduation" class="form-input-non-standard" id="masters_date_of_graduation" value="<?= $resMasterSchoolRecords['date_of_graduation'] ?>">
                </div>

              </div>
            </div>

            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="masters_major">Major</label>
                  <input type="text" name="masters_major" placeholder="Major" class="form-input-non-standard" id="masters_major" value="<?= $resMasterSchoolRecords['major'] ?>">
                </div>

                <div class="">
                  <br>
                  <label for="masters_honors_received">&nbsp;&nbsp;&nbsp;Honors Received</label>
                  <input type="text" name="masters_honors_received" placeholder="Honors Received" class="form-input-non-standard" id="masters_honors_received" value="<?= $resMasterSchoolRecords['honors_received'] ?>">
                </div>

              </div>
            </div>
          </div>

        </div>

        <div class="step-3">
          <div class="flex-column">

            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="residence_address">Residence Address</label><br>
                  <input type="text" name="residence_address" placeholder="Full Residential Address" class="form-input-standard" id="residence_address" value="<?= $resStudent_tbl['residence_address'] ?>">
                </div>
              </div>
            </div>

            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="permanent_address">Permanent Address</label><br>
                  <input type="text" name="permanent_address" placeholder="Permanent Address" class="form-input-standard" id="permanent_address" value="<?= $resStudent_tbl['permanent_address'] ?>">
                </div>
              </div>
            </div>

            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <h3><u>Student's Graduate Program</u></h3>
                </div>
              </div>
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="desired_degree_program">Degree Program</label><br>
                  <select class="form-input-non-standard" name="desired_degree_program" id="desired_degree_program">
                    <option value="<?= $resEnrolledGraduatePrograms_tbl['program_id'] ?>"><?= $resEnrolledGraduatePrograms_tbl['degree_program'] ?></option>
                    <?php
                      $query2 = $con->query("SELECT * FROM graduate_programs");

                      while ($row2 = $query2->fetch_assoc()) {
                        ?>
                          <option value="<?= $row2['id'] ?>"><?= $row2["program"] ?></option>
                        <?php
                      }
                    ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="desired_major">Major</label><br>
                  <input type="text" name="desired_major" placeholder="Desired Major" class="form-input-standard" id="desired_major" value="<?= $resEnrolledGraduatePrograms_tbl['major'] ?>">
                </div>
              </div>
            </div>

            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="financial_source">Financial Source</label><br>
                  <select class="form-input-non-standard" name="financial_source" id="financial_source">
                    <option value="<?= $resStudent_tbl['financial_src'] ?>"><?= $resStudent_tbl['financial_src'] ?></option>
                    <option value="personal">Personal</option>
                    <option value="scholarship">Scholarship/Fellowship</option>
                    <option value="benifit">Benifit from employer</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-input-container">
              <div class="flex-row">
                <div class="">
                  <br>
                  <label for="status_of_enrollment">Status of Enrollment</label><br>
                  <select class="form-input-non-standard" name="status_of_enrollment" id="status_of_enrollment">
                    <option value="<?= $resStudent_tbl['statusOfEnrollment'] ?>"><?= $resStudent_tbl['statusOfEnrollment'] ?></option>
                    <option value="fulltime">Full-time(on scholarship not working)</option>
                    <option value="parttime">Part-time(working)</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="flex-row">

            <div class="" style="flex-grow: 1">

            </div>

            <div class="">
              <button type="button" name="button" id="btn-update">Update</button>
            </div>
          </div>

        </div>

      </div>
    </div>

  </body>
</html>
