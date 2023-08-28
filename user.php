<?php


$serverAddress="localhost";
$username="root";
$password="";
$databaseName="akhuwat";

$con = new mysqli($serverAddress,$username,$password,$databaseName);

$userData =array();

$sql="SELECT * FROM students";

$result=$con->query($sql);

if($result->num_rows>0){
	while ($row=$result->fetch_assoc()) 
	{
		array_push($userData, $row);
	}

	echo json_encode($userData) ;
}
else{
	echo 'NO data available';
}










?>