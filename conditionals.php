<?php
  # CONDITIONALS

  /*
    ==
    ===
    <
    >
    !=
    !==

  */

  /*
  $num = '6';

  if($num == 5){
    echo 'True';
  }else if($num == 6){
    echo '6 passed';
  } else {
    echo 'False';
  }
  */

  # NESTING IF

  /*
  $num = 7;

  if($num > 4){
    if($num < 10){
      echo "$num passed";
    }
  }
  */

  /*
    LOGICAL OPERATORS

    and &&
    or ||
    xor

  */

  /*
  $num = 6;

  if($num > 4 XOR $num < 10){
    echo "$num passed";
  }
  */

  # SWITCH

  $favColor = 'purple';

  switch($favColor){
    case 'red';
      echo 'Your favorite color is red';
      break;
    case 'blue';
      echo 'Your favorite color is blue';
      break;
    case 'green';
      echo 'Your favorite color is green';
      break;
    default:
      echo 'Your favorite color is something else';
  }
  


?>