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
                <li class="nav-itm printSpaceNav mt-2">
                    <a class="nav-link pt-0" ><img class="icons_nav_print" src="img/print.png"><input class="buttonZaswiadczenieDrukuj" type="button" 
                    onclick="window.print()" value="Drukuj"/></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data data-toggle="dropdown"
                    role="button" aria-expanded="false" id="submenu2" aria-haspopup="true"> 
                    <img class="icons_nav" src="img/user.png"><?php echo $_SESSION['user'] ?></a>
                    <div class="dropdown-menu" aria-labelledby="submenu2">
                        <a class="nav-link" href="logout.php"><img class="icons_nav" src="img/logOut.png">Wyloguj</a>
                </li>
            </ul>
        </div>
    </nav>
        
</header>

<main role="main">
<div class="container">
    <div class="row">
        <div class="col-sm-5 pt-5">
            <img class="mainPicture" src="img/logo_black.png"></img>
        </div>
        <div class="col-sm-7 pt-5 typeOfCourse">
            <h1 class="typeOfCourseText">Karta oceny ryzyka</h1>
            <h3 class="typeOfCourseText2">Formularz</h3>
        </div>
    </div>
</div>

<div class="container infoForm pt-3 pb-3">
    <div class="row">
    <div class="col-md-12">
        <div class="send_messageRyzyko">
            <form name="naglowek" action="analizaRyzykaRaport.php" method="post">
            <div class="container pt-1 selectInfo1">
                <div class="row">
                    <div class="col-sm-4">        
                        <p class="selectInfoLabel">Nazwa Administratora: </p>
                    </div>
                    <div class="col-sm-8">
                        <input class="long_message" type="text" name="nazwa" id="nazwaPodmiotu" readonly placeholder="<?php echo $nazwaFromBase ?>"/>
                    </div>
                </div>
            </div>
            <div class="container pt-1 selectInfo">
                <div class="row">
                    <div class="col-sm-4 selectInfoLabel">        
                        <p>Czynność przetwarzania: </p>
                    </div>
                    <div class="col-sm-8">
                        <input class="long_message" type="text" name="czynnosc" id="czynnoscPrzetw">
                    </div>
                </div>
            </div>
            <div class="container pt-1 selectInfo">
                <div class="row">
                    <div class="col-sm-4 selectInfoLabel">        
                        <p>Data oceny</p>
                    </div>
                    <div class="col-sm-8">
                        <input type="date" class="long_message" id="dataczynnoscPrzetw" name="day" placeholder="DD">
                        <div class="invalid-feedback">
                          wpisz poprawnie format daty.
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</div>



<div class="container pt-2">
    <div class="row">
        <hr>
        <div class="col-sm-12 etapyRyzykoKontener">
            <h3 class="etapyRyzyko">ETAP I. WERYFIKACJA OBOWIĄZKU PRZEPROWADZENIA OCENY SKUTKÓW DLA OCHRONY DANYCH (RYZYKO NARUSZENIA PRAW I WOLNOŚCI)</h3><br>
        </div> 
        <div class="col-sm-12">   
        <p><b>Krok 1.</b> Weryfikacja obowiązku w oparciu o art. 35 ust. 3 Rozporządzenia 2016/679<br><br>
                INSTRUKCJA:<br>
                Odpowiedź twierdząca („tak”) przy którymkolwiek z poniższych kryteriów oznacza, że prawdopodobne jest wystąpienie wysokiego 
                ryzyka naruszenia praw lub wolności podmiotów danych, a w konsekwencji, niezależnie od środków przewidzianych przez 
                administratora, wymagana będzie ocena skutków dla ochrony danych;
                Stwierdzenie obowiązku przeprowadzenia skutków dla ochrony danych kończy procedurę oceny ryzyka według niniejszej metodyki 
                i inicjuje procedurę oceny skutków według odrębnych zasad;
                Jeśli wszystkie udzielone odpowiedzi są negatywne, należy przejść do kroku 2.</p>
        </div>
    </div>
</div>


