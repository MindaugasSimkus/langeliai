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
          <h1>Paskaita</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <pre>
            <?php 
            
            suvesti i masyva troskinio sudeti:
            jautiena 250 g
            pupeles 500 g
            vanduo 500 g
            pomidorai 300 g 
            paprika 100 g

            1. parasyti funkcija, kuri atspausdintu visus elementus lenteleje.
            2. parasyti funkcija, kuri atspausdintu "Jautienos receptui mums reikes XXX gramu ZZZ, taip pat, XXX gramu ZZZ ..."
            3 parasyti funkcija, kuri suskaiciuotu kiek svers visi produktai.
            4. parasyti funkcija , kuri patikrintu ar vandens ne maziau nei pupeliu

            $troskinio_sudetis = [
            "Jautiena" => 250
            ];


            ?>
            </pre>
        </div>
      </div>
    </div>
  </body>
</html>
