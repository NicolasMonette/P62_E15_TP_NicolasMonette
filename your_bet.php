
<?php
include "teams.php";
include "login.php";

$users_db = json_decode($_COOKIE['users_db']);


$user_index = GetUserIndex($users_db, $_SESSION['login_user']);
$bets = $users_db[$user_index][2];

function GenerateBetsCart($bets){
  foreach ($bets as $bet){
    $team_selected = $bet[0];
    $serie_length = $bet[1];
    $bet_amount = $bet[2];
    echo "<li><p>You've placed : $bet_amount \$ on $team_selected in $serie_length</p></li>";
  }
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
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

<ul>
<?php

GenerateBetsCart($bets);

?>
</ul>

</body>
</html>