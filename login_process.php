<?php
session_start();
include("config/db.php");

if(isset($_POST["login-btn"]))
{
    if(isset($_POST["email"]) && isset($_POST["password"]))
    {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    $email = validate(mysqli_real_escape_string($conn, $_POST["email"]));
    $password = validate(mysqli_real_escape_string($conn, $_POST["password"]));
    
    if(empty($email))
    {
        header("Location: html/login.php?error=Email is required");
    }elseif(empty($password)){
        header("Location: html/login.php?error=Password is required");
        exit();
    }

    $login_query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $login_query_result = mysqli_query($conn, $login_query);
    
    if(mysqli_num_rows($login_query_result) > 0)
    {
        $_SESSION['auth'] = TRUE;
        $adminData = mysqli_fetch_array($login_query_result);
        $username = $adminData['name'];

        $_SESSION['auth_admin'] = [
        'name' => $username
    ];
        $_SESSION['message'] = "Login successful";
        header("Location: html/home.php");
        exit();
    }
    else
    {
    header("Location: html/login.php?error=Invalid Email OR Password");
    exit();
    }

    }
}

?>