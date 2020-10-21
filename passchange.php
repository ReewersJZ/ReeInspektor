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

  <main>
  
    <form name="formChangePassword" class="form-signin pt-5" action="changePassword.php" method="post" onsubmit="return checkPassword()"> 
      <div class="text-center mb-4">
        <img class="mb-4" src="img/logo_black.png" alt="" width="60%">
        <h1 class="typeOfCourseText">Zmiana hasła</h1>
      </div>

      <div class="form-label-group">
        <input type="text" id="inputEmail" name="login" class="form-control" readonly placeholder="<?php echo $_SESSION['user'] ?>" 
        required="" autofocus="">
        <label for="inputEmail"></label>
      </div>

      <div class="form-label-group">
        <input type="password" id="newinputPassword" name="newpassword" class="form-control" placeholder="nowe hasło" required="">
        <label for="newinputPassword"></label>
      </div>
      <div class="form-label-group">
        <input type="password" id="newinputPasswordRepeated" name="newinputPasswordRepeated" class="form-control" placeholder="powtórz nowe hasło" required="">
        <label for="newinputPasswordRepeated"></label>
      </div>

      <button class="btn btn-lg btn-primary btn-block btnLoging" type="submit">Zmień</button>
      <p class="footerStyle1">© 2020<a href="http://www.justynazahraj.pl/">
                <img id="logo_ree" src="img/logo_black.png"></a></p>
</form>

</main>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
    crossorigin="anonymous"></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/checkPasswords.js'></script>
    <?php endif; ?>
</body>
</html>