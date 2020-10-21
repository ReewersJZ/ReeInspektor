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
        <div class="collapse navbar-collapse" id="mainmenu" data-target=".navbar-collapse" data-toggle="collapse">
            <ul class="navbar-nav">
                <li class="nav-itm" style="margin-top: 5px;">
                    <a class="nav-link" href="mainPanel.php"><img class="icons_nav" src="img/home.png">Strona główna</a>
                </li>
                <li class="nav-itm printSpaceNav mt-2">
                    <a class="nav-link pt-0" ><img class="icons_nav_print" src="img/print.png"><input class="buttonZaswiadczenieDrukuj" type="button" 
                    onclick="window.print()" value="Drukuj"/></a>
                </li>
            </ul>
        </div>
    </nav>
</header>


<main role="main">
<div class="container">
    <div class="row">
        <div class="col-sm-5 pt-5">
        </div>
        <div class="col-sm-7 pt-5 typeOfCourse">
            <h1 class="typeOfCourseText">Raport oceny ryzyka</h1>
        </div>
    </div>
</div>



<div class="container" id="wynikiAnalizyUkryteRaportKontener">
    <div class="row">
        <form name="analizaRyzykaRaportZapisz" target="_blank" action="analizaRyzykaRaportZapisz.php" method="post">
        <div class="container infoForm pt-3">
            <div class="row">
            <div class="col-md-12">
                <div class="send_messageRyzyko">
                    <div class="container pt-1 selectInfo1">
                        <div class="row">
                            <div class="col-sm-4">        
                                <p class="selectInfoLabel">Nazwa Administratora: </p>
                            </div>
                            <div class="col-sm-8">
                                <input class="long_message" type="text" name="nazwaRaport" readonly value="<?php echo $nazwaFromBase ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1 selectInfo">
                        <div class="row">
                            <div class="col-sm-4 selectInfoLabel">        
                                <p>Czynność przetwarzania: </p>
                            </div>
                            <div class="col-sm-8">
                                <input class="long_message" type="text" name="czynnoscRaport" readonly value="<?php echo $_POST['czynnoscPrzetwarzania'] ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1 selectInfo">
                        <div class="row">
                            <div class="col-sm-4 selectInfoLabel">        
                                <p>Data oceny</p>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="long_message" name="dataOcenyRaport" readonly value="<?php echo $_POST['dataDlaczynnoscPrzetwarzania'] ?>"/>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="container pt-3" id="wynikiAnalizyUkryteRaport">
            <div class="row">
                <div class="col-sm-12 pb-4 pt-4 ">
                    <div class="container pt-1">
                        <div class="row">
                            <div class="col-sm-7 boxRaportNaglowek">        
                                <p class="naglowekTabeli"><br>Obszar</p>
                            </div>
                            <div class="col-sm-5 boxRaportNaglowek">
                                <p class="naglowekTabeli">Uzyskana ilościowa (punktowa) ocena prawdopodobieństwa</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="container pt-1">
                        <div class="row">
                            <div class="col-sm-7">        
                                <p>Sieć i zasoby techniczne (sprzęt i oprogramowanie komputerowe)</p>
                            </div>
                            <div class="col-sm-5 boxRaport">
                                <input class="boxRaportAnswer" id="probabilityRaport" name="probabilityRaport" size="10" readonly value="<?php echo $_POST['probability'] ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1">
                        <div class="row">
                            <div class="col-sm-7">        
                                <p>Procesy/procedury związane z operacją przetwarzania danych</p>
                            </div>
                            <div class="col-sm-5 boxRaport">
                                <input class="boxRaportAnswer" id="probability2Raport" name="probability2Raport" size="10" readonly value="<?php echo $_POST['probability2'] ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1">
                        <div class="row">
                            <div class="col-sm-7">        
                                <p>Różne strony i osoby uczestniczące w operacji przetwarzania</p>
                            </div>
                            <div class="col-sm-5 boxRaport">
                                <input class="boxRaportAnswer" id="probability3raport" name="probability3Raport" size="10" readonly value="<?php echo $_POST['probability3'] ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1">
                        <div class="row">
                            <div class="col-sm-7">        
                                <p>Sektor działalności i skala przetwarzania</p>
                            </div>
                            <div class="col-sm-5 boxRaport">
                                <input class="boxRaportAnswer" id="probability4Raport" name="probability4Raport" size="10" readonly value="<?php echo $_POST['probability4'] ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1">
                        <div class="row">
                            <div class="col-sm-7 ">        
                                <p>Suma ocen ilościowych z 4 obszarów</p>
                            </div>
                            <div class="col-sm-5 boxRaport">
                                <input class="boxRaportAnswer" id="probabilitySumAmountRaport" name="probabilitySumAmountRaport" size="10" readonly value="<?php echo $_POST['probabilitySumAmount'] ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-1">
                        <div class="row">
                            <div class="col-sm-7">        
                                <p>Poziom prawdopodobieństwa</p>
                            </div>
                            <div class="col-sm-5 boxRaport">
                                <input class="boxRaportAnswer" id="probabilitySumRaport" name="probabilitySumRaport" size="10" readonly value="<?php echo $_POST['probabilitySum'] ?>"/>
                            </div>
                        </div>
                    </div> 
                    <hr>
                    <div class="container pt-1">
                        <div class="row">
                            <div class="col-sm-3 pt-2 boxRaport">        
                                <p>Poziom prawdopodobieństwa wystąpienia zagrożenia</p>
                            </div>
                            <div class="col-sm-3 pt-2 boxRaport">
                                <p>Poziom oddziaływania</p>
                            </div>
                            <div class="col-sm-3 pt-2 boxRaport">
                                <p>Ogólna ocena ryzyka przy przetwarzaniu danych</p>
                            </div>
                            <div class="col-sm-3 pt-2 boxRaport" id="reakcjaNaRyzyko">
                                <p>Reakcja na ryzyko</p>
                            </div>
                            <div class="col-sm-3 boxRaport">        
                                <input class="boxRaportAnswer" id="probabilitySum2Raport" name="probabilitySum2Raport" size="10" readonly value="<?php echo $_POST['probabilitySum2'] ?>"/>
                            </div>
                            <div class="col-sm-3 boxRaport">
                                <input class="boxRaportAnswer" id="influenceRaport" name="influenceRaport" size="15" readonly value="<?php echo $_POST['influence'] ?>"/>
                            </div>
                            <div class="col-sm-3 boxRaport">
                                <input class="boxRaportAnswer" id="resultOfAnalyseRaport" name="resultOfAnalyseRaport" size="10"  readonly value="<?php echo $_POST['resultOfAnalyse'] ?>"/>
                            </div>
                            <div class="col-sm-3 boxRaport">
                                <input class="boxRaportAnswer" id="reactionRaport" name="reactionRaport" size="10"  readonly value="<?php echo $_POST['reaction'] ?>"/>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>  

        <div class="container" id="wynikiAnalizyUkryteRaportAction">
            <div class="row">
                <div class="col-sm-5 pb-4 pt-4 ">
                    <label for="zabezpieczenia">Zabezpieczenia do wdrożenia:</label>
                    <textarea class="form-control" id="" rows="3" name="zabezpieczenia"></textarea>
                </div>
                <div class="col-sm-4 pb-4 pt-4 ">
                    <label for="zabezpieczeniaOsoba">Osoba odpowiedzialna:</label>
                    <textarea class="form-control" id="" rows="3" name="zabezpieczeniaOsoba"></textarea>
                </div>
                <div class="col-sm-3 pb-4 pt-4 ">
                    <label for="zabezpieczeniaTermin">Termin wdrożenia zabezpieczeń:</label>
                    <input type="date" class="long_message2" id="" name="zabezpieczeniaTermin" required placeholder="mm/dd/yyyy">
                </div>
            </div>
        </div>
        <div class="container" id="wynikiAnalizyUkryteRaportPrzycisk">
            <div class="row">
                <div class="col-sm-8" id="">
                </div>
                <div class="col-sm-4" id="">
                        <button class="btn btn-lg btn-primary btn-block btnLoging" id="buttonNonPrint" type="submit">Zatwierdź i zapisz</button>
                </div>
            </div>
        </div>
      </form>
    </div>
