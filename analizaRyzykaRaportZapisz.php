<?php
session_start();
?>

<?php

$con = mysqli_connect("localhost","login","password"); 
if (!$con)
  {
  die('Nie mozna polaczyc: ');
  }
  
mysqli_select_db($con, "login"); 
mysqli_query($con,"SET CHARSET utf8");
mysqli_query($con,"SET NAMES 'utf8' COLLATE 'utf8_polish_ci'"); 


  
$sql="INSERT INTO analiza_ryzyka (nazwa, czynnosc, data_oceny, siec_i_zasoby, procesy, strony, sektor, suma_obszarow, prawdop, oddzialy, 
                ogolna_ocena, reakcja, zabezpieczenia, osoba, data_wdroz)
VALUES
('$_POST[nazwaRaport]','$_POST[czynnoscRaport]', '$_POST[dataOcenyRaport]', '$_POST[probabilityRaport]', '$_POST[probability2Raport]', 
'$_POST[probability3Raport]','$_POST[probability4Raport]', '$_POST[probabilitySumAmountRaport]', '$_POST[probabilitySum2Raport]', 
'$_POST[influenceRaport]', '$_POST[resultOfAnalyseRaport]','$_POST[reactionRaport]', '$_POST[zabezpieczenia]', '$_POST[zabezpieczeniaOsoba]',
'$_POST[zabezpieczeniaTermin]')";
  
if (!mysqli_query($con, $sql))
  {
  die('Blad: ');
  }
echo "";
  
mysqli_close($con);
echo "<script language='javascript' type='text/javascript'>alert('Dane wprowadzone poprawnie.');</script>";


?>


