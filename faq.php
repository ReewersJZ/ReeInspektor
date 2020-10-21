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
      <div class="text-center mb-4">
        <a class="nav-link bigLink" href="index.html"><img class="icons_nav" src="img/home.png">Zaloguj się</a>
      </div>
      <p class="footerStyle1">© 2020<a href="">
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
        <h1 class="typeOfCourseTextMainPanel">Pytania</h1>
            <h3 class="typeOfCourseText2">i odpowiedzi</h3>
            <hr class="shortLine" width="50%">
        </div>
    </div>
  </div>


 
  <div class="container pt-5">
        <div class="row">
            <div class="col-md-12 pt-3 pb-2 addBorder">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="questions">Jakie dokumenty powinien zawierać segregator z dokumentacją RODO?</p>
                        </div>
                        <div class="col-md-3">
                            <a href="#" onclick="presentAnswer('textToPresentFAQ1')"><img class="icons_nav" src="img/plus.png">Rozwiń</a>
                            <a href="#" class="ml-5" onclick="hideAnswer('textToPresentFAQ1')"><img class="icons_nav" src="img/minus.png">Zwiń</a>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-12 answersToHide" id="textToPresentFAQ1">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
            <div class="col-md-12 pt-3 pb-2 addBorder">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="questions">Czy można umieścić na stronie internetowej Administratora listy klas pierwszych 
                                na postawie których rodzice będą wiedzieć w której dziecko jest klasie?</p>
                        </div>
                        <div class="col-md-3">
                            <a href="#" onclick="presentAnswer('textToPresentFAQ2')"><img class="icons_nav" src="img/plus.png">Rozwiń</a>
                            <a href="#" class="ml-5" onclick="hideAnswer('textToPresentFAQ2')"><img class="icons_nav" src="img/minus.png">Zwiń</a>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-12 answersToHide" id="textToPresentFAQ2">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>

            <div class="col-md-12 pt-3 pb-2 addBorder">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="questions">Czy dyrektor szkoły może prosić rodziców o zaświadczenie lekarskie lub 
                                oświadczenie ich samych, że dziecko ma alergię, która objawia się katarem i kaszlem?</p>
                        </div>
                        <div class="col-md-3">
                            <a href="#" onclick="presentAnswer('textToPresentFAQ3')"><img class="icons_nav" src="img/plus.png">Rozwiń</a>
                            <a href="#" class="ml-5" onclick="hideAnswer('textToPresentFAQ3')"><img class="icons_nav" src="img/minus.png">Zwiń</a>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-12 answersToHide" id="textToPresentFAQ3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
            
            <div class="col-md-12 pt-3 pb-2 addBorder">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="questions">W jaki sposób powinny wyglądać loginy dla nauczycieli i uczniów na platformach zewnętrznych (np. Teams)?</p>
                        </div>
                        <div class="col-md-3">
                            <a href="#" onclick="presentAnswer('textToPresentFAQ4')"><img class="icons_nav" src="img/plus.png">Rozwiń</a>
                            <a href="#" class="ml-5" onclick="hideAnswer('textToPresentFAQ4')"><img class="icons_nav" src="img/minus.png">Zwiń</a>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-12 answersToHide" id="textToPresentFAQ4">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>

            <div class="col-md-12 pt-3 pb-2 addBorder">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="questions">W związku z obostrzeniami nakładanymi na Dyrektora szkoły związanymi z  pandemią Covid-19 czy w deklaracji/zgłoszeniu dziecka do świetlicy można wymagać wpisania nazwy zakładu pracy rodzica lub pieczątki tegoż zakładu?</p>
                        </div>
                        <div class="col-md-3">
                            <a href="#" onclick="presentAnswer('textToPresentFAQ5')"><img class="icons_nav" src="img/plus.png">Rozwiń</a>
                            <a href="#" class="ml-5" onclick="hideAnswer('textToPresentFAQ5')"><img class="icons_nav" src="img/minus.png">Zwiń</a>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-12 answersToHide" id="textToPresentFAQ5">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>

            <div class="col-md-12 pt-3 pb-2 addBorder">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="questions">Jak długo powinny być upublicznione listy kandydatów zakwalifikowanych i kandydatów niezakwalifikowanych oraz listy kandydatów przyjętych i kandydatów nieprzyjętych w ramach postępowania rekrutacyjnego do szkoły/przedszkola?</p>
                        </div>
                        <div class="col-md-3">
                            <a href="#" onclick="presentAnswer('textToPresentFAQ6')"><img class="icons_nav" src="img/plus.png">Rozwiń</a>
                            <a href="#" class="ml-5" onclick="hideAnswer('textToPresentFAQ6')"><img class="icons_nav" src="img/minus.png">Zwiń</a>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-12 answersToHide" id="textToPresentFAQ6">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
            
            <div class="col-md-12 pt-3 pb-2 addBorder">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="questions">Jak długo należy przechowywać dokumentację ucznia z rekrutacji do szkoły/przedszkola?</p>
                        </div>
                        <div class="col-md-3">
                            <a href="#" onclick="presentAnswer('textToPresentFAQ7')"><img class="icons_nav" src="img/plus.png">Rozwiń</a>
                            <a href="#" class="ml-5" onclick="hideAnswer('textToPresentFAQ7')"><img class="icons_nav" src="img/minus.png">Zwiń</a>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-12 answersToHide" id="textToPresentFAQ7">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>

            <div class="col-md-12 pt-3 pb-2 addBorder">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="questions">Jak długo należy przechowywać upoważnienia wydane dla członków Rady Rodziców?</p>
                        </div>
                        <div class="col-md-3">
                            <a href="#" onclick="presentAnswer('textToPresentFAQ8')"><img class="icons_nav" src="img/plus.png">Rozwiń</a>
                            <a href="#" class="ml-5" onclick="hideAnswer('textToPresentFAQ8')"><img class="icons_nav" src="img/minus.png">Zwiń</a>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-12 answersToHide" id="textToPresentFAQ8">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
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
    <script src='js/faq_answers.js'></script>

    <?php endif; ?>
</body>
</html>