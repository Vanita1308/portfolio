<?php
    $hostname='localhost';
    $username='root';
    $password='';
    $dbname='vanita';

    $conn=mysqli_connect($hostname,$username,$password,$dbname);

    if(!$conn)
    {
        die("Connection Failed ".mysqli_connect_error());
    }
?>