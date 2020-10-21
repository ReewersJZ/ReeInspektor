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
            <h1 class="typeOfCourseTextMainPanel">Formularze</h1>
            <h3 class="typeOfCourseText2">GMA Invest Sp. z o.o.</h3>
            <hr class="shortLine" width="50%">
        </div>
    </div>
  </div>
 


    <div class="container pt-5 pb-5 containerWithForms">
        <div class="row">
        <div class="col-sm-12">
        <ul class="ListOfContent">
                    <li class="listStylefirst">
                        <a class="firstLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Polityka bezpieczeństwa informacji</a>
                    <li class="listStylefirst">
                        <a class="firstLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Instrukcja monitoring</a>
                        <ul class="ListofContentSecondLevel">
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Załącznik nr 1 -miejsca i obszary monitoringu</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Załącznik nr 2 - klauzula informacyjna</a>
                                <ul class="navbar-nav">
                                    <li class="listStyleThird">
                                        <a class="thirdLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Załącznik nr 2a - oznaczenie monitoringu- tabliczka KRÓTKA</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Załącznik nr 3 - uprawnienia_nadawanie</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Załącznik nr 4 - wykaz osób upoważnionych</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Załącznik nr 5 - rejestr udostępnień</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Załącznik nr 6 - oświadczenie</a>
                            </li>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Zarządzenie</a>
                            </li>
                        </ul>
                    </li>
                    <li class="listStylefirst">
                        <a class="firstLevel" href="#">Rekrutacja personelu</a>
                        <ul class="ListofContentSecondLevel">
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">
                                Dane do weryfikacji w rejestrze sprawców_rekrutacja nauczyciel</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Kwestionariusz_kandydata</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Kwestionariusz_pracownika</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">rekrutacja nauczyciel, przyszłe rekrutacje - umowa o pracę</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">rekrutacja pracownik samorządowy </a>
                            </li>
                        </ul>
                    </li>
                    <li class="listStylefirst">
                        <a class="firstLevel" href="#">Pracownik zatrudniony</a>
                        <ul class="ListofContentSecondLevel">
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">upoważnienie z poleceniem do przetwarzania</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">zatrudnienie nauczyciel - umowa o pracę</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">zatrudnienie pracownik samorządowy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="listStylefirst">
                        <a class="firstLevel" href="#">ZFśS, Fundusz zdrowotny</a>
                        <ul class="ListofContentSecondLevel">
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">
                                Fundusz zdrowotny_członek komisji - Upoważnienie z poleceniem_komisja socjalna z obow inform</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">
                                ZFŚS członek komisji - Upoważnienie z poleceniem_komisja socjalna z obow inform</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">
                                ZFŚS osoba czynności - Upoważnienie z poleceniem_z obow inform</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">
                                ZFŚS wnioskodawca - klauzula informacyjna</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">
                                ZFŚS wnioskodawca - klauzula informacyjna skrócona</a>
                            </li>
                        </ul>
                    </li>
                    <li class="listStylefirst">
                        <a class="firstLevel" href="#">Dziecko - uczeń uczęszczający</a>
                        <ul class="ListofContentSecondLevel">
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">odbiór dziecka zbiorczo z upoważnieniem</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">wizerunek_dziecko - zgoda </a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">zgłoszenie dziecka do świetlicy szkolnej </a>
                            </li>
                        </ul>
                    </li>
                    <li class="listStylefirst">
                        <a class="firstLevel" href="#">Rada rodziców</a>
                        <ul class="ListofContentSecondLevel">
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Rada rodziców_upoważnienie z poleceniem i oświadczenie</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Klauzula informacyjna - Rada rodziców</a>
                            </li>
                        </ul>
                    </li>
                    <li class="listStylefirst">
                        <a class="firstLevel" href="#">Klauzule informacyjne</a>
                        <ul class="ListofContentSecondLevel">
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Klauzula informacyjna - ogólna</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Klauzula informacyjna - księga wejść i wyjść</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Klauzula informacyjna - postępowanie o udzielenie zamówienia publicznego powyżej 30k</a>
                            </li>
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Klauzula informacyjna - zamówienia których wartość nie przekracza 30k</a>
                            </li>
                        </ul>
                    </li>
                    <li class="listStylefirst">
                        <a class="firstLevel" href="#">Umowy</a>
                        <ul class="ListofContentSecondLevel">
                            <li class="listStyleSecond">
                                <a class="secondLevel" href="forms/Przykładowy_druk_dokumentu.pdf">Wzór umowy powierzenia danych osobowych</a>
                            </li>
                        </ul>
                    </li>
                </ul>
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