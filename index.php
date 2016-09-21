<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>
  <title> Password Generator </title>
  <meta charset= 'utf-8'>
  <link rel= "stylesheet" href=" " type="text/css">

  <?php require('generator.php'); ?>
</head>
<body>

  <p>
  "display; form; inputs; checkboxes (symbols)""</p>
  <form method = "POST" action='index.php'>
    Enter # of words (Max 10)<br>
    <input type='number' name='wordcount' max="10" min="1"><br>
    <input type='checkbox' name='symbol'> Include symbols<br>
    <input type = 'submit' value ='Generate my password!'><br>
  </form>
</body>
</html>
