<?php
    
    include 'config.php';

    $l_email = $_GET['email'];
    $l_pass = $_GET['password'];
    
    $check_email = $conn->query("SELECT * FROM `info` WHERE email='$l_email' AND password='$l_pass'");
    if($check_email->num_rows > 0){
        echo "<script>location.href = 'upcoming.html'</script>";
    }
    else{
        echo "<script>alert('User not found')</script>";
        echo "<script>location.href = 'login.html';</script>";
    }

?>