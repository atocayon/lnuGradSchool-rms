<!-- <div class="flex-row">
  <div class="">
    <select class="graduate_programs" name="graduate_programs" id="graduate_programs">
      <option value="">Select a Graduate Programs</option>
      <?php
        $con = mysqli_connect("localhost", "root", "" ,"lnu_grad_school");
        $query = $con->query("SELECT * FROM graduate_programs");

        while ($row = $query->fetch_assoc()) {
          ?>
            <option value="<?= $row['id'] ?>"><?= $row["program"] ?></option>
          <?php
        }
      ?>
    </select>
  </div>
</div> -->

<div class="flex-row">
    <div class="">
      <input type="text" name="search" class="search" placeholder="Search" id="search_input">
    </div>
    <div class="">
      <button type="button" name="button-search" class="btn-search" id="btn-search">Search</button>
    </div>
    <div class="">
      <button type="button" name="button-registration" class="btn-registration"> <i class="fas fa-plus"></i> New Student</button>
    </div>
</div>

<div class="flex-row">
  <div class="manage_students_container">
    <table class="manage_students_table" id="manage_students_table">
      <thead>
        <tr>
          <th>ID Number</th>
          <th>Name</th>
          <th>Degree/Program</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="default">
        <?php
        $conn = mysqli_connect("localhost", "root", "" ,"lnu_grad_school");
        $fetch_query = $conn->query("SELECT students_tbl.id AS idNumber, students_tbl.name AS name, enrolled_graduate_programs_tbl.degree_program AS degree
                                    FROM students_tbl INNER JOIN enrolled_graduate_programs_tbl ON students_tbl.id = enrolled_graduate_programs_tbl.student_tbl_id ORDER BY students_tbl.name
                                    ");

        // if ($fetch_query) {
        //   echo "Success";
        // }else{
        //   echo "error". mysqli_error($conn);
        // }

          while ($res = $fetch_query->fetch_assoc()) {
            ?>
              <tr id="data_table">
                <td><?= $res["idNumber"] ?></td>
                <td><?= $res["name"] ?></td>
                <td>
                  <?php

                  $degree = $res["degree"];
                  $fetch_degree = $conn->query("SELECT * FROM graduate_programs WHERE id = '$degree'");
                  $res_degree = $fetch_degree->fetch_assoc();
                  echo $res_degree['program'];
                  ?>
                </td>
                <td><a href="student.php?id=<?= $res['idNumber'] ?>" target="_blank">View</a> <a href="update.php?id=<?= $res['idNumber'] ?>">Update</a> <a href="delete.php?id=<?= $res['idNumber'] ?>">Delete</a> </td>
              </tr>
          <?php
         }
         ?>


      </tbody>

    </table>

    <table  class="manage_students_table" id="search" style="display: none">
      <thead>
        <tr>
          <th>ID Number</th>
          <th>Name</th>
          <th>Degree/Program</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="search_result">
        <tr>
          <td colspan="4" id="search_nodata">No data found</td>
        </tr>
      </tbody>
    </table>
  </div>

</div>

<div class="flex-row">
  <div class="registration-modal">
    <div class="flex-row justify-right">
      <button type="button" name="button" class="btn-close-modal">x</button>
    </div>



      <div class="flex-row justify-center">
        <div class="flex-column">
          <div class="flex-row justify-center">
            <div class="avatar-container">
              <img src="src/avatar.png" alt="avatar" class="avatar-registration">
            </div>
          </div>
          <div class="flex-row justify-center">
            <div class="">
              <button type="button" name="button" class="btn-upload-image" disabled>Upload Picture</button>
            </div>
          </div>
        </div>
      </div>

    <div class="step-1">
      <div class="flex-column">

        <div class="form-input-container">
          <br>
          <label for="scholarship">Scholarship</label><br>
          <input type="text" name="scholarship" placeholder="Scholarship" class="form-input-standard" id="scholarship">
        </div>

          <div class="form-input-container">
            <br>
            <label for="fullname">Full Name</label><br>
            <input type="text" name="fullname" placeholder="Full Name" class="form-input-standard" id="fullname">
          </div>


        <div class="form-input-container">
          <div class="flex-row">
            <div class="">
              <br>
              <label for="gender">Gender</label>
              <select  name="gender" class="form-input-non-standard" id="gender">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>

            <div class="">
              <br>
              <label for="bdate">&nbsp;&nbsp;&nbsp;Birth Day</label>
              <input type="date" name="bdate" class="form-input-non-standard" id="bday">
            </div>

            <div class="">
              <br>
              <label for="age">&nbsp;&nbsp;&nbsp;Age</label>
              <input type="text" name="age" placeholder="Age" class="form-input-non-standard" id="age">
            </div>

          </div>
        </div>

        <div class="form-input-container">
          <div class="flex-row">
            <div class="">
              <br>
              <label for="civilStatus">Civil Status</label>
              <input type="text" name="civilStatus" placeholder="Civil Status" class="form-input-non-standard" id="civilStatus">
            </div>

            <div class="">
              <br>
              <label for="bPlace">&nbsp;&nbsp;&nbsp;Birth Place</label>
              <input type="text" name="bPlace" placeholder="Birth Place" class="form-input-non-standard" id="bPlace">
            </div>

            <div class="">
              <br>
              <label for="religion">&nbsp;&nbsp;&nbsp;Religion</label>
              <input type="text" name="religion" placeholder="Religion" class="form-input-non-standard" id="religion">
            </div>
          </div>

        </div>

        <div class="form-input-container">
          <br>
          <label for="citizenship">Citizenship</label>
          <input type="text" name="citizenship" placeholder="Citizenship" class="form-input-non-standard" id="citizenship">
        </div>

        <div class="form-input-container">
          <div class="flex-row">
            <div class="">
              <br>
              <label for="cnum">Contact Number</label>
              <input type="text" name="cnum" placeholder="Contact Number" class="form-input-non-standard" id="cnum">
            </div>

            <div class="">
              <br>
              <label for="email">&nbsp;&nbsp;&nbsp;Email</label>
              <input type="email" name="email" placeholder="Email" class="form-input-non-standard" id="email">
            </div>

            <div class="">
              <br>
              <label for="fbName">&nbsp;&nbsp;&nbsp;Facebook Name</label>
              <input type="text" name="fbName" placeholder="Facebook Name" class="form-input-non-standard" id="fbName">
            </div>

          </div>
        </div>

        <div class="form-input-container">
          <br>
          <label for="personEmergency">In case of Emergency</label><br>
          <input type="text" name="personEmergency" placeholder="Name of person to be contacted" class="form-input-standard" id="personIncaseOfEmergency">
        </div>

        <div class="form-input-container">
          <br>
          <label for="cNumOfPersonEmergency">Contact number in case of emergency</label><br>
          <input type="text" name="cNumOfPersonEmergency" placeholder="Contact number of person in case of emergency" class="form-input-standard" id="contactPersonIncaseOfEmergency">
        </div>
      </div>

      <div class="flex-row justify-right">
        <div class="">
          <button type="button" name="button" class="btn-next-to-secondStep nextButton">Next</button>
        </div>
      </div>
    </div>

    <div class="step-2">
      <div class="flex-column">

        <div class="flex-row">
          <table class="job_record_tbl">
            <thead>
              <tr>
                <th>Job Title</th>
                <th>Company Name</th>
                <th>Inclusive Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <input type="text" name="job_title_1" class="form-input-non-standard" id="job_title_1">
                </td>
                <td>
                  <input type="text" name="companyName_1" class="form-input-non-standard" id="companyName_1">
                </td>
                <td>
                  <input type="date" name="inclusiveDate_1" class="form-input-non-standard" id="inclusiveDate_1">
                </td>
              </tr>

              <tr>
                <td>
                  <input type="text" name="job_title_2" class="form-input-non-standard" id="job_title_2">
                </td>
                <td>
                  <input type="text" name="companyName_2" class="form-input-non-standard" id="companyName_2">
                </td>
                <td>
                  <input type="date" name="inclusiveDate_2" class="form-input-non-standard" id="inclusiveDate_2">
                </td>
              </tr>

              <tr>
                <td>
                  <input type="text" name="job_title_3" class="form-input-non-standard" id="job_title_3">
                </td>
                <td>
                  <input type="text" name="companyName_3" class="form-input-non-standard" id="companyName_3">
                </td>
                <td>
                  <input type="date" name="inclusiveDate_3" class="form-input-non-standard" id="inclusiveDate_3">
                </td>
              </tr>

              <tr>
                <td>
                  <input type="text" name="job_title_4" class="form-input-non-standard" id="job_title_4">
                </td>
                <td>
                  <input type="text" name="companyName_4" class="form-input-non-standard" id="companyName_4">
                </td>
                <td>
                  <input type="date" name="inclusiveDate_4" class="form-input-non-standard" id="inclusiveDate_4">
                </td>
              </tr>

              <tr>
                <td>
                  <input type="text" name="job_title_5" class="form-input-non-standard" id="job_title_5">
                </td>
                <td>
                  <input type="text" name="companyName_5" class="form-input-non-standard" id="companyName_5">
                </td>
                <td>
                  <input type="date" name="inclusiveDate_5" class="form-input-non-standard" id="inclusiveDate_5">
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="form-input-container">
          <div class="flex-row">
            <div class="">
              <br>
              <label for="college_degree_earned">College Degree Earned</label><br>
              <input type="text" name="college_degree_earned" placeholder="College Degree Earned" class="form-input-standard" id="college_degree_earned">
            </div>

          </div>
        </div>

        <div class="form-input-container">
          <div class="flex-row">
            <div class="">
              <br>
              <label for="college_school_graduated">School Graduated</label>
              <input type="text" name="college_school_graduated" placeholder="School Graduated" class="form-input-non-standard" id="college_school_graduated">
            </div>

            <div class="">
              <br>
              <label for="college_date_of_graduation">&nbsp;&nbsp;&nbsp;Date of Graduation</label>
              <input type="date" name="college_date_of_graduation" class="form-input-non-standard" id="college_date_of_graduation">
            </div>

          </div>
        </div>

        <div class="form-input-container">
          <div class="flex-row">
            <div class="">
              <br>
              <label for="college_major">Major</label>
              <input type="text" name="college_major" placeholder="Major" class="form-input-non-standard" id="college_major">
            </div>

            <div class="">
              <br>
              <label for="college_honors_received">&nbsp;&nbsp;&nbsp;Honors Received</label>
              <input type="text" name="college_honors_received" placeholder="Honors Received" class="form-input-non-standard" id="college_honors_received">
            </div>

          </div>
        </div>

        <div class="form-input-container">
          <div class="flex-row">
            <div class="">
              <br>
              <label for="masters_degree_earned">Masters Degree Earned</label><br>
              <input type="text" name="masters_degree_earned" placeholder="Masters Degree Earned" class="form-input-standard" id="masters_degree_earned">
            </div>

          </div>
        </div>

        <div class="form-input-container">
          <div class="flex-row">
            <div class="">
              <br>
              <label for="masters_school_graduated">School Graduated</label>
              <input type="text" name="masters_school_graduated" placeholder="School Graduated" class="form-input-non-standard" id="masters_school_graduated">
            </div>

            <div class="">
              <br>
              <label for="masters_date_of_graduation">&nbsp;&nbsp;&nbsp;Date of Graduation</label>
              <input type="date" name="masters_date_of_graduation" class="form-input-non-standard" id="masters_date_of_graduation">
            </div>

          </div>
        </div>

        <div class="form-input-container">
          <div class="flex-row">
            <div class="">
              <br>
              <label for="masters_major">Major</label>
              <input type="text" name="masters_major" placeholder="Major" class="form-input-non-standard" id="masters_major">
            </div>

            <div class="">
              <br>
              <label for="masters_honors_received">&nbsp;&nbsp;&nbsp;Honors Received</label>
              <input type="text" name="masters_honors_received" placeholder="Honors Received" class="form-input-non-standard" id="masters_honors_received">
            </div>

          </div>
        </div>
      </div>

      <div class="flex-row">
        <div class="">
          <button type="button" name="button" class="btn-to-step-1 prevButton">Previous</button>
        </div>
        <div class="" style="flex-grow: 1">

        </div>

        <div class="">
          <button type="button" name="button" class="btn-next-to-thirdStep nextButton">Next</button>
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
              <input type="text" name="residence_address" placeholder="Full Residential Address" class="form-input-standard" id="residence_address">
            </div>
          </div>
        </div>

        <div class="form-input-container">
          <div class="flex-row">
            <div class="">
              <br>
              <label for="permanent_address">Permanent Address</label><br>
              <input type="text" name="permanent_address" placeholder="Permanent Address" class="form-input-standard" id="permanent_address">
            </div>
          </div>
        </div>

        <div class="form-input-container">
          <div class="flex-row">
            <div class="">
              <br>
              <h3><u>Student's Desired Graduate Program</u></h3>
            </div>
          </div>
          <div class="flex-row">
            <div class="">
              <br>
              <label for="desired_degree_program">Degree Program</label><br>
              <select class="form-input-non-standard" name="desired_degree_program" id="desired_degree_program">
                <option value="">Select Program</option>
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
              <input type="text" name="desired_major" placeholder="Desired Major" class="form-input-standard" id="desired_major">
            </div>
          </div>
        </div>

        <div class="form-input-container">
          <div class="flex-row">
            <div class="">
              <br>
              <label for="financial_source">Financial Source</label><br>
              <select class="form-input-non-standard" name="financial_source" id="financial_source">
                <option value="">Select Financial Source</option>
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
                <option value="">Select Status of Enrollment</option>
                <option value="fulltime">Full-time(on scholarship not working)</option>
                <option value="parttime">Part-time(working)</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <div class="flex-row">
        <div class="">
          <button type="button" name="button" class="btn-to-step-2 prevButton">Previous</button>
        </div>
        <div class="" style="flex-grow: 1">

        </div>

        <div class="">
          <button type="button" name="button" class="btn-submit nextButton">Submit</button>
        </div>
      </div>

    </div>

  </div>
</div>

<script type="text/javascript">
var year = new Date().getFullYear();
var month = new Date().getMonth() + 1;
var day = new Date().getDate();
var hours = new Date().getHours();
var minutes = new Date().getMinutes();
var seconds = new Date().getSeconds();
var milliseconds = new Date().getMilliseconds();

var userID = year+""+month+""+day+""+hours+""+minutes+""+seconds+""+milliseconds;
var dateRegistered = [year,month,day].join("-");
</script>
