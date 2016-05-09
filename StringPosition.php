<?php 

$find = 'is';
$string = 'This is a string, and it is an example';
 
//This returns the position of the first instance of 'is'
strpos($string, $is, 10); //Look for $is in $string

//Finds all instances of 'is' in the string
while($string_position = strpos($string, $offset)){
	echo 'Found at '.$string_position;
	$offset = $string_position + strlen($find);
}

?>