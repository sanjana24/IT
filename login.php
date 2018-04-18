<?php
include ('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query="select password from login where username=\"$username\"";
$result=mysqli_query($dbh,$query) or die('Error executing the query'.mysqli_error($dbh));
$row=mysqli_fetch_array($result);
if($row['password']==$password)
{
echo('Successfully logged in');
 header('Location:main.html'); 
}
else
header('Location:login.php');
?>