<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
            <div class="col-sm-12 pb-2">
                <h5>Czy w ramach czynności przetwarzania dokonuje się:</h5>
            </div>
            <div class="col-sm-8 questionBlock">
                <p class="questionText">Systematycznej, kompleksowej oceny czynników osobowych odnoszących się do osób fizycznych, która opiera 
                    się na zautomatyzowanym przetwarzaniu, w tym profilowaniu, i jest podstawą decyzji wywołujących skutki prawne wobec osoby 
                    fizycznej lub w podobny sposób znacząco wpływających na osobę fizyczną?
                </p>
            </div>
            <div class="col-sm-2 formAnswerBlockAnalyse">
                    <div class="form-check">
                        <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep1" id="step1" value="1">
                        <label class="form-check-label questionBlockAnswerText" for="step1">Tak</label>
                    </div>
            </div>
            <div class="col-sm-2 formAnswerBlockAnalyse">
                    <div class="form-check">
                        <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep1" id="step2" value="4">
                        <label class="form-check-label questionBlockAnswerText" for="step2">Nie</label>
                    </div>
            </div>
    </div>
    <hr>
</div>


<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
        <div class="col-sm-8 questionBlock">
            <p class="questionText">Przetwarzania na dużą skalę szczególnych kategorii danych osobowych, o których mowa w art. 9 ust. 1, 
                lub danych osobowych dotyczących wyroków skazujących i naruszeń prawa, o czym mowa w art. 10?</p>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep2" id="step3" value="1">
                    <label class="form-check-label questionBlockAnswerText" for="step3">Tak</label>
                </div>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep2" id="step4" value="4">
                    <label class="form-check-label questionBlockAnswerText" for="step4">Nie</label>
                </div>
        </div>
    </div>
    <hr>
</div>

<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
        <div class="col-sm-8 questionBlock">
            <p class="questionText">Systematycznego monitorowania na dużą skalę miejsc dostępnych publicznie?</p>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep3" id="step5" value="1">
                    <label class="form-check-label questionBlockAnswerText" for="step5">Tak</label>
                </div>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep3" id="step6" value="4">
                    <label class="form-check-label questionBlockAnswerText" for="step6">Nie</label>
                </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-sm-8 pb-4 pt-4 resultsOfFirstTest">
            <input id="AnswerAnalyse" size="5">
            <input class="commentOfResult" id="comment" size="50">
        </div>
        <div class="col-sm-4 pb-4 pt-4 resultsOfFirstTest">
            <input class="btn btn-lg btn-primary btn-block btnLoging" type="button" onclick="CheckRadioAnalyse('radiosStep1', 'radiosStep2', 'radiosStep3')" value="Sprawdź">
        </div>
    </div>
</div>

<div class="container">  
    <div class="row" id="buttonGoToNext">
        <div class="col-sm-12 mb-3">
            <a href="#" class="btn btn-secondary btn-lg active goToTest"  role="button" aria-pressed="true">Przejdź do oceny skutków</a> 
        </div>
    </div>
</div>

<hr>


<div class="container">
    <div class="row">
        <div class="col-sm-12 pt-3 pb-2 ml-3 mr-3">
            <p><b>Krok 2. </b>Weryfikacja obowiązku w oparciu o Komunikat Prezesa Urzędu Ochrony Danych Osobowych  w sprawie wykazu rodzajów operacji 
                przetwarzania danych osobowych wymagających oceny skutków przetwarzania dla ich ochrony (art. 35 ust. 4 Rozporządzenia 
                2016/679)<br><br>
                INSTRUKCJA:<br>
                Odpowiedź twierdząca („tak”) przy dwóch lub więcej z poniższych kryteriów oznacza, że prawdopodobne jest wystąpienie wysokiego 
                ryzyka naruszenia praw lub wolności podmiotów danych, a w konsekwencji, niezależnie od środków przewidzianych przez 
                administratora, wymagana będzie ocena skutków dla ochrony danych;
                Stwierdzenie obowiązku przeprowadzenia skutków dla ochrony danych kończy procedurę oceny ryzyka według niniejszej metodyki 
                i inicjuje procedurę oceny skutków według odrębnych zasad;
                Jeśli wszystkie udzielone odpowiedzi są negatywne, ocena jest kontynuowana.</p>
        </div>
    </div>
</div>



