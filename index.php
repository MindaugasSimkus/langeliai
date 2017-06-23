<!DOCTYPE html>
<html>
  <head>
    <title>Langeliai
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php 
            $langeliu_skaicius = 145;
            $spalvu_skaicius = "rand";
            function langeliai($kiekis, $spalvu_pasirinkimas) {
              if ($kiekis == null) {
                for ($i=1; $i<=100; $i++) {
                  if ($spalvu_pasirinkimas == "rand") {
                    echo "<div style=\"display: inline-block; background-color: rgba(" . rand(0,255) . ", " . rand(0,255) . ", " . rand(0,255) . ", 1); padding: 20px; border: 1px solid white \">". $i . "</div>";
                  } elseif ($spalvu_pasirinkimas == 2) {
                    if ($i % 2 == 0) {
                      echo "<div style=\"display: inline-block; background-color: rgba(41, 125, 56, 1); padding: 20px; border: 1px solid white \">". $i . "</div>";
                    } else {
                      echo "<div style=\"display: inline-block; background-color: rgba(141, 8, 9, 1); padding: 20px; border: 1px solid white \">". $i . "</div>";
                    }
                  } else {
                    echo "<div style=\"display: inline-block; background-color: rgba(41, 125, 56, 1); padding: 20px; border: 1px solid white \">". $i . "</div>";
                  }
                }
              } else {
                  for ($i=1; $i<=$kiekis; $i++) {
                  if ($spalvu_pasirinkimas == "rand") {
                    echo "<div style=\"display: inline-block; background-color: rgba(" . rand(0,255) . ", " . rand(0,255) . ", " . rand(0,255) . ", 1); padding: 20px; border: 1px solid white \">". $i . "</div>";
                  } elseif ($spalvu_pasirinkimas == 2) {
                    if ($i % 2 == 0) {
                     echo "<div style=\"display: inline-block; background-color: rgba(41, 125, 56, 1); padding: 20px; border: 1px solid white \">". $i . "</div>";
                    } else {
                      echo "<div style=\"display: inline-block; background-color: rgba(141, 8, 9, 1); padding: 20px; border: 1px solid white \">". $i . "</div>";
                    }
                  } else {
                    echo "<div style=\"display: inline-block; background-color: rgba(41, 125, 56, 1); padding: 20px; border: 1px solid white \">". $i . "</div>";
                  }
                }
              }
            }
            langeliai($langeliu_skaicius, $spalvu_skaicius);
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
