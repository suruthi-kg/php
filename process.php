<?php
include_once 'database.php';
if(isset($_POST['btn-save']))
{
// variables for input data

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
// sql query for inserting data into database

mysqli_query($conn,"insert into chk(first_name,last_name,email) values ('$first_name','$last_name','$email')") or die(mysqli_error());
echo "<p align=center>Data Added Successfully.</p>";
}
?> 