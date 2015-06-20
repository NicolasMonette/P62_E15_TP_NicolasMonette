<?php
// Makes sure users_db exists in cookies
if (!isset($_COOKIE['users_db'])){
  setcookie('users_db',json_encode(array()));
}
session_start();
function GetUserIndex($users_db, $username){
  for($i = 0; $i < count($users_db); $i++){
    if ($username == $users_db[$i][0]) {
      return $i;
    }
  }
  return -1;
}
$connexion_error="";
// handle connection
if (isset($_POST['connect']) && $_POST['connect'] == "Login") {
  $username=$_POST['username'];
  $password=$_POST['password'];
  $users_db = json_decode($_COOKIE['users_db']);

  foreach ($users_db as $user){
    if ($username == $user[0]&&$user[1] == $password){

      $_SESSION['login_user']=$username;
      header("location: liste_equipe.php");
    }
  }



  $connexion_error = "Username or Password is invalid";

//  handle subscription
} else if (isset($_POST['connect']) && $_POST['connect'] == "Subscribe") {
  $username=$_POST['username'];
  $password=$_POST['password'];
  $confirm_password=$_POST['confirm_password'];
  $email=$_POST['email'];
  if ($password === $confirm_password){
    $_SESSION['login_user']=$username;

    // Get users_db array
    echo "Cookie users_db : " . $_COOKIE['users_db'];
    echo "Cookie users_db decoded : " . json_decode($_COOKIE['users_db']);
    $users_db = json_decode($_COOKIE['users_db']);
    var_dump($users_db);
    $userbets = array();
    $users_db[] = array($username,$password, $userbets);


    setcookie('users_db', json_encode($users_db));
  }
}


?>

