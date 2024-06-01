<?php session_start();
if(isset($_SESSION['auth']))
{
  $_SESSION['message'] = "You are already logged In";
  header('Location: home.php?valid=You are already logged In');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../assets/FAC LOGO - WHITE ( ISOLATED ) -01-01.png">
  <title>Login</title>
  <link rel="stylesheet" href="../css/login.css">
</head>

<body>
  <nav class="navbar">
    <ul class="nav-links">
      <li><a href="../html/home.php">HOME</a></li>
      <li><a href="../html/contact_page.php">CONTACT</a></li>
      <li><a href="#">ABOUT</a></li>
      <li class="nav-item">
        <a class="nav-link p-2 p-lg-3" aria-current="page" href="../html/faq.php">FAQ</a>
      </li>
    </ul>
  </nav>
  <div class="container">
    <div class="form-container">
      <form action="../login_process.php" method="POST" class="login-form">
        <h2>Login</h2>
        <?php if(isset($_GET['error'])){ ?>
            <p class="error" style="color: #e74c3c; padding: 10px; width: 95%; border-radius: 5px; margin: 20px auto; " ><i class="fa-solid fa-circle-exclamation"></i> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login-btn">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
