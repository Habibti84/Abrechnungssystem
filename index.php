<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/main.css">
    <title></title>
  </head>
  <body>

    <h1>Kunden Login<br>Jacqueline Motzer</h1>


    <form action="index_response.php" method="post">
      <input type="text" name="userName" placeholder="Benutzername">
      <input type="password" name="password" placeholder="Passwort">
      <input id="btn" type="submit" name="logIn" value="Weiter">
    </form>

  </body>
</html>
