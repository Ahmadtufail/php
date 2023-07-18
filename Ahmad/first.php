 <?php

 $serverAdress = 'localhost';
 $userName = 'root';
 $passward = '';
 $dataBaseName = 'akuwat'; 

 $con = new mysqli($serverAdress , $userName ,$passward ,$dataBaseName); 

 $sql = "UPDATE students SET password = '1234' WHERE id =1";

 $sql = "INSERT INTO students (name,age,gender,contact,password,adress) VALUE ('TALHA',35,'mail',0987654,'ggdhyb64746','blockC2')";

 $sql = "DELETE FROM students WHERE id =2";

 if($con->query($sql) ==TRUE){

 	echo "password updated !!";
 }

 
 




 ?>