<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
        <div class="col-sm-12 pb-2">
            <h5>Czy w ramach czynności przetwarzania ma miejsce:</h5>
        </div>
        <div class="col-sm-8 questionBlock">
            <p class="questionText">Ewaluacja lub ocena, w tym profilowanie i przewidywanie (analiza behawioralna) w celach wywołujących 
                negatywne skutki prawne, fizyczne, finansowe lub inne niedogodności dla osób fizycznych?</p>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep4" id="step7" value="1">
                    <label class="form-check-label questionBlockAnswerText" for="step7">Tak</label>
                </div>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep4" id="step8" value="2">
                    <label class="form-check-label questionBlockAnswerText" for="step8">Nie</label>
                </div>
        </div>
    </div>
    <hr>
</div>


<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
        <div class="col-sm-8 questionBlock">
            <p class="questionText">Zautomatyzowane podejmowanie decyzji wywołujących skutki prawne, finansowe lub podobne istotne skutki?</p>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep5" id="step9" value="1">
                    <label class="form-check-label questionBlockAnswerText" for="step9">Tak</label>
                </div>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep5" id="step10" value="2">
                    <label class="form-check-label questionBlockAnswerText" for="step10">Nie</label>
                </div>
        </div>
    </div>
    <hr>
</div>


<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
        <div class="col-sm-8 questionBlock">
            <p class="questionText">Systematyczne monitorowanie na dużą skalę miejsc dostępnych publicznie wykorzystujące elementy 
                rozpoznawania cech lub właściwości obiektów, które znajdą się w monitorowanej przestrzeni (Do tej grupy systemów nie są 
                zaliczane systemy monitoringu wizyjnego, w których obraz jest nagrywany i wykorzystywany tylko w przypadku potrzeby analizy 
                incydentów naruszenia prawa)?</p>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep6" id="step11" value="1">
                    <label class="form-check-label questionBlockAnswerText" for="step11">Tak</label>
                </div>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep6" id="step12" value="2">
                    <label class="form-check-label questionBlockAnswerText" for="step12">Nie</label>
                </div>
        </div>
    </div>
    <hr>
</div>


<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
        <div class="col-sm-8 questionBlock">
            <p class="questionText">Przetwarzanie szczególnych kategorii danych osobowych i dotyczących wyroków skazujących i czynów 
                zabronionych?</p>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep7" id="step13" value="1">
                    <label class="form-check-label questionBlockAnswerText" for="step13">Tak</label>
                </div>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep7" id="step14" value="2">
                    <label class="form-check-label questionBlockAnswerText" for="step14">Nie</label>
                </div>
        </div>
    </div>
    <hr>
</div>


<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
        <div class="col-sm-8 questionBlock">
            <p class="questionText">Przetwarzanie danych biometrycznych wyłącznie w celu identyfikacji osoby fizycznej bądź w celu kontroli 
                dostępu?</p>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep8" id="step15" value="1">
                    <label class="form-check-label questionBlockAnswerText" for="step15">Tak</label>
                </div>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep8" id="step16" value="2">
                    <label class="form-check-label questionBlockAnswerText" for="step16">Nie</label>
                </div>
        </div>
    </div>
    <hr>
</div>

<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
        <div class="col-sm-8 questionBlock">
            <p class="questionText">Przetwarzanie danych genetycznych</p>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep9" id="step17" value="1">
                    <label class="form-check-label questionBlockAnswerText" for="step17">Tak</label>
                </div>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep9" id="step18" value="2">
                    <label class="form-check-label questionBlockAnswerText" for="step18">Nie</label>
                </div>
        </div>
    </div>
    <hr>
</div>


<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
        <div class="col-sm-8 questionBlock">
            <p class="questionText">Przetwarzanie danych na dużą skalę, gdzie pojęcie dużej skali dotyczy:<br>
                - liczby osób, których dane są przetwarzane,<br>
                - zakresu przetwarzania,<br>
                - okresu przechowywania danych oraz<br>
                - geograficznego zakresu przetwarzania</p>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep10" id="step19" value="1">
                    <label class="form-check-label questionBlockAnswerText" for="step19">Tak</label>
                </div>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep10" id="step20" value="2">
                    <label class="form-check-label questionBlockAnswerText" for="step20">Nie</label>
                </div>
        </div>
    </div>
    <hr>
</div>


<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
        <div class="col-sm-8 questionBlock">
            <p class="questionText">Przeprowadzanie porównań, ocena lub wnioskowanie na podstawie analizy danych pozyskanych z różnych źródeł</p>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep11" id="step21" value="1">
                    <label class="form-check-label questionBlockAnswerText" for="step21">Tak</label>
                </div>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep11" id="step22" value="2">
                    <label class="form-check-label questionBlockAnswerText" for="step22">Nie</label>
                </div>
        </div>
    </div>
    <hr>
