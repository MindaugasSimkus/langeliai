<?php 
  require "homework2functions.php";
  //include "functions.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Autocisternos
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
      th, td {
        text-align: center;
        vertical-align: middle;
      }
      .green {
        background-color: rgba(11, 133, 0, 0.4);
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Baseino užpildymo kaštai</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered">
            <?php 
            $ilgis = 20;
            $plotis = 5;
            $autocis1 = 250;
            $autocis2 = 400;
            $autocis3 = 1200;

            echo "<tr><th rowspan='3'>Baseino gylis (m)</th> <th rowspan='3'> Baseino tūris (m<sup>3</sup>)</th><th colspan='6'>Autocisternos</th></tr><tr><th colspan='2'>250 m<sup>3</sup></th><th colspan='2'>400 m<sup>3</sup></th><th colspan='2'>1200 m<sup>3</sup></th></tr><tr><th>Kiekis</th><th>Kaina</th><th>Kiekis</th><th>Kaina</th><th>Kiekis</th><th>Kaina</th></tr>";

            for ($gylis=1; $gylis<=30; $gylis++) { 
              $turis =  turis($ilgis, $plotis, $gylis);
              $autocisterna250 = autocisternos($turis, $autocis1);
              $kaina250 = kaina($autocis1, $autocisterna250);
              $autocisterna400 = autocisternos($turis, $autocis2);
              $kaina400 = kaina($autocis2, $autocisterna400);
              $autocisterna1200 = autocisternos($turis, $autocis3);
              $kaina1200 = kaina($autocis3, $autocisterna1200);
              echo "<tr><td>" . $gylis . "</td><td>" . $turis . "</td><td>" . $autocisterna250 . "</td><td class=" . spalvinimas($kaina250, $kaina400, $kaina1200) . ">" . $kaina250 . "</td><td>" . $autocisterna400 . "</td><td class=" . spalvinimas($kaina400, $kaina250, $kaina1200) . ">" . $kaina400 . "</td><td>" . $autocisterna1200 . "</td><td class=" . spalvinimas($kaina1200, $kaina400, $kaina250) . ">" . $kaina1200 . "</td></tr>";
            }
            ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
