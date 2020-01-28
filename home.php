<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="src/logo.png" type="image/gif">
    <meta charset="utf-8">
    <title>LNU Graduate School</title>
    <link rel="stylesheet" href="src/home.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript" src="js.js"></script>
    <script type="text/javascript" src="queries.js">
    </script>
  </head>
  <body>

    <div class="flex-row justify-right navbar">
      <div class="">
        <img src="src/avatar.png" alt="avatar" id="avatar" class="avatar">
      </div>
      <div id="session-container">
          <?= $_SESSION["user"] ?>
      </div>
    </div>

    <div class="flex-row">
      <div class="flex-column sideBar">
        <div class="home" id="home_link">
          <a href="#">Home</a>
        </div>
        <div class="manage_students" id="manage_link">
          <a href="#">Manage Students</a>
        </div>
        <div class="application_forms" id="applicationForms_link">
          <a href="#">Application Forms</a>
        </div>
        <div class="abouts" id="about_link">
          <a href="#">About</a>
        </div>
        <div class="settings" id="settings_link">
          <a href="#">Settings</a>
        </div>
        <div class="settings" id="logout">
          <a href="logout.php" id="btn-logout">Logout</a>
        </div>
      </div>

      <div class="flex-row">
        <div class="home_content">
          <label> School Year</label>
          <select class="school_year_options" name="school_year_options" id="school_year_options">
            <option value="">2018-2019</option>
          </select>
        </div>

        <div class="manage_students_content" style="display:none;">
          <div class="back-drop">

          </div>
          <div class="" id="manage_students_section">
            <?php require 'manage_students.php'; ?>
          </div>

        </div>

        <div class="application_forms_content" style="display:none;">
          <?php require 'application-forms.php' ?>
        </div>

        <div class="about_content" style="display:none;">
          <h1>About</h1>
        </div>

        <div class="settings_content" style="display:none;">
          <h1>Settings</h1>
        </div>



      </div>

    </div>

  </body>
</html>
