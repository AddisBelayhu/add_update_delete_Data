<?php
include 'connect.php';

if(isset($_POST['submit'])){

    $_name = $_POST['name'];
    $_email = $_POST['email'];
    $_mobile = $_POST['mobile'];
    $_password = $_POST['password'];

    $sql = "insert in to 'crud'(name,email,mobile,password) values('$name', '$_email', '$_email', '$_password')";

    $result = mysqli_query($con, $sql);
    if($result){
        echo "successfull connection";
        }else{
            die(mysqli_error($con));
        }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method = "POST">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete = "off">
  </div>
 
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete = "off">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete = "off">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter your name" name="password" autocomplete = "off">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

  </body>
</html>