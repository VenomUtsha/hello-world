<?php
    
    include 'config.php';

    $fname = $_GET['firstname'];
    $lname = $_GET['lastname'];
    $name = $fname." ".$lname;
    $pass = $_GET['password'];
    $conPass = $_GET['cpassword'];
    $email = $_GET['email'];

    if($pass !== $conPass){
        echo "<script>alert('Password didn't match')</script>";
        echo "<script>location.href = 'reg.html';</script>";
    }
    $insertQuery = "INSERT INTO `info`(`username`, `password`, `email`) VALUES ('$name','$pass','$email')";

    if(mysqli_query($conn,$insertQuery)){
        echo "<script>alert('Inserted')</script>";
        echo "<script>location.href = 'login.html';</script>";
    }
    else{
        echo "<script>alert('Not Inserted')</script>";
        echo "<script>location.href = 'reg.html';</script>";
    }

?>