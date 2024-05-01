<?php
include('conn.php');

if (isset($_POST['submit']));
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

        $query="INSERT INTO contact (`name`,`email`,`message`)
        VALUES ('$name','$email','$message')";

        $result=mysqli_query($conn,$query);

        if($result==1)
        {
            echo '<script>alert("Data Successfully Submited");</script>';
            echo '<script>window.location="index.php#contact";</script>';
        }
        else
        {
            echo '<script>alert("Data Not Submited");</script>';
        }
    echo '<script>window.location="index.php";</script>';
}
?>