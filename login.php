<?php


function SprawdzCzyPoprawneHaslo($writtenLogin, $writtenPassword)

{
    $con = mysqli_connect("localhost","login","password");
    mysqli_select_db($con, "login"); 


    $zapytanie = "SELECT * FROM `users` WHERE `user`='$writtenLogin'";
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
                $passwordFromBase = $wiersz['password'];
            }

            if ($writtenPassword == $passwordFromBase)
            {
                return true;
            }
            else
            {
                $result = password_verify($writtenPassword, $passwordFromBase);
                if (!$result)
                {   
                    return false;
                }
                else{
                    return true;
                }
            }           
        }
        else
        {   
            return false;
            echo "<script language='javascript' type='text/javascript'>alert('Błędny login');</script>";
        }
        
    }
}

function jakie_uprawnienia($writtenLogin)

{
    $con = mysqli_connect("localhost","login","password"); 
    mysqli_select_db($con, "login"); 


    $zapytanie = "SELECT * FROM `users` WHERE `user`='$writtenLogin'";
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
                $upraw = $wiersz['uprawnienia'];
                $sektor = $wiersz['sektor'];
                $both = array($upraw, $sektor);
                return $both;
            }
        }
        else
        {   
            return false;
            echo "<script language='javascript' type='text/javascript'>alert('Błąd danych na serwerze');</script>";
        }
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
    $writtenLogin = $_POST['login'];
    $writtenPassword = $_POST['password'];
    $czy_poprawne_haslo = SprawdzCzyPoprawneHaslo($writtenLogin, $writtenPassword);
    

    if ($czy_poprawne_haslo) 
    {
    mysqli_close($con);
    $_SESSION['user'] = htmlspecialchars($_POST['login']);

    
    $uprawnienia = jakie_uprawnienia($_SESSION['user']);
    $_SESSION['uprawnienia'] = $uprawnienia[0];
    $_SESSION['sektor'] = $uprawnienia[1];
    header('Location: https://justynazahraj.pl/ReeInspektor/mainPanel.php'); 
        
    } 
    else 
    {
    echo "<script language='javascript' type='text/javascript'>alert('Błędny login lub hasło');</script>";
    header('Location: https://justynazahraj.pl/ReeInspektor/index.html'); 
 	} 
} 
else 
{
    echo "<script language='javascript' type='text/javascript'>alert('Zaloguj się');</script>";
    header('Location: https://justynazahraj.pl/ReeInspektor/index.html'); 
}
?>