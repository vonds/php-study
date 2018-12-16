<?php
  # FUNCTION - Block of code that can be repeatedly called

  /*
    Camel Case - myFunction
    Lower Case - my_function()
    Pascal Case - MyFunction()
  */

  // Create Simple Function
  function simpleFunction(){
    echo 'Hello Squirrel <br>';
  }

  // Run Sim
  // simpleFunction();

  // Function with Param
  function sayHello($name) {
    echo "Squish $name <br>";
  }

  // sayHello('Vonds');
  // sayHello('Garnet');
  // sayHello('Pearl');

  // Retturn Value
  function addNumbers($num1, $num2){
    return $num1 + $num2;
  }

  // echo addNumbers(2,3);

  // By Reference

  $myNum = 10;

  function addFive(&$num){
    $num += 5;
  }

  function addTen(&$num){
    $num += 10;
  }

  echo addFive($myNum);

  echo "value: $myNum <br>";

  echo addTen($myNum);

  echo "value: $myNum <br>";

  
?>