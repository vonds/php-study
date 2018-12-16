<?php 
  // echo date('m/'); // Month
  // echo date('d/'); // Day
  // echo date('Y'); // Year
  // echo date('l'); // Second

  // echo date('m-d-Y');
  // echo date('h'); // Hour
  // echo date('s'); // Seconds
  // echo date('a'); // AM or PM

  // Set Time Zone
  date_default_timezone_set('America/New_York');

  // echo date('h:i:sa');

  $timeStamp = mktime(10, 14, 54, 9, 20, 1981);

  // echo $timeStamp;

  // echo date('m/d/Y', $timeStamp);

  $timeStamp2 = strtotime('7:00pm March 22 2019');
  $timeStamp3 = strtotime('tomorrow');
  $timeStamp4 = strtotime('next Monday');
  $timeStamp5 = strtotime('+2 Years');

  // echo $timeStamp2;

  echo date('m/d/Y h:i:sa', $timeStamp5);


?>