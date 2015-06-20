<?php
include "teams.php";
include "login.php";
function TeamExistsInBets($bets, $nom_equipe){
  foreach($bets as $bet){
    if ($bet[0] == $nom_equipe){
      return true;
    }
  }
  return false;
}
function GenerateOptionValues($teams){
  foreach ($teams as $team){
    echo "<option value=\"$team[0]\"/>";
  }
}
$bet_error="";
if (isset($_POST['Bet'])){
  $team_selected = $_POST['team_selected'];
  $serie_length = $_POST['serie_length'];
  $bet_amount = $_POST['bet_amount'];

  $users_db = json_decode($_COOKIE['users_db']);
$bets = $users_db[GetUserIndex($users_db, $_SESSION['login_user'])][2];
  // Check if selected team already exists in bets

  if(TeamExistsInBets($bets, $team_selected)||(TeamExistsInBets($bets, GetOpponent($teams, $team_selected)))) {
    $bet_error = "You've already placed a bet on that serie";
  }else {
    $userbets = array($team_selected, $serie_length, $bet_amount);
    $user_index = GetUserIndex($users_db, $_SESSION['login_user']);
    $users_db[$user_index][2][] = $userbets;

    setcookie('users_db', json_encode($users_db));
    header("Location: place_bet.php");
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

<?php
echo $bet_error;
?>
<fieldset><legend>Place a bet</legend>
  <form id="form1" method="post" name="userbets">
    <label for="listteam">Pick a team :</label>
    <input id="listteam" name="team_selected" required="required" list="betnames"/><br/>
    <datalist id="betnames">
      <?php
      GenerateOptionValues($teams);
      ?>
    </datalist>

    <span>Serie's length?</span>
    <label for="radio1">4</label>
    <input name="serie_length" value="4" id="radio1" type="radio"/>
    <label for="radio2">5</label>
    <input name="serie_length" value="5" id="radio2" type="radio"/>
    <label for="radio3">6</label>
    <input name="serie_length" value="6" id="radio3" type="radio"/>
    <label for="radio4">7</label>
    <input name="serie_length" value="7" id="radio4" type="radio"/><br/>
    <label for="number1">How much? :</label>
    <input name="bet_amount" id="number1" type="number"/>
    <input type="submit" value="Submit" name="Bet"/>


  </form>
</fieldset>


</body>
</html>