</div>


<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
        <div class="col-sm-8 questionBlock">
            <p class="questionText">Przetwarzanie danych dotyczących osób, których ocena i świadczone im usługi są uzależnione od podmiotów 
                lub osób, które dysponują uprawnieniami nadzorczymi i/lub ocennymi</p>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep12" id="step23" value="1">
                    <label class="form-check-label questionBlockAnswerText" for="step23">Tak</label>
                </div>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep12" id="step24" value="2">
                    <label class="form-check-label questionBlockAnswerText" for="step24">Nie</label>
                </div>
        </div>
    </div>
    <hr>
</div>


<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
        <div class="col-sm-8 questionBlock">
            <p class="questionText">Innowacyjne wykorzystanie lub zastosowanie rozwiązań technologicznych lub organizacyjnych</p>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep13" id="step25" value="1">
                    <label class="form-check-label questionBlockAnswerText" for="step25">Tak</label>
                </div>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep13" id="step26" value="2">
                    <label class="form-check-label questionBlockAnswerText" for="step26">Nie</label>
                </div>
        </div>
    </div>
    <hr>
</div>


<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
        <div class="col-sm-8 questionBlock">
            <p class="questionText">Przetwarzanie, które samo w sobie uniemożliwia osobom, których dane dotyczą, wykonywanie prawa lub 
                korzystanie z usługi lub umowy</p>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep14" id="step27" value="1">
                    <label class="form-check-label questionBlockAnswerText" for="step27">Tak</label>
                </div>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
                <div class="form-check">
                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep14" id="step28" value="2">
                    <label class="form-check-label questionBlockAnswerText" for="step28">Nie</label>
                </div>
        </div>
    </div>
    <hr>
</div>


<div class="container sprawdzCzyOcenaSkutkow">
    <div class="row">
        <div class="col-sm-8 questionBlock">
            <p class="questionText">Przetwarzanie danych lokalizacyjnych</p>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
            <div class="form-check">
                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep15" id="step29" value="1">
                <label class="form-check-label questionBlockAnswerText" for="step29">Tak</label>
            </div>
        </div>
        <div class="col-sm-2 .formAnswerBlockAnalyse">
            <div class="form-check">
                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep15" id="step30" value="2">
                <label class="form-check-label questionBlockAnswerText" for="step30">Nie</label>
            </div>
    </div>
    <hr>
</div>
</div>



<div class="container">
    <div class="row">
        <div class="col-sm-8 pb-4 pt-4 resultsOfFirstTest">
            <input id="AnswerAnalyse2" size="5">
            <input class="commentOfResult" id="comment2" size="50">
        </div>
        <div class="col-sm-4 pb-4 pt-4 resultsOfFirstTest">
            <input class="btn btn-lg btn-primary btn-block btnLoging" type="button" onclick="CheckRadioAnalyse2('radiosStep4', 'radiosStep5', 'radiosStep6',
                            'radiosStep7', 'radiosStep8', 'radiosStep9', 'radiosStep10', 'radiosStep11', 'radiosStep12', 'radiosStep13', 'radiosStep14', 'radiosStep15')" value="Sprawdź">
        </div>
    </div>
</div>

<div class="container">  
    <div class="row" id="buttonGoToNext2">
        <div class="col-sm-12 mb-3">
            <a href="#" class="btn btn-secondary btn-lg active goToTest"  role="button" aria-pressed="true">Przejdź do oceny skutków</a> 
        </div>
    </div>
</div>

<div class="container pt-2">
    <div class="row">
        <hr>
        <div class="col-sm-12 etapyRyzykoKontener">
            <h3 class="etapyRyzyko">ETAP II. ANALIZA RYZYKA NARUSZENIA OCHRONY DANYCH (WARUNKI ORGANIZACYJNE I TECHNICZNE)</h3><br>
        </div>
        <div class="col-sm-12 ">
            <p>INSTRUKCJA:<br>
            W oparciu o listę wystandaryzowanych pytań dokonuje się oceny prawdopodobieństwa zmaterializowania się zagrożenia przy przetwarzaniu danych w każdym z 4 obszarów:<br><br>
            - Sieć i zasoby techniczne (sprzęt i oprogramowanie komputerowe);<br>
            - Procesy/procedury związane z operacją przetwarzania danych;<br>
            - Różne strony i osoby uczestniczące w operacji przetwarzania;<br>
            - Sektor działalności i skala przetwarzania.<br><br>
            </p>
        </div>
    </div>
