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



	$Nume=$_POST['Nume'];
	$Prenume=$_POST['Prenume'];
	$Comanda=$_POST['Comanda'];


$sql= "insert into meniu(Nume,Prenume,Comanda) values('$Nume','$Prenume','$Comanda')";
$result = mysqli_query ($con,$sql);

if($result)
{
	echo 'Comanda dumneavoastra a fost inregistrata cu succes!';
}

else
{
	echo 'FAILED';
}
	

?>