<?php
session_start();
$sesid=$_SESSION['user'];
if(!isset($_SESSION['user']))
{ 
    header("location:signin.php");

}
$conn=mysqli_connect("localhost","root","","php4b");
$sel = "select  * from g where email = '$sesid'";
$r = mysqli_query($conn,$sel);
while ($k=mysqli_fetch_array($r,MYSQLI_BOTH))
{ 
    echo $k['0'];
    echo $k['1'];
    echo $k['2'];
    echo $k['4'];
    echo $k['5'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> welcome admin</h1>
    
</body>
</html>
