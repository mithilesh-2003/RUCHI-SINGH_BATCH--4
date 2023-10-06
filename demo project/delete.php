<?php 
$conn=mysqli_connect("localhost","root","","php1db");
$delid = $_REQUEST['idd'];
$del = "delete   from  voteregistration1  where id = $delid";
if (mysqli_query($conn,$del))
{ 
    header("location:show.php");
}
?>