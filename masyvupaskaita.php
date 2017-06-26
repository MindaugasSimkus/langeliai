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
             // for ($u=1; $u<=10; $u++) {
                //$ats = $u*3;
                //$txt = sprintf("3 kart %d yra %d. <br/>",$u , $ats);
               // echo $txt;
             // }

              //masyvai
            //  $users1 = [];
            //  $users2 = array();
              //indexed
             // $masyvas1 = [99, 10, 55, 14];
             // $masyvas2 = ['Alfa', '15min', 'delfi', 'Lrytas'];
              //$viena_reiksme = $masyvas1[0];
             // $delfis = $masyvas2[2];
              //for ($i=0; $i <= count($masyvas2) -1 ; $i++) { 
              //  echo $masyvas2[$i] . "<br/>";
              //} // for veikia greiciau nei foreach
              //foreach ($masyvas1 as $skaiciai) {
                //echo $skaiciai . "<br/>";
              //}
              //echo $skaiciai; duos klaida, nes echo nespausdina skaiciu
              //echo "<br/><br/>";
              //print_r($skaiciai);
              //echo "<br/><br/>";
              //var_dump($skaiciai);
              //echo "<br/><br/>";
              //var_export($skaiciai);
              //$skaiciai[0] = 11;
              //print_r($skaiciai);

              //for ($i=0; $i < count($skaiciai) ; $i++) { 
               //echo "Reiksme " . $skaiciai[$i] . "<br/>";
              //}
              
              //foreach ($skaiciai as $skaicius) {
                //$skaicius = $skaicius *2;
               // echo "Reiksme " . $skaicius . "<br/>";
               //} nepavyks, issiaiskint kodel
              $skaiciai = [22, 33, 44, 55, 66];

              for ($i=0; $i < count($skaiciai); $i++) { 
                $skaiciai[$i] = $skaiciai[$i]*2;
                echo "<br/> Reiksme " . $skaiciai[$i] ;
              }

              function spausdinti($masyvas) {
                foreach ($masyvas as $elementas) {
                echo "<br/> Reiksme " . $elementas;
               }
              }

              spausdinti($skaiciai);


              //$tekstas = "Siandien nuostabi Diena."
              //strlen("1234567"); //paskaiciuoja kiek simboliu
              //strpos ($tekstas, "nuostabi"); //9

              $gerimai = ["Vanduo", "Sultys", "Alus", "Vodka", "Tekila", "Arbata", "Kava"];

              
              function listas($masyvas) {
                
              
                  echo "<ul>";
                  for ($i=0; $i < count($masyvas) ; $i++) { 
                    echo "<li>" . strtolower($masyvas[$i]) . "</li>";
                    }
                   echo "</ul>";
                  }
              


              listas($gerimai);

              function bet_koks($masyvas) {
                $kazkas = rand(0, count($masyvas)-1);
                echo sprintf("Mano megstamiausias gerimas %s", $masyvas[$kazkas]);
              }

              bet_koks($gerimai);

              //rimtesni masyvai (asociatyvus)

              $users = [];

              $user1 = [
              "Name" => "Mindaugas", 
              "Surname" => "Simkus",
              "Age" => 2,
              "Phone" => "8641*1767",
              ];

              $user2 = [
              "Name" => "Petras", 
              "Surname" => "Lopeta",
              "Age" => 16,
              "Phone" => "8681*8867",
              ];

              array_push($users, $user1, $user2);

              echo "<br/>" . $user1["Phone"] . "<br/>";

              echo "<br/>" . $users[0]["Name"] . "<br/>";

              foreach ($users as $user) {
                echo "<br/>" . $user["Name"] . " " . $user["Surname"] . "<br/>";
              }

              $sudetys = [
              "Blynai" => ["Miltai" => 250, "Pienas" => 100, "Druska" => 2],
              "Arbata" => ["Vanduo" => 100, "Arbata" => 100]
              ];
              //echo "<br/>" . $sudetys["Blynai"]["Pienas"] . "<br/>";

              foreach ($sudetys["Blynai"] as $patiekalas) {
                echo "<br/>" . $patiekalas . "<br/>";
              }

              foreach ($sudetys["Blynai"] as $produktas => $kiekis) {
                echo "<br/> Produktas: " . $produktas . "- " . $kiekis . " gr.<br/>";
              }
              $gerimai = ["Vanduo", "Sultys", "Alus", "Vodka", "Tekila", "Arbata", "Kava"];
              $sweets = ["Chocolate", "Candy"];

              $some_drinks = array_slice($gerimai, 1, 3); //ides nuo index 1, 3 elementus i kintamaji
              $merged = array_merge($gerimai, $sweets);

              $imploded = implode(",", $gerimai); //sujungia visus kintamuosius atskiriant kableliais
              $exploded = explode(" ", "Man patinka arbata"); // issaugo i masyva elementus skiriamus tarpu
              print_r($exploded);
              sort($masyvas); //surusiuoja pagal dydi, pakeicia raktus
              asort($masyvas); //surusiuoja bet nepakeicia raktu
              shuffle($masyvas); //sumaiso vietomis nepakeciant raktu


              


            ?>
            </pre>
        </div>
      </div>
    </div>
  </body>
</html>
