<?php session_start();?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../assets/FAC LOGO - WHITE ( ISOLATED ) -01-01.png">
  <title>Future Academy Chatbot</title>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
  <div class="split-layout">
    <div class="front-image">
      <div class="text1">
        The Ultimate <br>Guide To Our <br>University
      </div>
      <div class="text2">
        TRY OUR CHATBOT!
      </div>
      <div class="text3">
        This website is an extension of the official university<br> website, (Future Academy) <br> Made by elite
        students of Future Academy
      </div>
    </div>
  <img class="logo" src="../assets/FAC LOGO - WHITE ( ISOLATED ) -01-01.png" alt="" >
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
          </l>
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
      </div>
    </div>
  </nav>
      <div class="bg-image">
        <img src="../assets/MAIN GROUND ( ORDER NO 1 ) .jpg" class="img-fluid" alt="Background Image">
      </div>
    </div>
    <div class="split-layout">
      <div class="bg-image">
        <img src="../assets/POLYGONS ( ORDER NO 2 ) .png" class="img-fluid" alt="Background Image">
      </div>
      <div class="front-image">
        <!-- Content for the second image -->
      </div>
    </div>
    <div class="split-layout">
      <div class="front-image">
        <!-- Content for the third image -->
      </div>
      <div class="bg-image">
        <img src="../assets/SPLIT LAYOUT ( ORDER NO 3 ) .png" class="img-fluid" alt="Background Image">
      </div>
    </div>
    <div class="split-layout">
      <div class="front-image">
        <!-- Content for the third image -->
      </div>
      <div class="bg-image">
        <img src="../assets/homepg.webp" class="img-fluid" alt="Background Image">
      </div>
    </div>
  </div>
  <script>
    let docTitle = document.title;
    window.addEventListener("blur", () => {
      document.title = "Come Back😥";
    })
    window.addEventListener("focus", () => {
      document.title = docTitle;
    })

  </script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
    integrity="sha512-V+6v0m0WMBLBO0gbNlbHvg6+XU1I9aIYFipmJffkO3PUvlnWGF4XOlf8ObcQvKJRPY9Ii8P6K+BTIt9RTcXvBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>