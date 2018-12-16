<?php
  # substr()
  # Returns a portion of a string

  // $output = substr('Hello', 1, 3);
  // $output = substr('Hello', -2);
  // echo $output;

  # strlen()
  # Returns the length of a string
  
  // $output = strlen('Hello Squirrel');
  // echo $output;

  # strpos()
  # Finds the position of the first occurence of a sub string

  // $output = strpos('Hello Squirrel', 'o');
  // echo $output;

  # strrpos()
  # Finds the position of the last occurence of a sub string

  // $output = strrpos('Hello Squirrelio', 'o');
  // echo $output;

  # trim()
  # Strips whitespace

  /*
  $text = 'Hello World                  ';
  var_dump($text);

  $trimmed = trim($text);
  var_dump($trimmed);
  */

  # strtoupper
  # Makes everything uppercase

  // $output = strtoupper('Hello Squish!');
  // echo $output;

  # strtolower
  # Makes everything lowercase

  // $output = strtolower('Hello SQUIRREL');
  // echo $output;

  # ucwords()
  # Capitalize every word

  // $output = ucwords('milk milk milk milk');
  // echo $output;

  # str_replace()
  # Replace all occurences of a search string with a replacement
  // $text = 'Milk I is a cow';
  // $output = str_replace('cow', 'hume', $text);
  // echo $output;

  # is_string()
  # Check if string

  // $val = '22';
  // $output = is_string($val);
  // echo $output;

  // $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

  // foreach($values as $value){
  //   if(is_string($value)){
  //     echo "{$value} is a string<br>";
  //   }
  // }

  # gzcompress()
  # Compress a string

  $string = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus dignissimos suscipit, est deserunt quos quasi sit officia minima odio architecto quo laudantium iusto totam ab, vero expedita saepe harum praesentium.";

  $compressed = gzcompress($string);

  // echo $compressed;

  $original = gzuncompress($compressed);
  echo $original;
  