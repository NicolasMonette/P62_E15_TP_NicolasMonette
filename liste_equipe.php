<?php
include "teams.php";

function GenerateTeamList($teams){
  for ($i = 0 ; $i < count($teams) ; $i+=2){
    $i2 = $i+1;
    $team1 = $teams[$i];
    $team2 = $teams[$i + 1];
    $nom_equipe1 = $team1[0];
    $nom_equipe2 = $team2[0];
    $logo1 = $team1[1] . "_logo.svgz";
    $logo2 = $team2[1] . "_logo.svgz";
    echo "<tr><td><a href=\"equipe.php?index=$i\"><img src=\"images/$logo1\"/>$nom_equipe1</a></td><td>VS   </td><td><a href=\"equipe.php?index=$i2\"><img src=\"images/$logo2\"/>$nom_equipe2</a></td></tr>";
  }
}

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
<table>
  <tr><th>Series</th></tr>
  <?php
GenerateTeamList($teams);
  ?>
</table>

</main>


<script src="script/main.js"></script>
</body>
</html>