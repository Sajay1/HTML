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
$sql="SELECT * FROM student_details";
$res=mysqli_query($connection,$sql);
if(mysqli_num_rows($res)>0)
{
    echo "<table><tr><th>SLno</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Phone Number</th>";
    echo "<th>Address</th></tr>";
    while($row=mysqli_fetch_assoc($res))
    {
        echo "<tr><td>$row[S_No]</td>";
        echo "<td>$row[Name]</td>";
        echo "<td>$row[Email]</td>";
        echo "<td>$row[Phone_number]</td>" ;
        echo "<td>$row[Address]</td></tr>";
    }
}
else
{
}