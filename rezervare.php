<?php


define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "mancare");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

if(!$con)
{
	echo 'Please Check Your Database';
}

	$date_to=$_POST['date_to'];
	$date_from=$_POST['date_from'];
	$nume=$_POST['nume'];
	$prenume=$_POST['prenume'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];

	


$sql= "insert into rezervare(date_to,date_from,nume,prenume,email,phone) values('$date_to','$date_from','$nume','$prenume','$email','$phone')";
$result = mysqli_query ($con,$sql);

if($result)
{
	echo 'Rezervarea dumneavoastra a fost inregistrata cu succes!';
}

else
{
	echo 'FAILED';
}
	
?>