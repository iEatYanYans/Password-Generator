
<!DOCTYPE html>
<html>
<head>
  <title> Password Generator </title>
  <meta charset= 'utf-8'>
  <link rel= "stylesheet" href="style.css" type="text/css">

  <?php require('generator.php'); ?>
</head>
<body>
  <div class = "container">
    <img id="key" src="images/key.png" alt= "Password Generator" width= 250px>
    <div class = "display">
      Your secure password is:<br><br>
      <?php echo $newPassword; ?>
    </div>
  <form method = "POST" action='index.php' class = "form">
    Enter no. of words (Maximum 10)<br>
    <input type='number' name='wordcount' max="10" min="1"><br>
    Enter no. of symbols (required- Maximum 10)<br>
    <input type='number' name='symbol' max="3" min ="1"><br>
    <input type='checkbox' name='number'> Include a number<br>
    <input type = 'submit' value ='Generate my password!'><br>
  </form>
  <div>

  </div>
</div>
</body>
</html>
