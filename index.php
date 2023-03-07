<?php
require 'config.php';
if(!empty($_SESSION['id'])){
    $id = $_SESSION['id'];
    $result = mysqli_query($conn, "SELECT * FROM user_info WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
}
else{
    header('Location: login.php');
}

?>

</body>

<meta http-equiv="Refresh" content="0; url=intro.php" />
