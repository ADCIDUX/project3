<?php
function dbconnect(){
	$dbname="phonemela";
	$dbuser="root";
	$dbpass="";
	$dbhost="localhost";
	$connection = mysql_pconnect($dbhost,$dbuser,$dbpass);
		if(!$connection)
	{
		return false;
	}
	if(!mysql_select_db($dbname))
	{
		return false;
	}
		return  $connection;
}
?>