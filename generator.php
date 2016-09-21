
<pre>
  <?php

  $wordCount = $_POST['wordcount'];
  $symbolStatus = $_POST['symbol'];
  $symbolCount = rand(1,3);
  print_r($wordCount);
  print_r($symbolStatus);
  print_r($_POST);

  $array = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine","ten");
  $symbols = array("!", "@", "#", "$", "%", "^", "&", "(", ")", "-", "+", "=", "~", "[", "]", "/", "?", "<", ">", ".");

  $randomizer = array_rand($array, $wordCount);
  $symbolRandomizer = array_rand($symbols, $symbolCount);

  for($i=0; $i<$wordCount; $i++){
    echo $array[$randomizer[$i]]."-";
  }

  if($symbolStatus == 'on'){
    for ($i=0; $i<$symbolCount; $i++){
      echo $symbols[$symbolRandomizer[$i]];
    }
  }
  ?>

</pre>
