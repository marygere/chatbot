<?php session_start();?>

<?php
session_start();

if(isset($_SESSION['auth']))
{
    unset($_SESSION['auth']);
    unset($_SESSION['auth_admin']);
}
header("Location: login.php?sucess=Logged Out Sucessfully");

?>