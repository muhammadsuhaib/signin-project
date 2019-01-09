<?php

include "config.php";
if(isset($_POST["username"]) && $_POST["username"] != "" && isset($_POST["email"]) && isset($_POST["password"])  ){
$userName = trim($_POST["username"]);
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);
$password = MD5($password);

$qry = "INSERT INTO users (`user_name`, `email`, `password`) VALUES ('$userName','$email','$password')";
if (mysqli_query($con, $qry)) {
    echo "New record created successfully". $userName;
} else {
    echo "Error: " . $qry . "<br>" . mysqli_error($con);
}
}else{
    echo "please provide complete details";
}