<?php

  $serverAddress = 'localhost';
  $userName = 'root';
  $password = '';
  $dataBaseName = 'akuwat';

  $con = new mysqli($serverAddress,$userName,$password,$dataBaseName);

  if (isset( $_POST['name'] ) ) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];


    $sql ="INSERT INTO ammar (`name`,`age`,`email`,`password`,`address`,`phone_no`,`gender`) VALUES
    ('$name','$age','$email','$password','$address','$phone','$gender')";

  
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
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style type="text/css">

        .bgnd{
            width: 100%;
            height: 630px;
            background-image: url('bg1.jpg');
        }
        p{
            margin: 0;
            padding: 0;
        }
        .rad{
            border-radius: 10px;
        }
    </style>
  </head>
  <body>
    <div class="bgnd pt-5">
        <div class="container-sm ">
            <!-- <p class="h1 bg-dark text-light text-center p-3 mb-0">Sign-Up Form</p> -->
            <form method="POST" action="first.php" class="bg-light rad">
                <p class="h1 bg-dark text-light text-center p-3 mb-0 rad">Sign-Up Form</p>
                <div class="row d-flex justify-content-center">
                    <div class="col-5">
                      <div class="mb-3 mt-3">
                        <label for="name" class="form-label ms-5 fw-bold">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name">
                      </div>
                    </div>     
                    <div class="col-5">
                      <div class="mb-3 mt-3">
                        <label for="age" class="form-label ms-5 fw-bold">Age:</label>
                        <input type="int" class="form-control" id="age" placeholder="Enter your Age" name="age">
                      </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-5">
                      <div class="mb-3">
                        <label for="email" class="form-label ms-5 fw-bold">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                      </div>
                    </div>
                    <div class="col-5">
                      <div class="mb-3">
                        <label for="pwd" class="form-label ms-5 fw-bold">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="password">
                      </div>
                    </div>
                </div> 
                <div class="row d-flex justify-content-center">
                  <div class=" col-10 mb-3">
                    <label for="address" class="form-label ms-5 fw-bold">Address:</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter your Address" name="address">
                  </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-5">
                      <div class="mb-3">
                        <label for="phone-number" class="form-label ms-5 fw-bold">Phone number:</label>
                        <input type="int" class="form-control" id="phone-number" placeholder="03XX-XXXXXXX" name="phone">
                      </div>
                    </div>
                    <div class="col-5">
                      <div class="mb-3">
                        <label for="gender" class="form-label ms-5 fw-bold">Gender:</label>
                        <input type="text" class="form-control" id="gender" placeholder="Enter your Gender" name="gender">
                      </div>        
                    </div>
                </div>
              
                <div class="form-check mb-3">
                  <label class="form-check-label">
                    <input class="form-check-input ms-4" type="checkbox" name="remember"> Remember me
                  </label>
                </div class="">
                  <button type="submit" class="btn btn-dark text-light ms-5 mb-2">Sign-Up</button>
             </form>
        </div>
    </div>      
          
          
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>