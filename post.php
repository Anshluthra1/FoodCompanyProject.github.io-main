<?php

if 
   
(isset($_POST['submit'])){

    $name =  $_POST['name'];
     $Email = $_POST['Email'];
     $find-us = $_POST['find-us'];
     $Newsletter = $_POST['Newsletter'];
    $message = $_POST['message'];

    echo "Your First Name is: ".$name."<br>";
    echo "your email is ".$email."<br>";
    echo "message is ".$message.;
}

      ?>
