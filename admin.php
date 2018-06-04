<?php
session_start();
include("dbConnect.php");


 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/abrechnung.css">
    <title>Admin</title>
  </head>
  <body>
    <h1>Admin</h1>



    <form method="post" action="addData.php">

      <input type="text" name="date" placeholder="Datum">
      <input type="text" name="time" placeholder="Time">
      <input type="text" name="bemerkungen" placeholder="Bemerkungen">

      <select name="kunde">
        <option>Therapie Ost</option>
        <option>Tanja Nef</option>
        <option>Regula Bischofberger</option>
        <option>Beatrice Nef</option>
        <option>Leila Steiner</option>
        <option>Christian Palancon</option>
        <option>Ursula Tobler</option>
        <option>Rufin</option>
        <option>Anna Zuercher</option>
        <option>Beat Ursprung</option>
        <option>Nadine Zillig</option>
        <option>Simon Vlachos</option>
        <option>Regula Hunziker</option>
        <option>Isabel Spielmann</option>
        <option>Maximilian Luber</option>
        <option>Vero Dörig</option>
        <option>Augartenstrasse</option>
        <option>Roger Dietsche</option>
        <option>Rino Castiello</option>
      </select>

      <div id="checkdiv">
        <input id="check" type="checkbox" name="last" value="abschluss">letzter im Monat<br>
      </div>

      <!--<input type="text" name="kunde" placeholder="Kunde">-->



      <input type="submit" name="submit" value="Add Time">

    </form>
    <?php

      ?>

  </body>
</html>
