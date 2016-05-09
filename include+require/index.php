<?php 

include 'header.inc.php'; //include a header file with all its conents

//Since $var is declared in another_page.inc.php, it doesn't have to be redelcared here. 
//$var = 'String';

echo $var;

require 'header.inc.php'; //page is killed if file is not found

//Want to require or include once so that we don't slow down page by requiring/include file twice.

require_once 'header.inc.php'; //check to see if file has been previously been required, and if so, will not require it again

include_once 'header.inc.php'; //same

//require_once is equivalent to the following
if(!defined('header.inc.php')){
	require('header.inc.php');
}



 ?>