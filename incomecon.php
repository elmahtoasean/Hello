<?php
$con = new mysqli('localhost','root','MySQL','testdb');
if($con)
{
    echo "Connection Successfull";
}
else
{
    die(mysqli_error($con));
}
?>