<?php
$a=$_POST['name1'];
$b=$_POST['name2'];
$c=$_POST['email'];
$d=$_POST['password'];
$e=$_POST['address'];
$f=$_FILES['photo']['name'];
$g=$_FILES['photo']['tmp_name'];
$h=$_POST['role'];

$date=date("d/m/y");
date_default_timezone_set("asia/kolkata");
$time=date("h:i:sa");

$loc="photo/";


$conn=mysqli_connect("localhost","root","","php1db");
if(!$conn){ 
    move_uploaded_file($f,$loc.$g.$c);
    echo "echo connection sucessfully";
    
}
else{ 
    echo "connected into database";
}
$ins  = "insert into  partyregistration1(partyname,presidentname,email,password,address,partysymbol,role,date,time)
values('$a','$b','$c','$d','$e','$f','$h','$date','$time')";

if(mysqli_query($conn,$ins)){ 
    echo "data store in database";
}
else{ 
    echo "data sucessflly store into database";
}





?>