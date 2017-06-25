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
        background-color: green;
      }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Kaip jautiesi lauke?</h1>
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




            echo "<tr><th rowspan='3'>Baseino gylis (m)</th> <th rowspan='3'> Baseino tūris (m3)</th><th colspan='6'>Autocisternų kiekis (vnt.)</th></tr><tr><th colspan='2'>250 m3</th><th colspan='2'>400 m3</th><th colspan='2'>1200 m3</th></tr><tr><th>Kiekis</th><th>Kaina</th><th>Kiekis</th><th>Kaina</th><th>Kiekis</th><th>Kaina</th></tr>";
            for ($gylis=1; $gylis<=30; $gylis++) { 
              
              $kain1 = "white";
              $kain2 = "white";
              $kain3 = "white";

              spalvinimas($kain1, $kain2, $kain3, kaina($autocis1, autocisternos(turis($ilgis, $plotis, $gylis), $autocis3)), kaina($autocis2, autocisternos(turis($ilgis, $plotis, $gylis), $autocis3)), kaina($autocis3, autocisternos(turis($ilgis, $plotis, $gylis), $autocis3)));

              echo "<tr><td>" . $gylis . "</td><td>" . turis($ilgis, $plotis, $gylis) . "</td><td>" . autocisternos(turis($ilgis, $plotis, $gylis), $autocis1) . "</td><td class=" . $kain1 . ">" . kaina($autocis1, autocisternos(turis($ilgis, $plotis, $gylis), $autocis1)) . "</td><td>" . autocisternos(turis($ilgis, $plotis, $gylis), $autocis2) . "</td><td class=" . $kain2 . ">" . kaina($autocis2, autocisternos(turis($ilgis, $plotis, $gylis), $autocis2)) . "</td><td>" . autocisternos(turis($ilgis, $plotis, $gylis), $autocis3) . "</td><td class=" . $kain3 . ">" . kaina($autocis3, autocisternos(turis($ilgis, $plotis, $gylis), $autocis3)) . "</td></tr>";

              

            }
           
            ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>