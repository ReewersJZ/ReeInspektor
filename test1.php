<?php
session_start();
?>

<?php

$logedUser = $_SESSION['user'];

$con = mysqli_connect("localhost","login","password"); 
mysqli_select_db($con, "login"); 


$zapytanie = "SELECT * FROM `users` WHERE `user`='$logedUser'";
$wynik = mysqli_query($con, $zapytanie);

if (!$wynik)
{
    return false;
    echo 'błąd połączczenia z serwerem';
}
else
{       
    $liczba_wierszy = mysqli_num_rows($wynik);
    if ($liczba_wierszy == 1)
    {
        while($wiersz = mysqli_fetch_array($wynik))
        {
            $nazwaFromBase = $wiersz['nazwa'];
            $miastoFromBase = $wiersz['miasto'];
        }

    }
    else
    {   
        echo "<script language='javascript' type='text/javascript'>alert('Brak danych o nazwie Administratora');</script>";
    }
}
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
            <h3 class="typeOfCourseText2">Szkolenie wstępne - Test</h3>
            <hr class="shortLine" width="50%">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <hr>
        <div class="col-sm-12 pt-3 pb-1 ml-3 mr-3 instruction">
            <h5 class="infoBlock">W każdym pytaniu poprawna jest tylko 1 odpowiedź. Do zaliczenia testu wymagane jest udzielenie co najmniej 80%
                                poprawnych odpowiedzi.</h5>
            <h5 class="introductionToFilm">Powodzenia!</h5>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-4 pt-5 questionBlock">
            <h4 class="questionNumber">Pytanie 1</h4>
            <p class="questionText">Przetwarzanie danych osobowych wymaga:</p>
        </div>
        <div class="col-md-8 formAnswerBlock">
            <div class="form-check pt-3" id="exampleRadios1label">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios" id="exampleRadios1" value="1">
                <label class="form-check-label questionBlockAnswerText" for="exampleRadios1">
                udzielenia zgody LUB spełnienia innych warunków opisanych w RODO 
                </label>
            </div>
            <div class="form-check pt-2">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios" id="exampleRadios2" value="0">
                <label class="form-check-label questionBlockAnswerText" for="exampleRadios2">
                udzielenia zgody – zgoda wymagana jest ZAWSZE
                </label>
            </div>
            <div class="form-check pt-2">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios" id="exampleRadios3" value="0">
                <label class="form-check-label questionBlockAnswerText" for="exampleRadios3">
                pisemnego polecenia przetwarzania przez administratora, wydanego najpóźniej 3 dnia roboczego od zatrudnienia
                </label>
            </div>
        </div>
    </div>
    <hr>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-4 questionBlock">
            <h4 class="questionNumber">Pytanie 2</h4>
            <p class="questionText">Jak długo mogą być przechowywane dane osobowe?</p>
        </div>
        <div class="col-md-8 formAnswerBlock">
            <div class="form-check" id="exampleRadios4label">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios2" id="exampleRadios4" value="1" >
                <label class="form-check-label questionBlockAnswerText" for="exampleRadios4">
                Nie dłużej niż jest to konieczne
                </label>
            </div>
            <div class="form-check pt-2">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios2" id="exampleRadios5" value="0" >
                <label class="form-check-label questionBlockAnswerText" for="exampleRadios5">
                Bez ograniczeń
                </label>
            </div>
            <div class="form-check pt-2">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios2" id="exampleRadios6" value="0">
                <label class="form-check-label questionBlockAnswerText" for="exampleRadios6">
                Można je usunąć w każdym momencie
                </label>
            </div>
        </div>
    </div>
    <hr>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-4 questionBlock">
            <h4 class="questionNumber">Pytanie 3</h4>
            <p class="questionText">Czy zgoda na przetwarzanie danych może być wycofana w każdym momencie?</p>
        </div>
        <div class="col-md-8 formAnswerBlock">
            <div class="form-check" id="exampleRadios7label">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios3" id="exampleRadios7" value="1">
                <label class="form-check-label questionBlockAnswerText" for="exampleRadios7">
                Tak
                </label>
            </div>
            <div class="form-check pt-2">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios3" id="exampleRadios8" value="0">
                <label class="form-check-label questionBlockAnswerText" for="exampleRadios8">
                Nie
                </label>
            </div>
            <div class="form-check pt-2">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios3" id="exampleRadios9" value="0">
                <label class="form-check-label questionBlockAnswerText" for="exampleRadios9">
                Administrator sam określa, czy klient może wycofać taką zgodę 
                </label>
            </div>
        </div>
    </div>
    <hr>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 questionBlock">
            <h4 class="questionNumber">Pytanie 4</h4>
            <p class="questionText">Czy można przetwarzać dane "szczególnych kategorii" (np. o stanie zdrowia, przekonaniach politycznych)?</p>
        </div>
        <div class="col-md-8 formAnswerBlock">
            <div class="form-check">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios4" id="exampleRadios10" value="0">
                <label class="form-check-label questionBlockAnswerText" for="exampleRadios10">
                RODO zabrania przetwarzania danych "szczególnych kategorii"
                </label>
            </div>
            <div class="form-check pt-2">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios4" id="exampleRadios11" value="0">
                <label class="form-check-label questionBlockAnswerText" for="exampleRadios11">
                Tak, można zbierać dane "szczególnych kategorii" na tych samych zasadach co dane „zwykłe”
                </label>
            </div>
            <div class="form-check pt-2" id="exampleRadios12label">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios4" id="exampleRadios12" value="1">
                <label class="form-check-label questionBlockAnswerText" for="exampleRadios12">
                Tak, ale tylko wtedy, gdy spełniony jest warunek prawny RODO
                </label>
            </div>
        </div>
    </div>
    <hr>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-4 questionBlock">
            <h4 class="questionNumber">Pytanie 5</h4>
            <p class="questionText">Czy administrator danych ma obowiązek nadać upoważnienie każdemu pracownikowi przetwarzającemu dane osobowe?</p>
        </div>
        <div class="col-md-8 formAnswerBlock">
            <div class="form-check">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios5" id="exampleRadios13" value="0">
                <label class="form-check-label questionBlockAnswerText" for="exampleRadios13">
                to wszystko zależy, jaki zakres danych osoba ta przetwarza
                </label>
            </div>
            <div class="form-check pt-2">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios5" id="exampleRadios14" value="0">
                <label class="form-check-label questionBlockAnswerText" for="exampleRadios14">
                Nie
                </label>
            </div>
            <div class="form-check pt-2" id="exampleRadios15label">
                <input class="form-check-input questionBlockAnswerPointTest" type="radio" name="exampleRadios5" id="exampleRadios15" value="1">
                <label class="form-check-label questionBlockAnswerText"  for="exampleRadios15">
                Tak
                </label>
            </div>
        </div>
    </div>
    <hr>
