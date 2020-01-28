$(document).ready(function() {
  $(".btn-submit").click(function() {
    var input_bday = new Date($("#bday").val());
    bday_day = input_bday.getDate();
    bday_month = input_bday.getMonth();
    bday_year = input_bday.getFullYear();
    var bday = [bday_year, bday_month, bday_day].join("-");

    var input_inclusiveDate_1 = new Date($("#inclusiveDate_1").val());
    inclusiveDate_1_day = input_inclusiveDate_1.getDate();
    inclusiveData_1_month = input_inclusiveDate_1.getMonth();
    inclusiveDate_1_year = input_inclusiveDate_1.getFullYear();
    var inclusiveDate_1 = [
      inclusiveDate_1_year,
      inclusiveData_1_month,
      inclusiveDate_1_day
    ].join("-");

    var input_inclusiveDate_2 = new Date($("#inclusiveDate_2").val());
    inclusiveData_2_day = input_inclusiveDate_2.getDate();
    inclusiveDate_2_month = input_inclusiveDate_2.getMonth();
    inclusiveDate_2_year = input_inclusiveDate_2.getFullYear();
    var inclusiveDate_2 = [
      inclusiveDate_2_year,
      inclusiveDate_2_month,
      inclusiveData_2_day
    ].join("-");

    var input_inclusiveDate_3 = new Date($("#inclusiveDate_3").val());
    inclusiveDate_3_day = input_inclusiveDate_3.getDate();
    inclusiveDate_3_month = input_inclusiveDate_3.getMonth();
    inclusiveDate_3_year = input_inclusiveDate_3.getFullYear();
    var inclusiveDate_3 = [
      inclusiveDate_3_year,
      inclusiveDate_3_month,
      inclusiveDate_3_day
    ].join("-");

    var input_inclusiveDate_4 = new Date($("#inclusiveDate_4").val());
    inclusiveDate_4_day = input_inclusiveDate_4.getDate();
    inclusiveDate_4_month = input_inclusiveDate_4.getMonth();
    inclusiveDate_4_year = input_inclusiveDate_4.getFullYear();
    var inclusiveDate_4 = [
      inclusiveDate_4_year,
      inclusiveDate_4_month,
      inclusiveDate_4_day
    ].join("-");

    var input_inclusiveDate_5 = new Date($("#inclusiveDate_5").val());
    inclusiveDate_5_day = input_inclusiveDate_5.getDate();
    inclusiveDate_5_month = input_inclusiveDate_5.getMonth();
    inclusiveDate_5_year = input_inclusiveDate_5.getFullYear();
    var inclusiveDate_5 = [
      inclusiveDate_5_year,
      inclusiveDate_5_month,
      inclusiveDate_5_day
    ].join("-");

    var input_college_date_of_graduation = new Date(
      $("#college_date_of_graduation").val()
    );
    college_date_of_graduation_day = input_college_date_of_graduation.getDate();
    college_date_of_graduation_month = input_college_date_of_graduation.getMonth();
    college_date_of_graduation_year = input_college_date_of_graduation.getFullYear();
    var college_date_of_graduation = [
      college_date_of_graduation_year,
      college_date_of_graduation_month,
      college_date_of_graduation_day
    ].join("-");

    var input_masters_date_of_graduation = new Date(
      $("#masters_date_of_graduation").val()
    );
    masters_date_of_graduation_day = input_masters_date_of_graduation.getDate();
    masters_date_of_graduation_month = input_masters_date_of_graduation.getMonth();
    masters_date_of_graduation_year = input_masters_date_of_graduation.getFullYear();
    var masters_date_of_graduation = [
      masters_date_of_graduation_year,
      masters_date_of_graduation_month,
      masters_date_of_graduation_day
    ].join("-");

    if ($("#scholarship").val() === "") {
      $("#scholarship").css("border", "1px solid red");
    }

    if ($("#fullname").val() === "") {
      $("#fullname").css("border", "1px solid red");
    }

    if ($("#gender").val() === "") {
      $("#gender").css("border", "1px solid red");
    }

    if ($("#age").val() === "") {
      $("#age").css("border", "1px solid red");
    }

    if ($("#civilStatus").val() === "") {
      $("#civilStatus").css("border", "1px solid red");
    }

    if ($("#bPlace").val() === "") {
      $("#bPlace").css("border", "1px solid red");
    }

    if ($("#religion").val() === "") {
      $("#religion").css("border", "1px solid red");
    }

    if ($("#citizenship").val() === "") {
      $("#citizenship").css("border", "1px solid red");
    }

    if ($("#cnum").val() === "") {
      $("#cnum").css("border", "1px solid red");
    }

    if ($("#email").val() === "") {
      $("#email").css("border", "1px solid red");
    }

    if ($("#fbName").val() === "") {
      $("#fbName").css("border", "1px solid red");
    }

    if ($("#personIncaseOfEmergency").val() === "") {
      $("#personIncaseOfEmergency").css("border", "1px solid red");
    }

    if ($("#contactPersonIncaseOfEmergency").val() === "") {
      $("#contactPersonIncaseOfEmergency").css("border", "1px solid red");
    }

    if ($("#college_degree_earned").val() === "") {
      $("#college_degree_earned").css("border", "1px solid red");
    }

    if ($("#college_school_graduated").val() === "") {
      $("#college_school_graduated").css("border", "1px solid red");
    }

    if ($("#college_major").val() === "") {
      $("#college_major").css("border", "1px solid red");
    }

    if ($("#college_honors_received").val() === "") {
      $("#college_honors_received").css("border", "1px solid red");
    }

    if ($("#residence_address").val() === "") {
      $("#residence_address").css("border", "1px solid red");
    }

    if ($("#permanent_address").val() === "") {
      $("#permanent_address").css("border", "1px solid red");
    }

    if ($("#desired_degree_program").val() === "") {
      $("#desired_degree_program").css("border", "1px solid red");
    }

    if ($("#desired_major").val() === "") {
      $("#desired_major").css("border", "1px solid red");
    }

    if ($("#financial_source").val() === "") {
      $("#financial_source").css("border", "1px solid red");
    }

    if ($("#status_of_enrollment").val() === "") {
      $("#status_of_enrollment").css("border", "1px solid red");
    }

    var job_title_1 = "";
    var companyName_1 = "";
    var job_title_2 = "";
    var companyName_2 = "";
    var job_title_3 = "";
    var companyName_3 = "";
    var job_title_4 = "";
    var companyName_4 = "";
    var job_title_5 = "";
    var companyName_5 = "";

    if ($("#job_title_1").val() === "") {
      job_title_1 = "none";
      companyName_1 = "none";
    } else {
      job_title_1 = $("#job_title_1").val();
      companyName_1 = $("#companyName_1").val();
    }

    if ($("#job_title_2").val() === "") {
      job_title_2 = "none";
      companyName_2 = "none";
    } else {
      job_title_2 = $("#job_title_2").val();
      companyName_2 = $("#companyName_2").val();
    }

    if ($("#job_title_3").val() === "") {
      job_title_3 = "none";
      companyName_3 = "none";
    } else {
      job_title_3 = $("#job_title_3").val();
      companyName_3 = $("#companyName_3").val();
    }

    if ($("#job_title_4").val() === "") {
      job_title_4 = "none";
      companyName_4 = "none";
    } else {
      job_title_4 = $("#job_title_4").val();
      companyName_4 = $("#companyName_4").val();
    }

    if ($("#job_title_5").val() === "") {
      job_title_5 = "none";
      companyName_5 = "none";
    } else {
      job_title_5 = $("#job_title_5").val();
      companyName_5 = $("#companyName_5").val();
    }

    var mastersDegreeEarned = "";
    var mastersSchoolGraduated = "";
    var mastersMajor = "";
    var mastersHonorsReceived = "";

    if ($("#masters_degree_earned").val() === "") {
      mastersDegreeEarned = "none";
      mastersSchoolGraduated = "none";
      mastersMajor = "none";
      mastersHonorsReceived = "none";
    } else {
      mastersDegreeEarned = $("#masters_degree_earned").val();
      mastersSchoolGraduated = $("#masters_school_graduated").val();
      mastersMajor = $("#masters_major").val();
      mastersHonorsReceived = $("#masters_honors_received").val();
    }

    if (
      $("#scholarship").val() !== "" &&
      $("#fullname").val() !== "" &&
      $("#gender").val() !== "" &&
      $("#age").val() !== "" &&
      $("#civilStatus").val() !== "" &&
      $("#bPlace").val() !== "" &&
      $("#religion").val() !== "" &&
      $("#citizenship").val() !== "" &&
      $("#cnum").val() !== "" &&
      $("#email").val() !== "" &&
      $("#fbName").val() !== "" &&
      $("#personIncaseOfEmergency").val() !== "" &&
      $("#contactPersonIncaseOfEmergency").val() !== "" &&
      $("#college_degree_earned").val() !== "" &&
      $("#college_school_graduated").val() !== "" &&
      $("#college_major").val() !== "" &&
      $("#college_honors_received").val() !== "" &&
      $("#residence_address").val() !== "" &&
      $("#permanent_address").val() !== "" &&
      $("#desired_degree_program").val() !== "" &&
      $("#desired_major").val() !== "" &&
      $("#financial_source").val() !== "" &&
      $("#status_of_enrollment").val() !== ""
    ) {
      console.log($("#scholarship").val());
      console.log($("#fullname").val());
      console.log($("#gender").val());
      console.log($("#civilStatus").val());
      console.log($("#bPlace").val());
      console.log($("#religion").val());
      console.log($("#citizenship").val());
      console.log($("#cnum").val());
      console.log($("#email").val());
      console.log($("#fbName").val());
      console.log($("#residence_address").val());
      console.log($("#permanent_address").val());

      $.ajax({
        url: "insert.php",
        type: "POST",
        data: {
          userID: userID,
          scholarship: $("#scholarship").val(),
          fullname: $("#fullname").val(),
          gender: $("#gender").val(),
          bday: bday,
          age: $("#age").val(),
          civilStatus: $("#civilStatus").val(),
          bPlace: $("#bPlace").val(),
          religion: $("#religion").val(),
          citizenship: $("#citizenship").val(),
          cNumber: $("#cnum").val(),
          email: $("#email").val(),
          fbName: $("#fbName").val(),
          inCaseOfEmergency: $("#personIncaseOfEmergency").val(),
          contactNumberInCaseOfEmergency: $(
            "#contactPersonIncaseOfEmergency"
          ).val(),
          dateRegistered: dateRegistered,
          firstJobTitle: job_title_1,
          firstCompanyName: companyName_1,
          firstInclusiveDate: inclusiveDate_1,
          secondJobTitle: job_title_2,
          secondCompanyName: companyName_2,
          secondInclusiveDate: inclusiveDate_2,
          thirdJobTitle: job_title_3,
          thirdCompanyName: companyName_3,
          thirdInclusiveDate: inclusiveDate_3,
          fourthJobTitle: job_title_4,
          fourthCompanyName: companyName_4,
          fourthInclusiveDate: inclusiveDate_4,
          fifthJobTitle: job_title_5,
          fifthCompanyName: companyName_5,
          fifthInclusiveDate: inclusiveDate_5,
          collegeDegreeEarned: $("#college_degree_earned").val(),
          collegeSchoolGraduated: $("#college_school_graduated").val(),
          collegeDateOfGraduation: college_date_of_graduation,
          collegeMajor: $("#college_major").val(),
          collegeHonorsReceived: $("#college_honors_received").val(),
          mastersDegreeEarned: mastersDegreeEarned,
          mastersSchoolGraduated: mastersSchoolGraduated,
          mastersDateOfGraduation: masters_date_of_graduation,
          mastersMajor: mastersMajor,
          mastersHonorsReceived: mastersHonorsReceived,
          residenceAddress: $("#residence_address").val(),
          permanentAddress: $("#permanent_address").val(),
          desiredDegreeProgram: $("#desired_degree_program").val(),
          desiredMajor: $("#desired_major").val(),
          financialSource: $("#financial_source").val(),
          statusOfEnrollment: $("#status_of_enrollment").val()
        },
        success: function(data) {
          console.log(data.insertData);
          console.log("success");
          $(".registration-modal").hide();
          $(".back-drop").hide();
          $("#scholarship").val('')
          $("#fullname").val('')
          $("#gender").val('')
          $("#age").val('')
          $("#civilStatus").val('')
          $("#bPlace").val('')
          $("#religion").val('')
          $("#citizenship").val('')
          $("#cnum").val('')
          $("#email").val('')
          $("#fbName").val('')
          $("#personIncaseOfEmergency").val('')
          $("#contactPersonIncaseOfEmergency").val('')
          $("#college_degree_earned").val('')
          $("#college_school_graduated").val('')
          $("#college_major").val('')
          $("#college_honors_received").val('')
          $("#residence_address").val('')
          $("#permanent_address").val('')
          $("#desired_degree_program").val('')
          $("#desired_major").val('')
          $("#financial_source").val('')
          $("#status_of_enrollment").val('')
        },
        error: function(err) {
          console.log("error");
        }
      });
    }
  });

  $("#btn-register").click(function() {
    if (
      $("#email").val() === "" &&
      $("#uname").val() === "" &&
      $("#pword").val() === ""
    ) {
      $("#email").css("border", "1px solid red");
      $("#uname").css("border", "1px solid red");
      $("#pword").css("border", "1px solid red");
    }else{
      $.ajax({
        url: "register.php",
        type: "POST",
        data: {
          email: $("#email").val(),
          uname: $("#uname").val(),
          pword: $("#pword").val()
        },
        success: function(data) {
          $(".sign-up").hide();
          $(".login").show();
          $("#btn-login").show();
          $("#btn-sign-up").show();
          $(".btn-register").hide();
          $("#email").val('') ;
          $("#uname").val('');
          $("#pword").val('');
           $(".login-container").css("height", "45vh");
        },
        error: function(err) {
          alert("error");
        }
      });

    }

  });

  $("#btn-search").click(function(){
    if ($("#search_input").val() !== "") {
      $.ajax({
        url: "search.php",
        type: "POST",
        data: {
          search: $("#search_input").val()
        },
        success: function(data){
          var obj = JSON.parse(data);
          console.log(obj.length);
          if (obj.length > 0) {
            $("#manage_students_table").hide();
            $("#search").show();
            $("#search_nodata").hide();
            $("#search_input").val('')

            var tbl = "";
              for (var i = 0; i < obj.length; i++) {
                tbl += "<tr>";
                tbl +=
                  "<td><label>" + obj[i].idNumber + "</label></td>";
                tbl +=
                  "<td><label>" + obj[i].name + "</label></td>";
                  tbl +=
                    "<td><label>" + obj[i].degree + "</label></td>";
                    tbl += "<td><a href='student.php?id="+ obj[i].idNumber +"?> target='_blank' >View</a> <a href='update.php?id="+obj[i].idNumber+">Update</a> <a href='delete.php?id="+obj[i].idNumber+">Delete</a> </td>"
                tbl += "</tr>";
              }

              $("#search_result").prepend(tbl);

          }else{
            $("#manage_students_table").hide();
            $("#search").show();
            $("#search_nodata").show();
          }
        },
        error: function(err){
          alert("error");
        }
      });
    }else{
      $("#search_input").css("border", "1px solid red");
    }
  });


  $("#btn-update").click(function(){
    console.log(id);
    var year = new Date().getFullYear();
    var month = new Date().getMonth() + 1;
    var day = new Date().getDate();
    var hours = new Date().getHours();
    var minutes = new Date().getMinutes();
    var seconds = new Date().getSeconds();
    var milliseconds = new Date().getMilliseconds();
    var dateRegistered = [year,month,day].join("-");

    var input_bday = new Date($("#bday").val());
    bday_day = input_bday.getDate();
    bday_month = input_bday.getMonth();
    bday_year = input_bday.getFullYear();
    var bday = [bday_year, bday_month, bday_day].join("-");



    var input_college_date_of_graduation = new Date(
      $("#college_date_of_graduation").val()
    );
    college_date_of_graduation_day = input_college_date_of_graduation.getDate();
    college_date_of_graduation_month = input_college_date_of_graduation.getMonth();
    college_date_of_graduation_year = input_college_date_of_graduation.getFullYear();
    var college_date_of_graduation = [
      college_date_of_graduation_year,
      college_date_of_graduation_month,
      college_date_of_graduation_day
    ].join("-");

    var input_masters_date_of_graduation = new Date(
      $("#masters_date_of_graduation").val()
    );
    masters_date_of_graduation_day = input_masters_date_of_graduation.getDate();
    masters_date_of_graduation_month = input_masters_date_of_graduation.getMonth();
    masters_date_of_graduation_year = input_masters_date_of_graduation.getFullYear();
    var masters_date_of_graduation = [
      masters_date_of_graduation_year,
      masters_date_of_graduation_month,
      masters_date_of_graduation_day
    ].join("-");

    var mastersDegreeEarned = "";
    var mastersSchoolGraduated = "";
    var mastersMajor = "";
    var mastersHonorsReceived = "";

    if ($("#masters_degree_earned").val() === "") {
      mastersDegreeEarned = "none";
      mastersSchoolGraduated = "none";
      mastersMajor = "none";
      mastersHonorsReceived = "none";
    } else {
      mastersDegreeEarned = $("#masters_degree_earned").val();
      mastersSchoolGraduated = $("#masters_school_graduated").val();
      mastersMajor = $("#masters_major").val();
      mastersHonorsReceived = $("#masters_honors_received").val();
    }

    $.ajax({
      url: "update_action.php",
      type: "POST",
      data: {
        userID: id,
        scholarship: $("#scholarship").val(),
        fullname: $("#fullname").val(),
        gender: $("#gender").val(),
        bday: bday,
        age: $("#age").val(),
        civilStatus: $("#civilStatus").val(),
        bPlace: $("#bPlace").val(),
        religion: $("#religion").val(),
        citizenship: $("#citizenship").val(),
        cNumber: $("#cnum").val(),
        email: $("#email").val(),
        fbName: $("#fbName").val(),
        inCaseOfEmergency: $("#personIncaseOfEmergency").val(),
        contactNumberInCaseOfEmergency: $(
          "#contactPersonIncaseOfEmergency"
        ).val(),
        dateRegistered: dateRegistered,
        collegeDegreeEarned: $("#college_degree_earned").val(),
        collegeSchoolGraduated: $("#college_school_graduated").val(),
        collegeDateOfGraduation: college_date_of_graduation,
        collegeMajor: $("#college_major").val(),
        collegeHonorsReceived: $("#college_honors_received").val(),
        mastersDegreeEarned: mastersDegreeEarned,
        mastersSchoolGraduated: mastersSchoolGraduated,
        mastersDateOfGraduation: masters_date_of_graduation,
        mastersMajor: mastersMajor,
        mastersHonorsReceived: mastersHonorsReceived,
        residenceAddress: $("#residence_address").val(),
        permanentAddress: $("#permanent_address").val(),
        desiredDegreeProgram: $("#desired_degree_program").val(),
        desiredMajor: $("#desired_major").val(),
        financialSource: $("#financial_source").val(),
        statusOfEnrollment: $("#status_of_enrollment").val()
      },
      success: function(data) {
        console.log("success");
        //window.location.replace("http://localhost/lnu_gradschool/home.php");
    },
      error: function(err) {
        console.log("error");
      }
    });
  });

  $("#btn-upload").on('click',function(){
    var file = $("#file").prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file);
    console.log(form_data);
    $.ajax({
      url: "upload.php",
      dataType: 'text',
      cache: false,
      contentType: false,
      processData: false,
      data: form_data,
      type: 'POST',
      success: function(php_script_response){
        alert("uploaded successfully!!!");
      }
    });
  });
});
