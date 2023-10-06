<?php
      $a= $_POST['email'];
      $b = $_POST['password'];

     $conn=mysqli_connect("localhost","root","","php1db");

     $sel = "select * from voteregistration1";

     $rel = mysqli_query($conn,$sel);
     
     $ins = "insert into g (name,password,email,date,time)values('$a','$b','$c','$date','$time')";
     if (mysqli_query($conn,$ins))
     { 
       header("location:signin.php") ;
     }
     
       ?>