</div>


<div class="container btnLogingCheckTest">
    <div class="row">
        <div class="col-md-6">
            <input class="btn btn-lg btn-primary btn-block btnLogingCheckTestButton" type="button" onclick="CheckRadio('exampleRadios', 'exampleRadios2', 'exampleRadios3', 'exampleRadios4', 'exampleRadios5');" value="Sprawdź">
        </div>
        <div class="col-md-6">
                <input class="ResultOfTestInput" id="ResultOfTest" type="text" name="ResultOfTest" readonly>
        </div>
    </div>
</div>


<div class="container infoForm pt-3" id="if80showDiv">
    <div class="row">
        <div class="col-md-9">
            <div class="send_message">
                <form action="insert.php" method="post" id="formToSubmit"> 
                    <div class="container pt-1 selectInfo1">
                        <div class="row">
                            <div class="col-sm-4">        
                                <p class="selectInfoLabel">Imię:</p>
                            </div>
                            <div class="col-sm-8">
                                <input class="long_message" type="text" name="imie1" id="imie1">
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1 selectInfo">
                        <div class="row">
                            <div class="col-sm-4 selectInfoLabel">        
                                <p>Nazwisko:</p>
                            </div>
                            <div class="col-sm-8">
                                <input class="long_message" type="text" name="nazwisko1" id="nazwisko1">
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1 selectInfo">
                        <div class="row">
                            <div class="col-sm-4 selectInfoLabel">        
                                <p>Placówka:</p>
                            </div>
                            <div class="col-sm-8">
                                <input class="long_message" type="text" name="nazwa1" readonly placeholder="<?php echo $nazwaFromBase ?>">
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1 selectInfo">
                        <div class="row">
                            <div class="col-sm-4 selectInfoLabel">        
                                <p>Miasto:</p>
                            </div>
                            <div class="col-sm-8">
                                <input class="long_message" type="text" name="miasto1" readonly placeholder="<?php echo $miastoFromBase ?>">
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1 selectInfo">
                        <div class="row">
                            <div class="col-sm-4 selectInfoLabel">        
                                <p>Wynik:</p>
                            </div>
                            <div class="col-sm-8">
                                <input class="long_message" id="Answer" type="text" name="poziom1" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1 selectInfo">
                        <div class="row">
                            <div class="col-sm-4 selectInfoLabel">        
                                <p>Typ szkolenia:</p>
                            </div>
                            <div class="col-sm-8">
                                <input class="long_message" type="text" name="typ1" readonly value="wstępne">
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1 selectInfo">
                        <div class="row">
                            <div class="col-sm-4 selectInfoLabel">        
                                <p>Data szkolenia:</p>
                            </div>
                            <div class="col-sm-8">
                                <input type="date" class="long_message" id="day" name="data1" placeholder="mm/dd/yyyy" value="">
                                <div class="invalid-feedback">
                                wpisz poprawnie format daty.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1 selectInfo AntiBotCheck">
                        <div class="row">
                            <div class="col-sm-4 selectInfoLabel">        
                                <p>Valid</p>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="long_message" id="antiBot" name="antiBot" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1 pb-3 selectInfo">
                        <div class="row">  
                        <div class="col-sm-4 selectInfoLabel">        
                            </div> 
                            <div class="col-sm-8 button_send_message">
                            <input class="btn btn-lg btn-primary btn-block btnLogingCheckTestButton" type="button" 
                                            onclick="checkIfProperlyFilled('imie1', 'nazwisko1', 'day');" value="Zapisz">
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1 pb-3 selectInfo showIfFilledDiv" id="showIfFilled">
                        <div class="row">    
                            <div class="col-sm-12 button_send_message">
                                <input type="submit" value="Wyślij">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3 logoStyle">
            <img class="mainPicture" src="img/logo_black.png"></img>
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
    <script src="js/test.js"></script>
    
    <?php endif; ?>
</body>
</html>
