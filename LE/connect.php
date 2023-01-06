<?php

$con=new mysqli('localhost','root','','umbrella');

if(!$con){
	die(mysqli_error($con)); 
}
?> 