<?php
  # Loops -execute code set number of times

  /*
    For
    While
    Do..While
    ForEach
  */

  # For Loop
  # @params - init, condition, inc

  /*
  for($i = 0; $i <= 10; $i++){
    echo "Number $i";
    echo'<br>';
  }
  */

  # While Loop
  # @params - condition

  /*
  $i = 50;
  while($i < 100){
    echo $i;
    $i++;
  }
  */
  

  # Do... While
  # @params - condition

  /*
  $i = 0;

  do{
    echo $i;
    echo '<br>';
    $i++;

  }

  while($i < 10);
  */

  # Foreach Loop - For arrays
  /*
  $people = array('brad', 'Jose', 'wIlliam');

  foreach($people as $person){
    echo $person;
    echo '<br>';
  }
  */

  /*
  $people = array('brad' => 'brad@gmail.com', 'jose' => 'jose@gmail.com', 'wIlliam' => 'william@gmail.com');

  foreach($people as $person => $email){
    echo "$person: $email";
    echo '<br>';
  }
  */

?>