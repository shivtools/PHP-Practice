<?php 

$food = array('Pasta', 'Pizza','Salad');

$pizza = $food[1];

print_r($pizza); //print out an array in PHP

$food[4] = 'Fruit';

//Associative arrays - allow us to change keys of entries in array 
$associative_food_array = array('Pasta'=>300, 'Pizza'=>1000, 'Salad'=>300);

echo $food['Pasta'];

//Multidimensional arrays

$food_multi_dimensional = array(
	'Healthy'=>
 		array('Pasta','Salad'),
  	'Unhealthy'=>
  		array('Pizza')
);

echo $food_multi_dimensional['Healthy'][0];

//For each $food i.e food item in $element i.e 'Healthy' or 'Unhealthy', $inner_array is array corresponding to 'Healhty' or 'Unhealhty'

foreach ($food as $element => $inner_array) {
	foreach ($inner_array as $item) {
		echo $item.'<br>';
	}
}






?>