<?php

$con = new mysqli('localhost','root','','authentication');
// checking connection 
if($con->connect_error){
    die("connection failed". $con->connect_error);

}else{
    // echo "connected successfully";
}

?>