<?php
$serverAddress='localhost';
$userName='root';
$password='';
$dataBaseName='akhuwat';

$con=new mysqli($serverAddress,$userName,$password,$dataBaseName);

$sql="SELECT * FROM `student` WHERE `name`='Ali' ";


$result=$con->query($sql);



if($result->num_rows > 0){
   
   while($row= $result->fetch_assoc()){
    echo $row['email'];
    echo $row['name'];
    echo $row['phone'];
    echo $row['pass'];
    echo $row['age'];
    echo $row['gender'];
    echo $row['address'];
    echo '<br>';
}

}else{
    echo 'DATA IS NOT AVAILABLE';
}

?>