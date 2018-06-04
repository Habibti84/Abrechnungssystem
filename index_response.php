<?php
  session_start();
  $_SESSION['userName'] = $_POST['userName'];



?>

<link rel="stylesheet" href="style/main.css">

<?php

$userName = $_POST["userName"];
$password = $_POST["password"];

$_SESSION['userName'] = $_POST["userName"];



//
$kunden = array("Regina & Andi", "Tanja & Rolf", "Beatrice Nef", "Regula & Renée", "Leila & Adrian", "Christian & Lisette", "Ursula & Hans", "Sybille & Rufin", "Anna Zürcher", "Beat Ursprung", "Nadine & Philip", "Simon Vlachos", "Isabel & Jörg", "Regula & Harald", "Maximilian Luber", "Vero & Andreas", "Rino", "Roger");

$pwd = array(68710, 40917, 38590, 59598, 94126, 11031, 29581, 41269, 91986, 25602, 30536, 45385, 80986, 75659, 77862, 78051, 72128, 14724);
//$pwd[0] = 2655;
$length = count($kunden);




for ($i = 0; $i < $length; $i++) {

  $kundeTrimed = str_replace(' ', '', $kunden[$i]);

if(trim($userName) == $kunden[$i] && trim($password) == $pwd[$i]) {

    header('Location: table.php');
    $_SESSION['kundeTrimed'] = $kundeTrimed;
  }
else if($userName == "Jacqueline" && $password == 0000) {
    header('Location: admin.php');
  }

else {

  }
}

$theForm = <<<THEFORM

<h1>Kunden Login <br> Jacqueline's Reinigung</h1>


<form action="index_response.php" method="post">
  <input type="text" name="userName" placeholder="Benutzername">
  <input type="password" name="password" placeholder="Passwort">
  <input id="btn" type="submit" name="logIn" value="Weiter">
</form>

<p>Falscher Benutzername oder Passwort</p>

THEFORM;

echo $theForm;










?>

<script type="text/javascript">
function randomIntFromInterval(min,max)
{
  return Math.floor(Math.random()*(max-min+1)+min);
}
console.log(randomIntFromInterval(10000,99999))
</script>