</div>


<div class="container">
    <p><b>Krok 1. oraz Krok 2. </b>Prawdopodobieństwo materializacji zagrożeń (pytania do obszarów oraz agregacja wyników):</p>
    <div class="row">
        <div class="col-sm-12 pt-3">
            <p class="labelOfTable"> 1. Sieć i zasoby techniczne (sprzęt i oprogramowanie komputerowe)</p>
        </div>
        <div class="col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <label for="firstName">Czy jakakolwiek część przetwarzania danych osobowych odbywa się przez Internet?</label>
                    </div>
                    <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep16" id="step31" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step31">Tak</label>
                            </div>
                    </div>
                    <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep16" id="step32" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step32">Nie</label>
                            </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
            

        <div class="col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <label for="firstName">Czy można zapewnić dostęp do wewnętrznego systemu przetwarzania danych osobowych przez Internet (np. dla pewnych użytkowników lub grup użytkowników)?</label>
                    </div>
                    <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep17" id="step33" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step33">Tak</label>
                            </div>
                    </div>
                    <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep17" id="step34" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step34">Nie</label>
                            </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        <div class="col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <label for="firstName">Czy system przetwarzania danych osobowych jest powiązany z innym wewnętrznym (w ramach organizacji) lub zewnętrznym systemem lub serwisem informatycznym?</label>
                    </div>
                    <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep18" id="step35" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step35">Tak</label>
                            </div>
                    </div>
                    <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep18" id="step36" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step36">Nie</label>
                            </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        <div class="col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <label for="firstName">Czy nieupoważnione osoby mogą łatwo uzyskać dostęp do środowiska przetwarzania danych?</label>
                    </div>
                    <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep19" id="step37" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step37">Tak</label>
                            </div>
                    </div>
                    <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep19" id="step38" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step38">Nie</label>
                            </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        <div class="col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <label for="firstName">Czy system przetwarzania danych osobowych został zaprojektowany, wdrożony lub jest utrzymywany bez przestrzegania odpowiednich dobrych praktyk?</label>
                    </div>
                    <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep20" id="step39" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step39">Tak</label>
                            </div>
                    </div>
                    <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep20" id="step40" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step40">Nie</label>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 pt-5">
            <p class="labelOfTable"> 2. Procesy/procedury związane z operacją przetwarzania danych</p>
        </div>
            <div class="col-sm-12">    
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy role i obowiązki dotyczące przetwarzania danych osobowych są niejednoznaczne lub niejasno zdefiniowane?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep21" id="step41" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step41">Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep21" id="step42" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step42">Nie</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            

            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy możliwe do zaakceptowania użytkowanie sieci, systemu i zasobów fizycznych w ramach organizacji jest dwuznaczne lub niejasno zdefiniowane?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep22" id="step43" value="1">
                                <label class="form-check-label questionBlockAnswerText" for=step43>Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep22" id="step44" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step44">Nie</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy pracownikom wolno wnosić i użytkować swoje własne urządzenia podłączone do systemu przetwarzania danych osobowych?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep23" id="step45" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step45">Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep23" id="step46" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step46">Nie</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy pracownikom wolno przekazywać, przechowywać lub w inny sposób przetwarzać dane osobowe poza obiektami organizacji?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep24" id="step47" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step47">Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep24" id="step48" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step48">Nie</label>
                            </div>
                        </div>
                    </div>
                    </div>
                <hr>
            </div>

            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy czynności przetwarzania danych osobowych mogą być wykonywane bez utworzenia plików dziennika?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep25" id="step49" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step49">Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep25" id="step50" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step50">Nie</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-sm-12 pt-5">
            <p class="labelOfTable"> 3. Różne strony i osoby uczestniczące w operacji przetwarzania</p>
        </div>
            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy przetwarzanie danych wykonywane jest przez nieokreśloną liczbę pracowników?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep26" id="step51" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step51">Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep26" id="step52" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step52">Nie</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            
            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy jakakolwiek część operacji przetwarzania danych wykonywana jest przez wykonawcę/stronę trzecią (podmiot przetwarzający dane)?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep27" id="step53" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step53">Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep27" id="step54" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step54">Nie</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy obowiązki stron/osób uczestniczących w przetwarzaniu danych osobowych są niejednoznaczne lub niejasno ustalone?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep28" id="step55" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step55">Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep28" id="step56" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step56">Nie</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy pracownicy uczestniczący w przetwarzaniu danych osobowych nie znają zasad bezpieczeństwa informacji?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep29" id="step57" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step57">Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep29" id="step58" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step58">Nie</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy osoby/strony uczestniczące w operacji przetwarzania danych zaniedbują bezpieczne przechowywanie i/lub niszczenie danych osobowych?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep30" id="step59" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step59">Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep30" id="step60" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step60">Nie</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-sm-12 pt-5">
            <p class="labelOfTable"> 4. Sektor działalności i skala przetwarzania</p>
        </div>
            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy sektor działalności jest uznawany za podatny na cyberataki?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep31" id="step61" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step61">Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep31" id="step62" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step62">Nie</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            
            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy jednostka ucierpiała z powodu cyberataku lub innego naruszenia bezpieczeństwa w ciągu ostatnich dwóch lat?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep32" id="step63" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step63">Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep32" id="step64" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step64">Nie</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy w ostatnim roku otrzymano zgłoszenia i/lub skargi dotyczące bezpieczeństwa systemu informatycznego (wykorzystywanego do przetwarzania danych osobowych)?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep33" id="step65" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step65">Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep33" id="step66" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step66">Nie</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy operacja przetwarzania dotyczy dużej ilości jednostek i/lub danych osobowych?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep34" id="step67" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step67">Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep34" id="step68" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step68">Nie</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="firstName">Czy istnieją jakiekolwiek dobre praktyki z zakresu bezpieczeństwa dotyczące konkretnie sektora działalności jednostki, które nie są właściwie stosowane?</label>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep35" id="step69" value="1">
                                <label class="form-check-label questionBlockAnswerText" for="step69">Tak</label>
                            </div>
                        </div>
                        <div class="col-sm-2 .formAnswerBlockAnalyse">
                            <div class="form-check">
                                <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep35" id="step70" value="2">
                                <label class="form-check-label questionBlockAnswerText" for="step70">Nie</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
    </div>
