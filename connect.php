<?php

$con = new mysqli('localhost','root','','crudeoperation');

if(!$con){
    //echo("successfull connection");
    die(mysqli_error($con));
}

?>

