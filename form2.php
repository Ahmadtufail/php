<?php


$serverAddress = 'localhost';
$userName = 'root';
$password = '';
$dataBaseName = 'students2';



$con = new mysqli ($serverAddress,$userName,$password,$dataBaseName);

$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['password'];



$sql2="INSERT INTO alistable2 (`password`,`name` , `age`) VALUES('er321','Anas','20')" ;


// if($con->query($sql)){

// 	echo "password update !!";
// }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .asgg{
            position: relative;
            left: 30%;
        
        }
        


    </style>

</head>

<body>
    <div class="m-5">
    <form class="text-center d-flex  p-5" method="POST" action="form2.php"> 
    <div class="container-fluid bg-light">
        <div class="h3 bg-secondary">Sign In</div>
        <div class="row">
            <div class="col-md-5 mt-5">
                <label>NAME:</label>
                <input type="text" name="name" placeholder="Name" class="form-control">
          </div>
          <div class="col-md-5 mt-5">
                <label>PASSWORD:</label>
                <input type="password" name="password" placeholder="passwod" class="form-control">
        </div>
    </div>
         <div class="row">

                <div class="col-md-5 mt-5">
                            <label>Email:</label>
                             <input type="email" name="email" placeholder="Email" class="form-control">
                </div>
            <div class="col-md-5 mt-5">
                        <label>Age:</label>
                        <input type="int" name="age" placeholder="Enter age" class="form-control">
             </div>
        </div> 
        <div class="row bgh">
                <div class="col-md-10 mt-5">
                            <label>Address:</label>
                             <input type="text" name="address" placeholder="Enter Your Address" class="form-control">
                </div>
      </div>  
    
        <div class="row bgh ">

                <div class="col-md-5 mt-5">
                            <label>phone-no:</label>
                             <input type="int " name="phone_no" placeholder="03XX-XXXXXXX" class="form-control">
                </div>
            <div class="col-md-5 mt-5">
                        <label>Gender:</label>
                        <input type="text" name="gender" placeholder="gender" class="form-control">
             </div>
    </div>
         <br>
                <button type="submit" class="btn btn-success asgg">Sign in</button>

            </div>
    </div>
    </form>
 </div>
</body>

</html>