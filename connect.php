<?php
$servername = 'localhost';
$username='root';
$password='';
$databsename='crudeoperation';

$con = new mysqli($servername,$username,$password,$databsename);

if(!$con){
    //echo("successfull connection");
    die(mysqli_error($con));
}
  

?>

