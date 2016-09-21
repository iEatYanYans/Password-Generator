<!DOCTYPE html>
<html>
<head>
  <title> Password Generator </title>
  <meta charset= 'utf-8'>

  <?php require('generator.php'); ?>
</head>
<body>

  <p>
  "display; form; inputs; checkboxes (symbols)""</p>
  <form method = "POST" action='index.php'>
    Enter # of words (Max 10)<br>
    <input type='number' name='wordcount'><br>
    <input type = 'submit' value ='Generate my password!'><br>
  </form>
</body>
</html>
