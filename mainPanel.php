<?php
session_start();
?>

<html>
    <html lang="pl"></html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="REEWERS Justyna Zahraj">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <title>ReeInspektor</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="mainGMA.css">
</head>

<body>
<?php if (empty($_SESSION['user']) || empty($_SESSION['uprawnienia'])) : ?>
  <form class="form-signin pt-5">
      <div class="text-center mb-4">
      <a href="index.html"><img class="mb-4" src="img/logo_black.png" alt="" width="80%"></a>
      </div>
      <div class="text-center mb-4">
        <a class="nav-link bigLink" href="index.html"><img class="icons_nav" src="img/home.png">Zaloguj się</a>
      </div>
      <p class="footerStyle1">© 2020<a href="http://www.justynazahraj.pl/">
                <img id="logo_ree" src="img/logo_black.png"></a></p>
  </form>
    <?php else : ?>


<header>
        <nav class="navbar navbar-light bg-navigation navbar-expand-md fixed-top" role="navigation">
            <a class="navbar-brand" href=""><img id="logoMenu" src="img/logo_black.png" 
                width="100" class="d-inline-block" alt="logo"> </a>
                
            <button class="navbar-toggler " type="button" data-toggle="collapse" 
            data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" 
            aria-label="Przełącznik nawigacji">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainmenu" data-target=".navbar-collapse" data-toggle="collapse">
                <ul class="navbar-nav">
                    <li class="nav-itm">
                        <a class="nav-link" href="mainPanel.php"><img class="icons_nav" src="img/home.png">Strona główna</a>
                    </li>
                    <li class="nav-itm navDocumentsLink" style="<?php if ($_SESSION['sektor'] == 'rodo' || $_SESSION['sektor'] == 'oswiata') 
                  { echo 'display:block !important;';} else { echo 'display:none !important;';} ?>">
                        <a class="nav-link" href="faq.php"><img class="icons_nav" src="img/question.png">FAQ</a>
                    </li>
                    <li class="nav-item dropdown" style="<?php if ($_SESSION['uprawnienia'] != 'student') { echo 'display:block !important;';} else { echo 'display:none !important;';} ?>">
                        <a class="nav-link dropdown-toggle" href="#" data data-toggle="dropdown"
                        role="button" aria-expanded="false" id="submenu2" aria-haspopup="true"> 
                        <img class="icons_nav" src="img/settings.png">Ustawienia</a>
                        <div class="dropdown-menu" aria-labelledby="submenu2">
                            <a class="dropdown-item" href="passchange.php">Zmiana hasła</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data data-toggle="dropdown"
                        role="button" aria-expanded="false" id="submenu2" aria-haspopup="true"> 
                        <img class="icons_nav" src="img/user.png"><?php echo $_SESSION['user'] ?></a>
                        <div class="dropdown-menu" aria-labelledby="submenu2">
                            <a class="nav-link" href="logout.php"><img class="icons_nav" src="img/logOut.png">Wyloguj</a>
                        </div>
                    </li>
                    <li class="nav-itm navDocumentsLinkInviseble">
                        <a class="nav-link" href=""><?php echo $_SESSION['uprawnienia'] ?></a>
                    </li>
                </ul>
            </div>
        </nav>
</header>

<main role="main">


<div class="container">
  <div class="row">
        <div class="col-md-5 pt-5 mainPictureDiv">
            <img class="mainPicture" src="img/logo_black.png"></img>
        </div>
        <div class="col-md-7 pt-5 typeOfCourse">
            <h1 class="typeOfCourseTextMainPanel">e-IOD</h1>
            <h3 class="typeOfCourseText2">Aplikacja dla Inspektorów</h3>
            <hr class="shortLine" width="50%">
        </div>
    </div>
  </div>
 

  <div class="container pt-5 pb-5 pt-5">
      <div class="row">
        <div class="col-sm-6 col-md-3 cardSizeBlocked" style="<?php if ($_SESSION['uprawnienia'] == 'student') 
                  { echo 'display:block !important;';} else if ($_SESSION['uprawnienia'] != 'student') { echo 'display:none !important;';} ?>">  
        </div>
        <div class="col-sm-6 col-md-3 cardSize "> <a href="platforma.php" style="text-decoration: none;"> 
            <div class="card mb-4 shadow-sm">
                <p class="iconsBox"><img class="icons" src="img/wstepne.png"></p>
                <div class="card-body">
                  <p class="card-text">Szkolenie wstępne</p>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3 cardSize">
              <a href="#" style="text-decoration: none;">
          <div class="card mb-4 shadow-sm">
            <p class="iconsBox"><img class="icons" src="img/okresowe.png"></p>
            <div class="card-body">
              <p class="card-text">Szkolenie okresowe</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-3 cardSize" style="<?php if ($_SESSION['uprawnienia'] == 'student') { echo 'display:none !important;'; } ?>"><a href="analizaRyzyka.php" style="text-decoration: none;">
          <div class="card mb-4 shadow-sm">
            <p class="iconsBox"><img class="icons" src="img/risk.png"></p>
            <div class="card-body">
              <p class="card-text">Analiza ryzyka</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-3 cardSize" style="<?php if ($_SESSION['uprawnienia'] == 'student') { echo 'display:none !important;'; } ?>">
          <a href="form.php" style="text-decoration: none;">
          <div class="card mb-4 shadow-sm">
            <p class="iconsBox"><img class="icons" src="img/documents.png"></p>
            <div class="card-body">
              <p class="card-text">Druki</p>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>

</main>

<footer>
    <div class="col-sm-12 pt-0 pb-0">
        <p class="footerStyle1">2020 Wszelkie prawa zastrzeżone. Projekt i realizacja<a href="">
            <img id="logo_ree" src="img/logo_black.png"></a> </p>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
    crossorigin="anonymous"></script>
    <script src='js/bootstrap.min.js'></script>

    <?php endif; ?>
</body>
</html>