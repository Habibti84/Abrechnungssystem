<?php
  session_start();
  include("dbConnect.php");




  $date = $_POST['date'];
  $kunde = $_POST["kunde"];
  $kunde = strtolower($kunde);
  $kunde = str_replace(' ', '', $kunde);
  $bemerkungen = $_POST["bemerkungen"];
  $time = $_POST["time"];
  $total = $time *35;
  $last = isset($_POST["last"]);

  $_SESSION['kunde'] = $kunde;

  // Wenn submit Button gedrückt wird
  if (isset($_POST["submit"])) {

    // Wenn Zeit, Datum & Kunde gewählt sind



    if ($time && $date && $kunde) {
    $sql = "INSERT INTO $kunde (datum, zeit, bemerkungen, letzter, total) VALUES ('$date', '$time', '$bemerkungen', '$last', '$total')";

      // Wenn DB Connection & Query korrekt
      if (mysqli_query($connect, $sql)) {
        echo "Daten eingetragen";
        header("Location: admin.php");
      }
      else {
        echo $connect->error;
        echo "Daten nicht eingetragen";
      }
    }
    else {
      echo "Fehler: ";
    }

  }

  else {


  }

 ?>
