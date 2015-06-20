<?php
include "login.php";



?>


<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8"/>
  <title>Place-a-bet,Get-paid</title>
  <link href="style/main.css" rel="stylesheet"/>
</head>
<body>

<header>
  <h1>
    Hockey Bets . Com
  </h1>

</header>
<nav id="nav">
  <?php if (isset($_SESSION['login_user'])){
    echo "Welcome :". $_SESSION['login_user'];
  }

  ?>
  <ul>
    <?php if (isset($_SESSION['login_user'])){
      echo "<a href=\"deconnect.php\">Logout</a></li>";
      echo "<li><a href=\"liste_equipe.php\">Teams</a></li>";
      echo "<li><a href=\"place_bet.php\">Place a bet</a></li>";
      echo "<li><a href=\"your_bet.php\">Your bet(s)</a></li>";
      echo "<li><a href=\"accueil.php\">Home page</a></li>";

    } else {
      echo "<li><a href=\"liste_equipe.php\">Teams</a></li>";
      echo " <li><a href=\"form_suscribe.php\">Subscribe!</a></li>";
      echo " <li><a href=\"form_connexion.php\">Connexion</a></li>";
      echo "<li><a href=\"accueil.php\">Home page</a></li>";
    }
    ?>

  </ul>
</nav>

<main>
  <?php
  echo $connexion_error;
  ?>
  <form name="connect_form" method="post">

    <input required="required" type="text" name="username" pattern="[a-zA-Z0-9]{4,50}" title="doit contenir plus de 4 caractere et un chiffre" placeholder="Username"/></br>

    <input required="required" type="text" name="password" pattern="[a-zA-Z0-9]{4,50}" title="doit contenir plus de 4 caractère et un chiffre" placeholder="Password"/></br>


    <input type="submit" name="connect" value="Login"/>
  </form>

</main>


<script src="script/main.js"></script>
</body>
</html>