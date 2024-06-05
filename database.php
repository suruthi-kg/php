<?php
$url='localhost';
$username='root';
$password='1212789';
$conn=mysqli_connect($url,$username,$password,"test");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
?> 