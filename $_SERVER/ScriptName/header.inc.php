<?php 
$script_name = $_SERVER['SCRIPT_NAME'];
?>

<!-- Since the php script we're using to process the form may be different, the form knows which php script/web page submitted the form. Useful for login/signup pages and to redirect users back to the page they came from. -->
<form action='<?php $script_name ?>' method="POST">
	<input type='submit' name='submit' value='submit'>
</form>