<?php
session_start();
?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <link rel="icon" href="src/logo.png" type="image/gif">
      <meta charset="utf-8">
      <title>LNU Graduate School</title>
      <link rel="stylesheet" href="src/styles.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
      <script type="text/javascript" src="js.js"></script>
      <script type="text/javascript" src="queries.js">
      </script>
    </head>
    <body id="default">
      <?php if (isset($_SESSION["user"])) {
        header("Location: home.php");
      } else{
        ?>
        <div id="login-section">
          <?php require 'login.php'; ?>
        </div>
        <?php
      }?>

    </body>
  </html>
