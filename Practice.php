<?php

mysql_connect('localhost','root','') or die ('Could not connect to database'); 
// die('ERROR. PAGE HAS ENDED'); 
// exit('SAME as die');  

//Example of a function
function add($number1, $number2){
	$result = $number1 + $number2;
	return $result;
} 

//Global variables
echo $user_ip = $_SERVER('REMOTE_ADDR'); //echo user's IP address 

functio echo_ip(){

	//static or dynamic variables 
	global $user_ip; //make $user_ip global to $echo_ip function
	$string = 'Your IP address is: '.$user_ip;
	echo $string;
}

echo_ip();

//String functions in PHP 

$string = 'This is an example string';

$string_word_count = str_word_count($string, 0); //count number of words in string //returns an integer value

$string_word_count = str_word_count($string, 1, '&'); //creates an array with key and value pairs 

//used for random character generation
$string_shuffled = str_shuffle($string); 
$half = substr($string_shuffled, 0, strlen($string_shuffled)/2);

//Reversed string
$string = 'image.jpg';
$str_reversed = strrev($string);

//Similar text function 

$string_one = 'This is my essay. Talking about $PHP';
$string_two = 'This is my essay, I am gonna talk about $PHP';

similar_text($string_one, $string_two, $result); //Compare two strings for similarity

//Trim string -- remove whitespace

$string_with_white_space = 'This is an    example string';
$string_trimmed = trim($string); //removes whitespace from string
echo $result;



//printing in PHP
print_r($string_word_count); //print an array in php
echo $string_word_count;




?>