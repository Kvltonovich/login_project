<?php
/*
* @author Colton Trautz <colton@sendpepper.com>
* 
* Function that accepts a multi-dimensional container of any size and converts it into a 
* one dimensional associative array who's keys are strings representing their value's path in the original container.
*
*/ 

function recursion($array) { 
  if (!is_array($array)) { 
    return FALSE; 
  } 
  $result = array(); 
  foreach ($array as $key => $value) { 
    if (is_array($value)) { 
      $result = array_merge($result, array_flatten($value)); 
    } 
    else { 
      $result[$key] = $value; 
    } 
  } 
  return $result; 
} 