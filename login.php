<?php
require 'config.php';
if(!empty($_SESSION['id'])){
    header('Location: index.php');
}

if(isset($_POST['submit']))
{
    $usernameemail = $_POST['usernameemail'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM user_info WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row['password']){
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id'];
            header('Location: index.php');
          }
          else{
            echo
        "<script> alert('Wrong password'); </script>";
        } 
    }
    else{
        echo
    "<script> alert('User not registered'); </script>";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<center><body>
<h1>Only for UNISA students registered for TAM2601</h1>

<h2>Login</h2>

<form action="" method="post" autocomplete="off">
<table border="1" width="300" height="150">
<tr><td>    Username or Email:</td>
    <td><input type="text" name="usernameemail" id="usernameemail" required value=""></td>
</tr>
<tr><td>     Password:</td>
    <td><input type="password" name="password" id="password" required value=""></td>
</tr>


<tr><td colspan="5" align="center">    <input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>

<a href="registration.php">Register</a>

</body></center>
</html>


