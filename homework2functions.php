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
function spalvinimas($kaina1, $kaina2, $kaina3) {
	if ($kaina1 <= $kaina2 && $kaina1 <= $kaina3) {
		return "green";
	} else {
		return "white";
	}
}
?>