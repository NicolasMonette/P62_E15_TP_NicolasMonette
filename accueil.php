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
<div id="wrapper">
  <section id="section1">


      <h1>HOCKEY BETS , GET RICH OR FAIL TRYING</h1>

      <p>Hey, you want to get rich? easily? no efforts at all? Well it's all a matter of luck
        and this site is exactly what you need to figure out if you've got that luck !</p>

      <p>
        This concept ain't no new concept, you think your team's going to win in 4,5,6,7? you suscribe
        and place an amount of money on that bet see how rich it makes you!
      </p>

      <p> These are the rules : Place any amount of money on the team you think will win, and if they so will you
        according to the odd-meter designed by a lonesome bored too-old-to-be-studying student. You also have
        to bet on length of the serie , giving you extra money in case of success!</p>



  </section>



<script src="script/main.js"></script>
</body>
</html>