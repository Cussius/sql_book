<?php
require 'config.php';

if(isset($_POST['signup']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['first_name'];
    $confirmpassword = $_POST['confirmpassword'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];

    if($username=='')
    {
        echo "<script>alert('Please enter your username')</script>";
        exit();
    }

    if($password=='')
    {
        echo "<script>alert('Please enter your password')</script>";
        exit();
    }

    if($firstname=='')
    {
        echo "<script>alert('Please enter your first name')</script>";
        exit();
    }

    if($lastname=='')
    {
        echo "<script>alert('Please enter your last name')</script>";
        exit();
    }

    if($email=='')
    {
        echo "<script>alert('Please enter your email')</script>";
        exit();
    }

    $domain = explode('@',$email)[1];
    if($domain != 'amn.com')
    {
        die('E-mail must end with @amn.com!');
    }


$duplicate = mysqli_query($conn, "SELECT * FROM user_info WHERE username = '$username' OR email = '$email'");
if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email has already been taken'); </script>";
}
else{
  if($password == $confirmpassword){
    $sql ="INSERT INTO user_info (username,password,first_name,last_name,email) values ('$username','$password','$firstname','$lastname','$email')";
    (mysqli_query($conn, $sql)) ;
    echo
"<script> alert('You have successfully registered')</script>";
header("Location: login.php");
    exit;
  }  
  else{
    echo
"<script> alert('Password does not match')</script>";
  }
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<center><body>
<h1>Welcome</h1>    
<h2>Register here with your @unisa.ac.za email address</h2>

<form action="" method="post" autocomplete="off">
<table border="1" width="300" height="150">
<tr><td>    Username:</td>
    <td><input type="text" name="username" required></td>
</tr>
<tr><td>     Password:</td>
    <td><input type="password" name="password" required></td>
</tr>
<tr><td>     Confirm Password:</td>
    <td><input type="password" name="confirmpassword" required></td>
</tr>
<tr><td>     First Name:</td>
    <td><input type="text" name="first_name" required></td>
</tr>
<tr><td>     Last Name:</td>
    <td><input type="text" name="last_name" required></td>
</tr>
<tr><td>     Email:</td>
    <td><input type="text" name="email" required></td>
</tr>

<tr><td colspan="5" align="center">    <input type="submit" name="signup" value="submit"></td>
</tr>
</table>
</form>

<a href="login.php">Login</a>

</body></center>
</html>


