<?php

/* Prototype  : string exif_tagname ( string $index  )
 * Description: Get the header name for an index
 * Source code: ext/exif/exif.c
*/

// declaring a class
class sample  {
  public function __toString() {
  return "obj'ct";
  }
}
<<__EntryPoint>> function main() {
echo "*** Testing exif_tagname() : different types for index argument ***\n";
// initialize all required variables

// get an unset variable
$unset_var = 'string_val';
unset($unset_var);

// Defining resource
$file_handle = fopen(__FILE__, 'r');

// array with different values
$values =  array (

  // integer values
  0,
  1,
  12345,
  -2345,

  // float values
  10.5,
  -10.5,
  10.1234567e10,
  10.7654321E-10,
  .5,

  // array values
  array(),
  array(0),
  array(1),
  array(1, 2),
  array('color' => 'red', 'item' => 'pen'),

  // boolean values
  true,
  false,
  TRUE,
  FALSE,

  // empty string
  "",
  '',

  // undefined variable
  $undefined_var,

  // unset variable
  $unset_var,

  // objects
  new sample(),

  // resource
  $file_handle,

  NULL,
  null
);


// loop through each element of the array and check the working of exif_tagname()
// when $index argument is supplied with different values

echo "\n--- Testing exif_tagname() by supplying different values for 'index' argument ---\n";
$counter = 1;
foreach($values as $index) {
  echo "-- Iteration $counter --\n";
  try { var_dump( exif_tagname($index) ); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; }
  $counter ++;
}

// closing the file
fclose($file_handle);

echo "Done\n";
echo "===Done===";
}
