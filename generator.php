
  <?php

  #variables created from form
  $wordCount = $_POST['wordcount'];
  $symbolStatus = $_POST['symbol'];
  $numberStatus = $_POST['number'];

  #Arrays
  $array = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine","ten");
  $symbols = array("!", "@", "#", "$", "%", "^", "&", "(", ")","+", "=", "~", "[", "]", "/", "?", "<", ">", ".");

  #variables that pull out a random index of an array
  $randomizer = array_rand($array, $wordCount);
  $symbolRandomizer = array_rand($symbols, $symbolStatus);
  $password = array();

  if($wordCount>0 AND $wordCount <= 10 AND ((int)$wordCount == $wordCount)){ #server-side check to insure a number is entered
    if($wordCount !== "1"){
      for($i=0; $i<$wordCount; $i++){
        $password[]=($array[$randomizer[$i]]."-");
        //echo $array[$randomizer[$i]]."-";
      }
    }
    elseif ($wordCount == "1") { #when wordCount is 1, i is 0 and nothing is selected from the array
      $password[]=($array[array_rand($array,1)]);
      //print_r($array[array_rand($array,1)]);
    }

    if($numberStatus == 'on'){  #option to add a number from 0-9
      $randNumber = rand(0,9);
      $password[]=($randNumber);
    }
      #first checks the symbol form for a number between 1 and 10

    if($symbolStatus != null AND $symbolStatus>0 AND $symbolStatus <= 10 AND ((int)$symbolStatus == $symbolStatus)){
      if ($symbolStatus !== "1"){
        for ($i=0; $i<$symbolStatus; $i++){
          $password[]=($symbols[$symbolRandomizer[$i]]);
        }
        $newPassword= implode("",$password);  #turns the $password array into a string for printing

      }
      elseif($symbolStatus == "1"){
        $password[]=($symbols[array_rand($symbols,1)]);
        $newPassword= implode("",$password);
      }
      else{
        $newPassword= implode("",$password);
      }
    }
    elseif(empty($symbolStatus)){
        //$symbolBox = trim($symbolStatus);
        echo $symbolStatus;
        $newPassword= implode("",$password);
        echo "symbol box is empty";
        echo $symbolStatus;
    }else{
            $newPassword = "ERROR:Please enter in a valid number of symbols";
    }
    //else{
      //  $newPassword= implode("",$password);
    //}

  }else{
        $newPassword= "ERROR:Please enter a valid number between 0 and 10";
  }
