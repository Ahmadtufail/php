<?php
$serverAddress='localhost';
$userName='root';
$password='';
$dataBaseName='akhuwat';

$con=new mysqli($serverAddress,$userName,$password,$dataBaseName);

if(isset($_Post['$name'])){

$name=$_POST['name'];


$sql2="UPDATE student SET `name`='$name' where id=1";

if($con->query($sql2) ==TRUE){

    echo 'Name Updated';
}else
{
    echo 'Something Went Wrong';
}
};


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP TASK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Sing up</h1>
    <form class="" method="POST" action="task.php">
    <div class="container-fluid">
    <div class="row">
        <div class="col">
        <label for="pwd" class="form-label ms-5 fw-bold">Name:</label>
                        <input type="text" class="form-control" id="pwd" placeholder="Enter your Name" name="name">


        </div>
    </div>

    </div>






    </form>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>