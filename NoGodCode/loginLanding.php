<?php

  $userName = $_SESSION['userName'];
  $userNameTrimed = str_replace(" ", "", $userName);



  if ($userName == "Regina & Andi") {
    $datab1 = "Augartenstrasse";
    $datab2 = "TherapieOst";
    $table1 = "Augartenstrasse";
    $table2 = "TherapieOst";
    $adress = "Regina Villiger<br>Andi Vellini<br>Augartenstrasse 4<br>9402 Mörschwil";

  }

  else if ($userName == "Tanja & Rolf") {
    $datab1 = "tanjanef";
    $table1 = "Tanja & Rolf";
    $adress = "Tanja Nef<br>Rolf Müller<br>Büttigenhöhe<br>9303 Wittenbach";
  }

  else if ($userName == "Beatrice Nef") {
    $datab1 = "beatricenef";
    $table1 = "Beatrice Nef";
    $adress = "Beatrice Nef<br>Grüntalstrasse <br>9320 Arbon";

  }

  else if ($userName == "Regula & Renée") {
    $datab1 = "regulabischofberger";
    $table1 = "Regula & Renée";
    $adress = "Regula Bischofberger<br>Renée<br><br>";

  }

  else if ($userName == "Leila & Adrian") {
    $datab1 = "leilasteiner";
    $table1 = "Leila & Adrian";
    $adress = "Leila & Adrain Steiner<br>Hauptstrasse <br>9053 Teufen";

  }

  else if ($userName == "Christian & Lisette") {
    $datab1 = "christianpalancon";
    $table1 = "Christian & Lisette";
    $adress = "Christian Palancon<br>Lisette Rujis<br>Hauptstrasse <br>9053 Teufen";


  }

  else if ($userName == "Simon Vlachos") {
    $datab1 = "Käserenstrasse";
    $datab2 = "Lake Group Holding AG";
    $datab2Trimed = str_replace(" ", "", $datab2);
    $table1 = "Käserenstrasse";
    $table2 = "Lake Group Holding AG";
    $adress = "Simon Vlachos<br>Käserenstrasse <br>9404 Rorschacherberg";

  }

  else if ($userName == "Ursula & Hans") {
    $datab1 = "ursulatobler";
    $table1 = "Ursula & Hans";
    $adress = "Ursula & Hans Tobler<br>Talstrasse <br>9200 Gossau";

  }

  else if ($userName == "Sybille & Rufin") {
    $datab1 = "rufin";
    $table1 = "Sybille & Rufin";
    $adress = "Sybille Graf<br>Rufin Motzer<br>Johannes-Baumann-Strasse 5<br>9100 Herisau";


  }

  else if ($userName == "Anna Zürcher") {
    $datab1 = "annazuercher";
    $table1 = "Anna Zürcher";
    $adress = "Anna Zürcher<br>Bruggereggstrasse <br>9100 Herisau";


  }

  else if ($userName == "Beat Ursprung") {
    $datab1 = "beatursprung";
    $table1 = "Beat Ursprung";
    $adress = "Beat Ursprung<br>Schützenstrasse <br>9100 Herisau";


  }

  else if ($userName == "Nadin & Philip") {
    $datab1 = "nadinezillig";
    $table1 = "Nadin & Philip";
    $adress = "Nadine & Philip Zillig<br>Rossweidstrasse 1a<br>9030 Abtwil";


  }

  else if ($userName == "Isabel & Jörg") {
    $datab1 = "isabelspielmann";
    $table1 = "Isabel & Jörg";
    $adress = "Isabel & Jörg Spielmann<br>Untere Weid 1392<br>9402 Mörschwil";


  }

  else if ($userName == "Regula & Harald") {
    $datab1 = "regulahunziker";
    $table1 = "Regula & Harald";
    $adress = "Regula Hunziker<br>Harald Pintarelli<br>Spechtstrasse <br>9320 Arbon";

  }

  else if ($userName == "Maximilian Luber") {
    $datab1 = "maximilianluber";
    $table1 = "Maximilian Luber";
    $adress = "Luber Life AG<br>Versicherungs Treuhand<br>Schlössliweg 11<br>9404 Rorschacherberg";

  }

  else if ($userName == "Vero & Andreas") {
    $datab1 = "verodörig";
    $table1 = "Vero & Andreas";
    $adress = "Vero & Andreas Dörig<br>Fliederstrasse <br>9403 Goldach";


  }

  else if ($userName == "Rino") {
    $datab1 = "rinocastiello";
    $table1 = "Rino";
    $adress = "Gennaro Castiello<br>Reggenschwilerstrasse <br>9402 Mörschwil";


  }

  else if ($userName == "Roger") {
    $datab1 = "rogerdietsche";
    $table1 = "Roger";
    $adress = "Roger Dietsche<br>Gallusweg <br>9402 Mörschwil";


  }

  else {

  }

  $datab1Alle = $datab1 . "Alle";
  if (isset($datab2)) {
  $datab2Alle = $datab2 . "Alle";
  $datab2Trimed = strtolower($datab2);
}


 ?>
