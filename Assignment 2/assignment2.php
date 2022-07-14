<?php

$randomNumber = rand(1, 100);
$guess = readline("Enter a number between 1 and 100:\n");
echo($randomNumber);
$guesses = 1;
$winner = FALSE;
 while($guesses < 5){

    if( $guess > 100 ||  $guess < 1){

        echo "Your number is not between 1 and 100, guess again:\n";
        $guess = takeInput();

     } elseif( $guess == $randomNumber){
        $winner= TRUE;
    break;

    }elseif( $guess <  $randomNumber){
        echo "Please guess a higher number:\n";
         $guess = takeInput();
         $guesses++;

    }elseif( $guess >  $randomNumber){
        echo "Please guess a lower number:\n";
         $guess = takeInput();
         $guesses++;

    }
}

if ($winner){
    echo "YOU WIN!";
   
} else {
    echo "You lose, too many guesses!";
}

function takeInput(){
   $guess = (int) readline();
   return $guess;
}

?>