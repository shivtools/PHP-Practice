<?php 

$string = 'isisis This part don\'t search. This part search.';

$string_new = substr_replace($string, replacement, start, 29, strlen($string_new));

//str_replace -- replace part of string with defined text
$new_string = str_replace('is', '', $string);


//Go through all words present in $find in $string and replace them with ''
$find = array('is', 'string', 'example');
$replace = array('IS', 'STRING', '');
$new_string = str_replace($find, $replace, $string);

?>