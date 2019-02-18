<?php 
	define("gameType", "Yathzee"); //Yathzee, Monopoly, Schaken.
	define("JaNee", true); //True, False.
	define("Number", 4); //Cijfer.

	if (gameType == "Yathzee") {
		if (JaNee == true) {
			if (Number >15 && Number <30) {
				echo "Je wilt Yatzhee spelen want je hebt tussen de 15 en 30 minuten tijd.";
			}elseif (Number <15 | Number >30) {
				echo "Je wilt Yathzee spelen want dat vind je gewoon leuk.";
			}
		}elseif (JaNee == false) {
			if (Number >100) {
				echo "Je wilt geen Yathzee spelen want je wilt meer dan 100x met een dobbelsteen gooien.";
			}elseif (Number <=100) {
				echo "Je wilt geen Yathzee spelen want je wilt minder dan 100 punten halen";
			}
		}
	}elseif (gameType == "Monopoly") {
		if (JaNee == true) {
			if (Number == 1) {
				echo "Je wilt Monopoly spelen want je hebt aan 1 spelletje genoeg.";
			}elseif (Number >1) {
				echo "Je wilt Monopoly spelen want je houd er van om iedereen blut te maken.";
			}
		}elseif (JaNee == false) {
			if (Number ==2 | Number >120) {
				echo "Je wilt Monopoly niet spelen want je hebt geen zin in een spel van twee uur.";
			}else {
				echo "Je wilt Monopoly niet spelen want je houd niet van hotels.";
			}
		}
	}elseif (gameType == "Schaken") {
		if (JaNee == true) {
			if (Number ==2) {
				echo "Je wilt Schaken want je vindt zwart en wit leuk.";
			}elseif (Number <>2) {
				echo "Je wilt Schaken want je denkt slimmer dan mij te zijn.";
			}
		}elseif (JaNee == false) {
			if (Number == -1) {
				echo "Je wilt echt niet Schaken.";
			}else {
				echo "Je wilt gewoon niet Schaken.";
			}
		}
	}
 ?>