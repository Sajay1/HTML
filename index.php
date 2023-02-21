<?php
$server_name="localhost";
$username="root";
$password="";
$database="stud";
$connection=mysqli_connect($server_name,$username,$password,$database);
if($connection)
{
    echo "CONNECTED SUCCESSFULLY";
}
else
{
    die('NOT CONNECTED!!!');
}
$name=$_POST['name1'];
$email=$_POST['name2'];
$phone_number=$_POST['name3'];
$address=$_POST['name4'];

$sql = "INSERT INTO student_details(Name,Email,Phone_number,Address) VALUES('$name','$email','$phone_number','$address')";
mysqli_query($connection,$sql);
mysqli_close($connection);