</div>


<div class="container pt-5">
    <p><b>Krok 3. </b>Ocena oddziaływania zagrożeń w odniesieniu do podmiotu danych:</p>
    <div class="row">
        <div class="col-sm-12 pt-3">
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-check">
                        <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep36" id="step71" value="1">
                    </div>
                </div>
                <div class="col-sm-11">
                    <label for="step71">Osoby mogą natrafić na kilka niewielkich niedogodności, które są w stanie pokonać bez 
                                            żadnych problemów (czas spędzony na ponowne wprowadzanie informacji, irytacja, rozdrażnienie, 
                                            itp.).</label>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-check">
                        <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep36" id="step72" value="2">
                    </div>
                </div>
                <div class="col-sm-11">
                    <label for="step72">Osoby mogą natrafić na znaczące niedogodności, które są w stanie pokonać pomimo pewnych trudności 
                                            (dodatkowe koszty, odmowa dostępu do usług, strach, brak zrozumienia, stres, niewielkie 
                                            dolegliwości fizyczne, itp.).</label>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-check">
                        <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep36" id="step73" value="3">
                    </div>
                </div>
                <div class="col-sm-11">
                    <label for="step73">Osoby mogą napotkać na poważne konsekwencje, które powinny być w stanie pokonać, aczkolwiek z 
                                            poważnymi trudnościami (sprzeniewierzenie środków, umieszczenie na czarnej liście przez instytucje 
                                            inansowe, szkody majątkowe, utrata pracy, wezwanie do sądu, pogorszenie stanu zdrowia, itp.).</label>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-check">
                        <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep36" id="step74" value="4">
                    </div>
                </div>
                <div class="col-sm-11">
                    <label for="step74">Osoby mogą napotkać na bardzo poważne lub nawet nieodwracalne konsekwencje, których nie są w stanie 
                                            konać (niezdolność do pracy, długoterminowe dolegliwości psychiczne lub fizyczne, śmierć, itp.).</label>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-sm-8 pb-4 pt-4 resultsOfFirstTest">
            <input class="commentOfResult" id="comment3" size="50">
        </div>
        <div class="col-sm-4 pb-4 pt-4 resultsOfFirstTest">
            <input class="btn btn-lg btn-primary btn-block btnLoging" type="button"  onclick="CheckRadioAnalyse3('radiosStep16', 'radiosStep17', 'radiosStep18',
                            'radiosStep19', 'radiosStep20', 'radiosStep21', 'radiosStep22', 'radiosStep23', 'radiosStep24', 'radiosStep25', 
                            'radiosStep26', 'radiosStep27', 'radiosStep28', 'radiosStep29', 'radiosStep30', 'radiosStep31', 'radiosStep32', 
                            'radiosStep33', 'radiosStep34', 'radiosStep35', 'radiosStep36')" value="Zapisz"/>
        </div>
    </div>
