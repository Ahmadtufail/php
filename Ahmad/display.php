<?php

 $serverAdress = 'localhost';
 $userName = 'root';
 $passward = '';
 $dataBaseName = 'akuwat'; 

 $con = new mysqli($serverAdress , $userName ,$passward ,$dataBaseName); 


 $sql2="SELECT * FROM students ";



 ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Table</h1>
    <table class="table table-success table-stripped">
        <tr>
            <th>Name</th>
            <th>Password</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
        </tr>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>




