<?php
  //Array - Variables that hold multiple values
  /*
    -Indexed
    -Associative
    -Multi-dimensional
  */

  // Indexed
  $people = array('Kevin', 'Jeremy', 'Sara');
  $ids = array(23, 55, 12);
  $cars = ['Honds', 'Toyota', 'Ford'];
  $cars[3] = 'Chevy';
  $cars[] = 'BMW';

  // Associative arrays
  $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
  $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
  $people['Jill'] = 42;
 

  // Multi-dimensional
  $cars = array(
    array('Honds', 20, 10),
    array('Toyata', 30, 20),
    array('Ford', 23, 12)
  );

  echo $cars[1][2]
 
?>