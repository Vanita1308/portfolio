<?php
include('conn.php');
session_start();
$_SESSION['email']='';
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    // echo $email;
    // echo $password;

    $query="SELECT * FROM user WHERE `email`='$email'";
    $result=mysqli_query($conn,$query);
    $row_num=mysqli_num_rows($result);

    if($row_num>0)
    {
        $row=mysqli_fetch_array($result);
        if($row['password']==$password)
        {
            $_SESSION['email']=$email;
            echo '<script>alert("Login Successfully.");</script>';
            echo '<script>window.location="admin.php"</script>';

        }
        else
        {
            echo '<script>alert("Invalid Password");</script>';
            echo '<script>window.location="login.php"</script>';
        }
    }
    else
    {
        echo '<script>alert("Invalid Email");</script>';
        echo '<script>window.location="login.php"</script>';
    }
}
?>