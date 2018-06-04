<?php

session_start();
include("dbConnect.php");
include("NoGodCode/date.php");
include("NoGodCode/loginLanding.php");
$ende1 = "";
$ende2 = "";
$totalBetr = array();
$totalZeit = array();
$monatsTotalBetrag1 = array();
$monatsTotalZeit1 = array();
$monatsTotalBetrag2 = array();
$monatsTotalZeit2 = array();


$totalBetr = array();
$totalZeit = array();









 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/table.css">

    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Abrechnung <?php echo $userName ?></title>
  </head>
  <body>





<!-- Menu links -->

<nav class="phoneQuery">
  <div class="btnDrop">

    <!--<button class="dropLines">
      <i class="fas fa-bars"></i>
    </button>-->








    <div class="navbar">
      <div class="innerNav">



      <a href="#home">Abrechnung aktuell</a>

      <div class="dropdown">
         <button class="dropbtn">Übersicht 2018
          <i id="icon" class="fas fa-angle-down"></i>
        </button>
         <div class="dropdown-content">
           <a href="table1Alle.php"><?php echo $table1; ?></a>
             <?php if (isset($datab2)) {
               ?>
               <a href="table2Alle.php"><?php echo $table2; ?></a>
               <?php
             }
              ?>
         </div>

       </div>

     </div>
   </div>



     <!-- Personal Button rechts -->

       <!--<div id="personal" class="dropdown">
         <button class="dropbtn"><?php echo $userName; ?>
          <i id="icon" class="fas fa-angle-down"></i>
        </button>
         <div class="dropdown-content">
           <a href="#">Passwort ändern</a>

               <a href="#">E-Mail hinterlegen</a>

         </div>

       </div>

     </div>-->
</nav>


    <div id="head">
      <div id="inHead">
        <h1>Abrechnung<br><?php datum(); ?></h1>
        <p id="adress"><?php echo $adress; ?></p>
      </div>
    </div>



    <div id="body">

      <h2><?php echo $table1; ?></h2>



      <table id="one">
        <thead>
      		<tr>
      			<th class="date">Datum</th>
            <th class = "time">Zeit</th>
            <th class = "bemerk">Bemerkungen</th>
            <th class = "total">Total</th>
      		</tr>
        </thead>

        <tbody>

          <?php



            if ($result1 = $connect->query("SELECT * FROM $datab1 ORDER BY id"))
            {
              if ($result1->num_rows > 0)
              {



                while ($row1 = $result1->fetch_object())
                {



                    echo "<tr>";
                      echo "<td class = 'date'>" . $row1->datum . "</td>";
                      echo "<td class = 'time'>" . $totalstd = $row1->zeit . "</td>";
                      array_push($monatsTotalZeit1, $totalstd);
                      echo "<td class = 'bemerk'>" . $row1->bemerkungen . "</td>";
                      echo "<td>" . "Sfr. " . $total = $row1->total . ".-" . "</td>";
                      array_push($monatsTotalBetrag1, $total);
                    echo "<tr>";

                    echo "</tbody>";








                    if ($row1->letzter == 1)
                    {
                      $ende1 = $row1->letzter;
                        $endbetrag = array_sum($monatsTotalBetrag1);
                        echo "<tfoot>";
                          echo "<tr>";
                            echo "<th>Total:</th>";
                            echo "<th>" . $endZeit = array_sum($monatsTotalZeit1) . "</th>";
                            echo "<th class='bemerk'></th>";
                            echo "<th>" . "Sfr. " . $formatEndbetr = number_format(
                            $endbetrag, // zu konvertierende zahl
                            2,     // Anzahl an Nochkommastellen
                            '.',   // Dezimaltrennzeichen
                            '`'    // 1000er-Trennzeichen
                        ) . '.-' . "</th>";
                            array_push($totalZeit, $endZeit);
                            array_push($totalBetr, $formatEndbetr);
                          echo "</tr>";
                        echo "</tfoot>";








                    }
                    /*else
                    {

                    }*/


}

                }
                //$connect->close();
              }



          ?>

</table>


<?php

if (isset($datab2)) {

  echo '<h2 id="hTwo">' . $table2 . '</h2>';

  echo '<table id="two">';
    echo '<thead>';
     echo '<tr>';
        echo '<tr>';
         echo '<th class="date">Datum</th>';
          echo '<th class = "time">Zeit</th>';
          echo '<th class = "bemerk">Bemerkungen</th>';
          echo '<th class = "total">Total</th>';
       echo '<tr>';
     echo '<tr>';
    echo '</thead>';

    echo '<tbody>';

    if ($result2 = $connect->query("SELECT * FROM $datab2 ORDER BY id"))
    {
      if ($result2->num_rows > 0)
      {



        while ($row2 = $result2->fetch_object())
        {



              echo "<tr>";
                echo "<td class = 'date'>" . $row2->datum . "</td>";
                echo "<td class = 'time'>" . $totalstd = $row2->zeit . "</td>";
                array_push($monatsTotalZeit2, $totalstd);
                echo "<td class = 'bemerk'>" . $row2->bemerkungen . "</td>";
                echo "<td>" . "Sfr. " . $total=$row2->zeit * 35 . ".-" . "</td>";
                array_push($monatsTotalBetrag2, $total);
              echo "<tr>";
              echo "</tbody>";




              //Letzter im Monat wird gekennzichnet um Button anzuzeigen

              if ($row2->letzter == 1)
              {
                $ende2 = $row2->letzter;
                $endbetrag = array_sum($monatsTotalBetrag2);
                echo "<tfoot>";
                  echo "<tr>";
                    echo "<th>Total:</th>";
                    echo "<th>" . $endZeit = array_sum($monatsTotalZeit2) . "</th>";
                    echo "<th class='bemerk'></th>";
                    echo "<th>" . "Sfr. " . $formatEndbetr = number_format(
    $endbetrag, // zu konvertierende zahl
    2,     // Anzahl an Nochkommastellen
    '.',   // Dezimaltrennzeichen
    '`'    // 1000er-Trennzeichen
    ) . '.-' . "</th>";
                    echo "</tr>";
                  echo "</tfoot>";
                  array_push($totalZeit, $endZeit);
                  array_push($totalBetr, $formatEndbetr);



          }



      }





        }
        else
        {

        }
        $connect->close();
      }










  }




    //Tabellenreihen werden ausgegeben, solange Daten zur Verfügung stehen


     ?>








 </div>



 <?php

 if ($ende1 == 1 && $ende2 == 1) {

   echo '</table>';

    echo '<table id="total">';
      echo '<tfoot>';
        echo '<tr>';
          echo '<th class = "date">Total ' . $datab1 . " & " . $datab2 . ':</th>';
          echo '<th class = "time">' . array_sum($totalZeit) . '</th>';
          echo '<td class = "bemerk"></td>';
          echo '<th class = "total">Sfr. ' . array_sum($totalBetr) . '.-</th>';
        echo '</tr>';
      echo '</tfoot>';
    echo '</table>';

      ?>

      <form action="einzahlung.php" method="post" onsubmit="return confirm('Einzahlung bestätigen?');">
        <button class="btn" id="hover" type="submit" name="submit">Einzahlung bestätigen</button>
      </form>

      <?php



 }

 if ($ende2 == "undefined")
 {
   ?>

 <form action="einzahlung.php" method="post" onsubmit="return confirm('Einzahlung bestätigen?');">
   <button class="btn" id="hover" type="submit" name="submit">Einzahlung bestätigen</button>
 </form>

<?php
}

  ?>




  </body>
</html>
