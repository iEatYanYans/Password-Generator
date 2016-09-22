
  <?php


  $wordCount = $_POST['wordcount'];
  $symbolStatus = $_POST['symbol'];
  $numberStatus = $_POST['number'];
  $symbolCount = rand(1,3);
  print_r($symbolCount);

  $array = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine","ten");
  $symbols = array("!", "@", "#", "$", "%", "^", "&", "(", ")", "-", "+", "=", "~", "[", "]", "/", "?", "<", ">", ".");
  $numbers = array("1", "2", "3", "4", "5", "6", "7", "8", "9","0");
  //$newArray = shuffle($array);
  //print_r($newArray);
  $randomizer = array_rand($array, $wordCount);
  $symbolRandomizer = array_rand($symbols, $symbolCount);

  for($i=0; $i<$wordCount; $i++){
    echo $array[$randomizer[$i]]."-";
  }

  if($numberStatus == 'on'){
    $randNumber = rand(1,10);
      echo $randNumber;
  }

  if($symbolStatus == 'on'){
    for ($i=0; $i<$symbolCount; $i++){
      echo $symbols[$symbolRandomizer[$i]];
    }
  }
