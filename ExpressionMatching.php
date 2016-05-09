<?php 

$string = 'This is a string'; 

//Find a match inside of a string -- preg returns a 1 or 0 if match is found

//First param is pattern we want to match for
//Word must be encapsulated inside /is/
if (preg_match('/is/', $string)) {
	echo 'Matches found';
}
else{
	echo 'No match found';
}

function has_space($string){
	if(preg_match('//', $string)){
		return true;
	}
	else{
		return false;
	}
}

if(has_space('Thisdoesnothaveaspace')){
	echo 'Has at least one space';
}
else{
	return 'Does not have a space';
}



?>