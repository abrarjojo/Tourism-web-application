<?php
	
$hostname = '127.0.0.1';
$username = 'root';
$password1 = 'root123';
$dbname = 'id5451890_mydb';	
	
	
	
	//making a connection to mySQl database

$dbc = mysqli_connect($hostname, $username, $password1, $dbname) OR  die('could not connect ERROR: '.mysqli_connection_error());

	//set encoding/
mysqli_set_charset($dbc,"UTF8");	
	
	if($dbc) {
		
	}
	
	
	
?>