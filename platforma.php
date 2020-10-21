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
    <?php if (empty($_SESSION['user'])) : ?>
  <form class="form-signin pt-5">
      <div class="text-center mb-4">
      <a href="index.html"><img class="mb-4" src="img/logo_black.png" alt="" width="80%"></a>
      </div>
      <p class="footerStyle1">© 2020<a href="http://www.justynazahraj.pl/">
                <img id="logo_ree" src="img/logo_black.png"></a></p>
  </form>
    <?php else : ?>

<header>
<nav class="navbar navbar-light bg-navigation navbar-expand-md fixed-top" role="navigation">
            <a class="navbar-brand" href="https://justynazahraj.pl/"><img id="logoMenu" src="img/logo_black.png" 
                width="100" class="d-inline-block" alt="logo"> </a>
                
            <button class="navbar-toggler " type="button" data-toggle="collapse" 
            data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" 
            aria-label="Przełącznik nawigacji">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainmenu" data-target=".navbar-collapse" data-toggle="collapse">
                <ul class="navbar-nav">
                    <li class="nav-itm">
                        <a class="nav-link" href="mainPanel.php">Strona główna</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data data-toggle="dropdown"
                        role="button" aria-expanded="false" id="submenu2" aria-haspopup="true"> 
                        <img class="icons_nav" src="img/user.png"><?php echo $_SESSION['user'] ?></a>
                        <div class="dropdown-menu" aria-labelledby="submenu2">
                            <a class="nav-link" href="logout.php"><img class="icons_nav" src="img/logOut.png">Wyloguj</a>
                        </div>
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
            <h1 class="typeOfCourseText">Ochrona danych osobowych</h1>
            <h3 class="typeOfCourseText2">Szkolenie wstępne</h3>
            <hr class="shortLine" width="50%">
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <hr>
        <div class="col-sm-12 pt-3 pb-3 ml-3 mr-3">
            
            <h3 class="infoBlock">Ochrona danych osobowych - szkolenie wstępne</h3><br>
                <p class="infoBlock">Witamy w nowej pracy!<br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p class="introductionToFilm">Zapraszamy!<br><br>Zespół REEWERS</p>
        </div>
    </div>
</div>


<div class="container filmBlock">
    <div class="row">
        <div class="col-sm-12">
            <!--Alternatywnie film z youtube-->
        <!--<iframe id="widthOfFilm" width="1000" height="562" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--> 

            <video class="film" src="multimedia/film.mp4" type="video/mp4" controls autoplay></video>
                <br>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 mb-3">
            <hr class="mb-4">
            <a href="test1.php" class="btn btn-secondary btn-lg active goToTest" role="button" aria-pressed="true">Rozwiąż test</a>
        </div>
    </div>
</div>

</main>

<footer>
    <div class="col-sm-12 pt-0 pb-0">
        <p class="footerStyle1">2020 Wszelkie prawa zastrzeżone. Projekt i realizacja<a href="http://www.justynazahraj.pl/">
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