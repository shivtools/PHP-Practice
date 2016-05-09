<?php 

//cURL is a command line tool to communicate remotely to external servers
//send data, receive data, upload files via FTP, login to external accounts

// Steps -- 1) initialize session 

$ch = curl_init(); //handler

// 2) Set options -- most imp bit

curl_setopt($ch, CURLOPT_URL, "http://www.downdrops.com/test/data.php");

// 3) Execute options 

curl_exec($ch);

curl_close($ch);

// 4) Session



 ?>