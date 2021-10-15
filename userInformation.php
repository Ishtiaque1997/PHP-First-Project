<?php
 $connection=mysqli_connect('localhost','root','','php-first-project');
// mysqli_select_db($connection,"php-first");

$user=$_POST['user'];
$email=$_POST['email'];
$message=$_POST['message'];

$query="INSERT INTO userinfodata(user,email,message)
VALUES('$user','$email','$message')";

mysqli_query($connection,$query);
echo 'message sent';

mysqli_close($connection);
?>