</div>



<div class="container" id="">
    <div class="row">
        <div class="col-sm-1 pb-4 pt-4 ">
        </div>
        <div class="col-sm-4 pb-4 pt-4 ">
            <label for="sporzadzil">Sporządził:</label>
            <textarea class="form-control" id="" rows="3" name="sporzadzil"></textarea>
        </div>
        <div class="col-sm-2 pb-4 pt-4 ">
            <label for="sporzadzilData">Data:</label>
            <textarea class="form-control" id="" rows="3" name="sporzadzilData"></textarea>
        </div>
        <div class="col-sm-4 pb-4 pt-4 ">
            <label for="sporzadzilPodpis">Podpis:</label>
            <textarea class="form-control" id="" rows="3" name="sporzadzilPodpis"></textarea>
        </div>
        <div class="col-sm-1 pb-4 pt-4 ">
        </div>
    </div>
</div>
<div class="container" id="">
    <div class="row">
    <div class="col-sm-1 pb-4 pt-4 ">
        </div>
        <div class="col-sm-4 pb-4 pt-4 ">
            <label for="zatwierdzil">Zatwierdził:</label>
            <textarea class="form-control" id="" rows="3" name="zatwierdzil"></textarea>
        </div>
        <div class="col-sm-2 pb-4 pt-4 ">
            <label for="zatwierdzilData">Data:</label>
            <textarea class="form-control" id="" rows="3" name="zatwierdzilData"></textarea>
        </div>
        <div class="col-sm-4 pb-4 pt-4 ">
            <label for="zatwierdzilPodpis">Podpis:</label>
            <textarea class="form-control" id="" rows="3" name="zatwierdzilPodpis"></textarea>
        </div>
        <div class="col-sm-1 pb-4 pt-4 ">
        </div>
    </div>
</div>

<div class="container" id="wynikiAnalizyUkryteRaportPrzyciskAction">
            <div class="row">
                <div class="col-sm-8" id="">
                </div>
                <div class="col-sm-4" id="">
                        <button class="btn btn-lg btn-primary btn-block btnLoging btnblue" id="buttonNonPrintAction" onclick="ukryj()">Przygotuj wydruk</button>
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
    <script src="js/analyseOfRisk.js"></script>
    <?php endif; ?>
</body>
</html>
