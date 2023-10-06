<?php
$a=$_POST['Adhar'];

$conn=mysqli_connect("localhost","root","","php1db");

$ins=insert into voterlogin('Adhar')
value('$a');

if(mysqli_query($conn,$ins))
{
    header("location:votingpage.php");
}
else(
    echo "data not store";
)
?>