</div>

<div class="container" id="wynikiAnalizyUkryte">
    <div class="row">
        <div class="col-sm-12 pb-4 pt-4 ">
            <form name="resultsOfFirstTest" action="analizaRyzykaRaport.php" target="_blank" method="post">
            <div class="container pt-1">
                <div class="row">
                    <div class="col-sm-7 boxRaportNaglowek">        
                        <p class="naglowekTabeli">Obszar</p>
                    </div>
                    <div class="col-sm-5 boxRaportNaglowek">
                        <p class="naglowekTabeli">Uzyskana ilościowa (punktowa) ocena prawdopodobieństwa</p>
                    </div>
                </div>
            </div>
            <div class="container pt-1">
                <div class="row">
                    <div class="col-sm-7">        
                        <p>Sieć i zasoby techniczne (sprzęt i oprogramowanie komputerowe)</p>
                    </div>
                    <div class="col-sm-5 boxRaport">
                        <input class="boxRaportAnswer" id="probability" name="probability" size="10">
                    </div>
                </div>
            </div>
            <div class="container pt-1">
                <div class="row">
                    <div class="col-sm-7">        
                        <p>Procesy/procedury związane z operacją przetwarzania danych</p>
                    </div>
                    <div class="col-sm-5 boxRaport">
                        <input class="boxRaportAnswer"id="probability2" name="probability2" size="10">
                    </div>
                </div>
            </div>
            <div class="container pt-1">
                <div class="row">
                    <div class="col-sm-7">        
                        <p>Różne strony i osoby uczestniczące w operacji przetwarzania</p>
                    </div>
                    <div class="col-sm-5 boxRaport">
                        <input class="boxRaportAnswer" id="probability3" name="probability3" size="10">
                    </div>
                </div>
            </div>
            <div class="container pt-1">
                <div class="row">
                    <div class="col-sm-7">        
                        <p>Sektor działalności i skala przetwarzania</p>
                    </div>
                    <div class="col-sm-5 boxRaport">
                        <input class="boxRaportAnswer" id="probability4" name="probability4" size="10">
                    </div>
                </div>
            </div>
            <div class="container pt-1">
                <div class="row">
                    <div class="col-sm-7">        
                        <p>Suma ocen ilościowych z 4 obszarów</p>
                    </div>
                    <div class="col-sm-5 boxRaport">
                        <input class="boxRaportAnswer" id="probabilitySumAmount" name="probabilitySumAmount" size="10">
                    </div>
                </div>
            </div>
            <div class="container pt-1">
                <div class="row">
                    <div class="col-sm-7">        
                        <p>Poziom prawdopodobieństwa</p>
                    </div>
                    <div class="col-sm-5 boxRaport">
                        <input class="boxRaportAnswer" id="probabilitySum" name="probabilitySum" size="10">
                    </div>
                </div>
            </div> 
            <div class="container pt-1">
                <div class="row">
                    <div class="col-sm-3 pt-5 boxRaport">        
                        <p>Poziom prawdopodobieństwa wystąpienia zagrożenia</p>
                    </div>
                    <div class="col-sm-3 pt-5 boxRaport">
                        <p>Poziom oddziaływania</p>
                    </div>
                    <div class="col-sm-3 pt-5 boxRaport">
                        <p>Ogólna ocena ryzyka przy przetwarzaniu danych</p>
                    </div>
                    <div class="col-sm-3 pt-5 boxRaport" id="reakcjaNaRyzyko">
                        <p>Reakcja na ryzyko</p>
                    </div>
                    <div class="col-sm-3 boxRaport">        
                        <input class="boxRaportAnswer" id="probabilitySum2" name="probabilitySum2" size="10">
                    </div>
                    <div class="col-sm-3 boxRaport">
                        <input class="boxRaportAnswer" id="influence" name="influence" size="15">
                    </div>
                    <div class="col-sm-3 boxRaport">
                        <input class="boxRaportAnswer" id="resultOfAnalyse" name="resultOfAnalyse" size="10">
                    </div>
                    <div class="col-sm-3 boxRaport">
                        <input class="boxRaportAnswer" id="reaction" name="reaction" size="10">
                    </div>
                    <div class="col-sm-4" id="doUkrycia">
                        <input class="boxRaportAnswer" id="NazwaPodmiotu" name="NazwaPodmiotuPobierz" size="10" placeholder="<?php echo $nazwaFromBase ?>">
                    </div>
                    <div class="col-sm-4" id="doUkrycia2">
                        <input class="boxRaportAnswer" id="czynnoscPrzetwarzania" name="czynnoscPrzetwarzania" size="10">
                    </div>
                    <div class="col-sm-4" id="doUkrycia3">
                        <input class="boxRaportAnswer" id="dataDlaczynnoscPrzetwarzania" name="dataDlaczynnoscPrzetwarzania" size="10">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 pt-5 pb-2 ml-3 mr-3" id="labelOf3step">
                <div class="row">
                    <div class="col-sm-12 etapyRyzykoKontener">
                        <h3 class="infoBlock">ETAP III. ZARZĄDZANIE RYZYKIEM</h3><br>
                    </div>
                    <div class="col-sm-12">
                        <p>INSTRUKCJA:<br>
                        W trzecim etapie określa się sposób reakcji na ryzyko – decyzję w sprawie ryzyka. W zależności od ogólnej oceny ryzyka 
                        dla analizowanej czynności przetwarzania danych należy wybrać reakcję na ryzyko:
                            </p>
                    </div>
                    <div class="col-sm-12">
                                <div class="form-check" id="akceptacja">
                                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep37" id="step75" value="1">
                                    <label class="form-check-label questionBlockAnswerText" for="step75"><b>Akceptacja</b> - decyzja o niewprowadzeniu 
                                            adnych zmian w działaniu Administratora (tolerowanie ryzyka).</label>
                                </div>
                        <hr>
                    </div>
                    <div class="col-sm-12" id="redukcja">
                                <div class="form-check">
                                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep37" id="step76" value="2">
                                    <label class="form-check-label questionBlockAnswerText" for="step76"><b>Redukcja</b> - zastosowanie zabezpieczeń 
                                    w celu obniżenia ryzyka.</label>
                                </div>
                        <hr>
                    </div>
                    <div class="col-sm-12" id="przeniesienie">
                                <div class="form-check">
                                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep37" id="step77" value="3">
                                    <label class="form-check-label questionBlockAnswerText" for="step77"><b>Przeniesienie</b> - transfer ryzyka na 
                                                    podmiot zewnętrzny (outsourcing, ubezpieczenie);.</label>
                                </div>
                        <hr>
                    </div>
                    <div class="col-sm-12" id="unikanie">
                                <div class="form-check">
                                    <input class="form-check-input questionBlockAnswerPoint" type="radio" name="radiosStep37" id="step78" value="4">
                                    <label class="form-check-label questionBlockAnswerText" for="step78"><b>Unikanie</b> - eliminacja działań 
                                                    powodujących ryzyko, zaprzestanie danej działalności.</label>
                                </div>
                        <hr>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                    <input class="commentOfResult" id="" size="50">
                            </div>
                            <div class="col-sm-4" id="zatwierdzWybor">
                                        <div class="form-check">
                                            <input class="btn btn-lg btn-primary btn-block btnLoging" type="button"  onclick="CheckRadioAnalyse4('radiosStep37')" value="Wybierz"/>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-sm-12" id="finalButton">
                    <button class="btn btn-lg btn-primary btn-block btnLoging" type="submit">Generuj raport z analizy ryzyka</button>
                </div>
        </div>
        </form>
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
    <script src="js/analyseOfRisk.js"></script>
    <?php endif; ?>
</body>
</html>
