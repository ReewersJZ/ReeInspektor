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

<?php

if ($_POST['antiBot'] != "")

{
    die();
}


else
{
    $con = mysqli_connect("localhost","login","password"); 
    if (!$con)
    {
    die('Nie mozna polaczyc: ');
    }
    
    mysqli_select_db($con, "login"); 
    mysqli_query($con,"SET CHARSET utf8");
    mysqli_query($con,"SET NAMES 'utf8' COLLATE 'utf8_polish_ci'"); 


    
    $sql="INSERT INTO certyfikaty (imie, nazwisko, nazwa, miasto, poziom, typ, data_szkolenia)
    VALUES
    ('$_POST[imie1]','$_POST[nazwisko1]', '$nazwaFromBase', '$miastoFromBase', '$_POST[poziom1]', '$_POST[typ1]', '$_POST[data1]')";
    
    if (!mysqli_query($con, $sql))
    {
    die('Blad: ');
    }
    echo "";
    
    mysqli_close($con);

}
?>



<html>
    <html lang="pl"></html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="REEWERS Justyna Zahraj">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <title>ReeInspektor Certyfikat</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="mainGMA.css">
</head>

<body>
    <?php if (empty($_SESSION['user'])) : ?>
    <form class="form-signin pt-5">
        <div class="text-center mb-4">
        <a href="index.html"><img class="mb-4" src="img/logo_black.png" alt="" width="80%"></a>
        </div>
        <p class="footerStyle1">© 2020<a href="">
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
        
      <div class="container pt-5" id="printableArea" ><style type="text/css" media="print">@page { size: landscape; }</style>
        <div class="row">
              <div class="col-sm-12">
                <h1 class="zaswiadczenieNaglowek">Zaświadczenie</h1>
              </div>
              <hr class="LineCenter" width="70%">
              <div class="col-sm-12 pb-4 pt-5">
                  <h2 class="zaswiadczenieTekst">Zaświadcza się że Pani/Pan </h2>
                  <h2 class="dataForCertificatePlace">
                    <input class="dataForCertificate" id="" type="text" name="" readonly placeholder="<?php echo $_POST['imie1'] ?> <?php echo $_POST['nazwisko1'] ?>"/>
                  <h2 class="zaswiadczenieTekst">była/był uczestnikiem szkolenia pt.:</h2><br>
                  <h2 class="zaswiadczenieTekstBold">Ochrona danych osobowych w świetle europejskiego rozporządzenia o ochronie danych 
                      osobowych (RODO) - szkolenie wstępne</h2><br>
                  <h2 class="zaswiadczenieTekst">przeprowadzonego przez REEWERS w dniu 
                      <input class="dataForCertificateLeft" id="" type="text" name="" readonly placeholder="<?php echo $_POST['data1'] ?>"></h3>
              </div>
              <div class="col-sm-6 pt-5">
                  <h4 class="zaswiadczenieTekstStopkaBold">REEWERS</h4>
                  <h4 class="zaswiadczenieTekstStopka">ul. Heweliusza 9</h4>
                  <h4 class="zaswiadczenieTekstStopka">40-751 Katowice</h4>
                  <h4 class="zaswiadczenieTekstStopka">www.justynazahraj.pl</h4>
                  <h4 class="zaswiadczenieTekstStopka">justyna.zahraj@gmail.com</h4>
              </div>
              <div class="col-sm-6 mainPictureZaswiadczenieDiv">
                  <img class="mainPictureZaswiadczenie" src="img/logo_black.png"></img>
              </div>
        </div>
      </div>


</main>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
    crossorigin="anonymous"></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/print.js'></script>
    <?php endif; ?>
</body>
</html>