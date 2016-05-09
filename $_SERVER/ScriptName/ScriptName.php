<?php 

echo $_SERVER['SCRIPT_NAME']; //display file name of php script

include 'header.inc.php'

if(isset($_POST['submit'])){
	echo 'Process 1';
}

 ?>