<?php
$db_host='localhost';
$db_user='root';
$db_password='tiger';
$db_name='IT';


$dbh=mysqli_connect($db_host,$db_user,$db_password,$db_name) or die("Error connecting to the database".mysqli_error($dbh));
$query="select * from vote";
$result=mysqli_query($dbh,$query) or die("Error querying the database");

echo '<form id="myform">';
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo '<input type="radio"  id="name1" name="candidate" value="'.$row['votername'].'">'.$row['votername'].'<br />';
//echo $row['voterid'].$row['votername'];
}

?>

