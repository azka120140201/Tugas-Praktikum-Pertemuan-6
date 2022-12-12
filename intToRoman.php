<?php 
  //Azka Hafidz Asianto
  //120140201
  //Kelas Praktikum Jadwal A
  //Pemrograman Web C

  function intToRoman($num) {
  // Create an array of Roman numerals and their corresponding integer values
  $numerals = array(
    'M' => 1000,
    'CM' => 900,
    'D' => 500,
    'CD' => 400,
    'C' => 100,
    'XC' => 90,
    'L' => 50,
    'XL' => 40,
    'X' => 10,
    'IX' => 9,
    'V' => 5,
    'IV' => 4,
    'I' => 1
  );

  $result = '';

  // Loop through the numerals array
  foreach ($numerals as $roman => $int) {
    // Determine the number of times the Roman numeral should be repeated
    $repeats = intval($num / $int);

    // Append the Roman numeral the appropriate number of times to the result string
    $result .= str_repeat($roman, $repeats);

    // Subtract the integer value of the Roman numeral from the input number
    $num = $num % $int;
  }

  // Return the final result
  return $result;
  }

  //Echo will be 'LVIII'
  echo intToRoman(58);
?>
