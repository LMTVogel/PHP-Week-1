<?php 
	$tafels = [3, 5, 8, 12];
 ?>

<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Lab 3b</title>
</head>
<body>
	<?php 
		for ($i=1; $i <= 10; $i++) { 
			echo $i . "*". 6 . "=". $i*6 . "<br>";
		}

		echo "<br>";

		function parameter($cijfer) {
			for ($i=1; $i <= 10; $i++) { 
				echo $i . "*". $cijfer . "=". $i*$cijfer . "<br>";
			}
		}
		parameter(6);

		echo "<br>";

		foreach ($tafels as $getal) {
			for ($a=1; $a <= 10; $a++) { 
				echo $a . "*". $getal . "=". $a*$getal . "<br>";
			}
			echo "<br>";
		}
	 ?>
</body>
</html>