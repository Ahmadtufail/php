<?php

$serverAddress='localhost';
$userName='root';
$password='';
$dataBaseName='akuwat';


$con=new mysqli($serverAddress,$userName,$password,$dataBaseName);


if (isset( $_POST['name'] ) ) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['contact'];
    $gender = $_POST['gender'];

    $sql="INSERT INTO akuwat (`name`,`age`,`email`,`password`,`address`,`contact`,`gender`)VALUE('$name','$age','$email','$password','$address','$contact','$gender';)";


    if($con->query($sql) ==TRUE){
        echo"Data Inserted";
      }else{
         echo'SOMETHING WENT WRONG';
      }

}



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Test</h1>
    <div class="container-sm">
    <form class="form-control" method="POST" action="test.php">
        <div class="row">
            <div class="col-md-6 mb-3">
            
            <label for="exampleFormControlInput1" class="form-label">Name:</label>
            <input type="text" class="form-control" id="" placeholder="Enter your name">
        </div>
            <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Age:</label>
            <input type="int" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your age">
        </div>
    </div>
            <div class="row">
            <div class="col-md-6 mb-3">
        
            <label for="exampleFormControlInput1" class="form-label">Password:</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter 8 digit password">
            </div>
            <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Gender:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Gender">
        </div>
    </div>
             <div class="row">
             <div class="col-md-12 mb-3">
                
            <label for="exampleFormControlInput1" class="form-label">Address:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Address">
            </div>
        </div>
        <div class="row">
             <div class="col-md-6 mb-3">
                
            <label for="exampleFormControlInput1" class="form-label">Phone-no:</label>
            <input type="int" class="form-control" id="exampleFormControlInput1" placeholder="03XX-XXXXXXX">
            </div>
             <div class="col-md-6 mb-3">
                
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="xxxx@gamil.com">
            </div>
        </div>
        <button type="submit" class="btn btn-dark text-light ms-5 mb-2">Sign-Up</button>
</form>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>