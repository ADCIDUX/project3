<?php
$host_name='localhost';
$user_name='root';
$password='';
$db_name='phonemela';

$con=  mysqli_connect($host_name, $user_name, $password);
if($con) {
    mysqli_select_db($con, $db_name);
} else {
    die('Databse Server not Connected'.  mysqli_error($con) );
}
