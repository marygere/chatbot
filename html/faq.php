<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/FAC LOGO - WHITE ( ISOLATED ) -01-01.png">
    <title>Future Academy Chatbot</title>
    <link rel="stylesheet" href="../css/faq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  </head>

<body>
  <nav class="navbar navbar-expand-lg sticky-top ">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="main">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3" aria-current="page" href="../html/home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3" aria-current="page" href="../html/faq.php">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3" aria-current="page" href="../html/contact_page.php">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link p-2 p-lg-3 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              About
            </a>
            <ul class="dropdown-menu ">
              <li><a class="dropdown-item" href="../html/Historical_Overview.php">Historical overview</a></li>
              <li><a class="dropdown-item" href="../html/Academy_Objectives.php">Academy objectives</a></li>
            </ul>
          </li>
        </ul>
        <?php
        if(isset($_SESSION['auth']))
        {
        ?>
        <li class="nav-item dropdown">
            <a class="nav-link p-2 p-lg-3 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <?= $_SESSION['auth_admin']['name']; ?>
            </a>
            <ul class="dropdown-menu ">
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
        </li>
        <?php
        }
        else
        {
        ?>
        </ul>
        <a href="login.php" class="btn main-btn rounded btn-primary">LOGIN</a>
        <?php
        }
        ?>
      <!-- <a href="login.php" class="btn main-btn rounded btn-primary">LOGIN</a> -->
      </div>
    </div>
  </nav>
  <p class="text1">Frequently Asked Questionss</p>
  <div class="content">
    <div class="paragraph-container">
      <p><h2>what is the admission requirement ?</h2><br>The program receives students who have a high school certificate in the scientific department (science - mathematics) according to the organized rules. Students from the Science department must pass the "Math 2" course within the specified period.</p>
      <div class="divider"></div>
    </div>
    <div class="paragraph-container">
      <p><h2>What is the requirement to transfer to Future Academy ?</h1><br>the institute allows transfers to the program from students of equivalent institutes and colleges. 
        Admission requires a scientific equivalency for courses.</p>
      <div class="divider"></div>
    </div>
    <div class="paragraph-container">
      <p><h2>What is the language of Study ?</h2><br>The language of instruction in the program is either English or Arabic.</p>
      <div class="divider"></div>
    </div>
    <div class="paragraph-container">
      <p><h2>What about studying courses online?</h2><br>Some courses are permitted to be taught online under specific conditions.Final exams are conducted at the institute following organizational instructions.</p>
      <div class="divider"></div>
    </div>
  </div>

      <script src="../js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
      integrity="sha512-V+6v0m0WMBLBO0gbNlbHvg6+XU1I9aIYFipmJffkO3PUvlnWGF4XOlf8ObcQvKJRPY9Ii8P6K+BTIt9RTcXvBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
