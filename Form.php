<?php 

//Check if input user_name is set and is not empty
if(isset($_GET['user_name']) && !empty($_GET['user_name'])){
	$user_name = $_GET['user_name'];

	$user_name_lc = strtolower($user_name);

	if($user_name_lc == 'alex'){
		echo 'You are the best';
	}
}

?>

<form action='index.php' method='GET'>
	Name: <input type='text' name='user_name'><br><br>
		  <input type='submit' value='Submit'>
</form>