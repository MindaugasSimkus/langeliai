<?php

  function langeliai($kiekis = 100, $spalvu_pasirinkimas) {
      for ($i=1; $i<=$kiekis; $i++) {
      if ($spalvu_pasirinkimas == "rand") {
        echo "<div class=\"blokas\", style=\"background-color: rgba(" . rand(0,255) . ", " . rand(0,255) . ", " . rand(0,255) . ", 1) \">". $i . "</div>";
      } elseif ($spalvu_pasirinkimas == 2) {
        if ($i % 2 == 0) {
         echo "<div class=\"blokas\", style=\" background-color: rgba(41, 125, 56, 1) \">". $i . "</div>";
        } else {
          echo "<div class=\"blokas\", style=\" background-color: rgba(141, 8, 9, 1) \">". $i . "</div>";
        }
      } else {
        echo "<div class=\"blokas\", style=\" background-color: rgba(41, 125, 56, 1) \">". $i . "</div>";
      }
    }
  }

  function get_area($ilgis, $plotis, $gylis) {
    $plyteles  = ($ilgis * $plotis) + 2 * (($ilgis * $gylis) + ($plotis * $gylis));
    return $plyteles;
  }

  function get_feel($temperatura) {
    if ($temperatura > 30) {
      return "karsta";
    } elseif ($temperatura >=15 && $temperatura <=30) {
      return "silta";
    } elseif ($temperatura >=5 && $temperatura <=14) {
      return "vesu";
    } else {
      return "lauke negyvenama";
    }
  }

  function klase($jausmas) {
    if ($jausmas == "karsta") {
      $class = "danger";
      return $class;
    } elseif ($jausmas == "silta") {
      $class = "success";
      return $class;
    } elseif ($jausmas == "vesu") {
      $class = "warning";
      return $class;
    } else {
      $class = "info";
      return $class;
    }
  }


  ?>