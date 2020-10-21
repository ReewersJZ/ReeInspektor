<?php

function zmienHaslo($writtenLogin, $newwrittenPassword)

{
    $con = mysqli_connect("localhost","login","password");  
    mysqli_select_db($con, "login"); 

    mysqli_select_db($con, "login"); 
    mysqli_query($con,"SET CHARSET utf8");
    mysqli_query($con,"SET NAMES 'utf8' COLLATE 'utf8_polish_ci'"); 

    $zmiana_hasla_w_bazie = "UPDATE `users` SET `password`='$newwrittenPassword' WHERE `user` = '$writtenLogin'";
    $wynik2 = mysqli_query($con, $zmiana_hasla_w_bazie);
    
    if (!$wynik2)
    {
        return false;
        echo 'błąd połączczenia z serwerem';
    }
    else
    {
            return true;
    }
}


session_start();
ob_start();
$con = mysqli_connect("localhost","login","password");
mysqli_select_db($con, "login");

if (!$con)
  {
  die('Nie mozna polaczyc: ');
  }

if ( isset($_POST["login"]) )
{
    $writtenLogin = $_SESSION['user'];
    $newwrittenPasswordnotSafe = $_POST['newpassword'];
    $newwrittenPassword = password_hash($newwrittenPasswordnotSafe, PASSWORD_DEFAULT);
    $zmien_haslo = zmienHaslo($writtenLogin, $newwrittenPassword);
    
    if ($zmien_haslo) 
    {
    mysqli_close($con);

    } 
    else 
    {
        echo 'nieznany błąd 1'; 
 	} 
} 
else 
{
    echo 'nieznany błąd'; 
}
echo "<script language='javascript' type='text/javascript'>alert('Zaloguj się ponownie');</script>";
echo "<script language='javascript' type='text/javascript'>location.href = 'https://justynazahraj.pl/ReeInspektor/index.html';</script>"; // Zmienić link!



















