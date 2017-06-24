<?php 
  require "functions.php";
  //include "functions.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Langeliai
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
      .blokas {
        display: inline-block; 
        padding: 5px;
        width: 50px;
        border: 1px solid white;
        text-align: center;
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
          <table class="table">
          


            <?php 
            $ilgis = 50;
            $plotis = 10;
            $class = "";
            //for ($gylis=1; $gylis<5; $gylis++) {
            //echo "Mums reikes " . get_area($ilgis, $plotis, $gylis) . " kv.m. plyteliu. <br/>"; 
            //}

            echo "<tr><th>Temperatura</th> <th>Jausmas</th></tr>";
            for ($i=1; $i<=35; $i++) { 
              echo "<tr class=" . klase(get_feel($i)) . "><td>" . $i . "</td><td>" . get_feel($i) . "</td></tr>"; 
            }
           
            ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
