<?php
function turis($ilgis, $plotis, $gylis) {
	$turis = $ilgis*$plotis*$gylis;
	return $turis;
}

function autocisternos($turis, $autocis) {
	$autocisternu_kiekis = ceil($turis/$autocis);
	return $autocisternu_kiekis;
}
function kaina($autocis, $autocisternu_kiekis) {
	$kaina = round($autocisternu_kiekis*($autocis*0.75+50));
	return $kaina;
}
function spalvinimas($klase1, $klase2, $klase3, $kaina1, $kaina2, $kaina3) {
	if ($kaina1 < $kaina2 && $kaina1 < $kaina3) {
		$klase1 = "green";
		return $klase1;
	} elseif ($kaina2 < $kaina1 && $kaina2 < $kaina3) {
		$klase2 = "green";
		return $klase2;
	} elseif ($kaina3 < $kaina1 && $kaina3 < $kaina2) {
		$klase3 = "green";
		return $klase3;

	}
}

?>