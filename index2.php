<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
  <title> Password Generator </title>
</head>
<body>
  <?php
  require('generator.php');
  ?>

  <?php foreach ($wordbank as $wordbank => $result){
    echo $wordbank. " " .$result. ".<br>"
  } ?>

<form method = "POST" action='index.php'>
  Enter # of words (Max 10)<br>
  <input type='number' name='wordcount'><br>
  <input type = 'submit' value ='Generate my password!'><br>
</form>


</body>
<footer>
</footer>

</html>
