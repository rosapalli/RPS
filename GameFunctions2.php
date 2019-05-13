<?php

function play($computer, $user) {
    
    $playerPick = [
        'R' => "Rock",
        'P' => "Paper",
        'S' => "Scissors"
    ];
    $computerPick = [
        0 => "Rock",
        1 => "Paper",
        2 => "Scissors"
    ];
  if ($computer==0 && $user=="R"){
  $computerImage= 1;
  $userImage =4;
  $outcome= "It's a draw.";
  }
  elseif ($computer==1 && $user=="P"){
      $computerImage=2;
      $userImage=5;
      $outcome= "It's a draw.";
  }
  elseif ($computer==2 && $user=="S") {
      $computerImage=3;
      $userImage=6;
      $outcome= "It's a draw.";
  }
elseif($computer==0 && $user=='P'){
    $computerImage=1;
    $userImage=5;
    $outcome =  "You win!";
}
elseif($computer==0 && $user=='S'){
    $computerImage = 1;
    $userImage = 6;
    $outcome= "You lose."; 
}  
elseif($computer=='1' && $user=='R'){
    $computerImage = 2;
    $userImage = 4;
    $outcome= "You lose.";
}
elseif($computer==1 && $user=='S'){
   $computerImage = 2;
   $userImage = 6;
   $outcome= "You win!";
}
elseif($computer==2 && $user=='R'){
   $computerImage = 3;
   $userImage = 4;
   $outcome= "You win!";
}
elseif($computer==2 && $user=='P'){
    $computerImage = 3;
    $userImage = 5;
    $outcome= "You lose.";
}
return [$outcome,$computerImage, $userImage, "Computer picked: $computerPick[$computer]", "You picked: $playerPick[$user]"];
}

$user = $_REQUEST["player"];
$computer = rand(0,2);
   
    $solution = play($computer, $user);
//echo "<h3>You picked: $playerPick[$user] <br> Computer picked: $computerPick[$computer] <br><em><b> $solution[3]</b></em></h3>";
    echo json_encode($solution);