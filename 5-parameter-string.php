<?php
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

function generate_string($input, $strength = 16) {
  $input_length = strlen($input);
  $random_string ='';
  for ($i=0; $i < $strength; $i++) {
    $random_character = $input[mt_rand(0, $input_length - 1)];
    $random_string .= $random_character;
  }
  return $random_string;
}
 //output: da2c312dfe804ef5bd318133a342251a
 echo generate_string($permitted_chars, 32);
 //output: 79n89a9mdfe804ef5b18133a3342251o
 echo generate_string ($permitted_chars, 32);
 //output: 6e576057da174c4189f7ea8341946aed
 echo generate_string ($permitted_chars, 32);


 ?>
