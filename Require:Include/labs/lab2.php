<?php 
	//Onderdeel 1 is te vinden in de body
	
	//Onderdeel 2
	define("twee", "Hello World!");
	
	//Onderdeel 3
	$drie = "Learning PHP";
	$drie = "Hello World!";
	
	//Onderdeel 4
	$hello = "Hello ";
	$world = "World!";

	//Onderdeel 5
	$test = ["Hello ", "World!"];
 ?>

<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>LAB</title>
</head>
<body>
	<h1>
		<?php 
			//Onderdeel 1
			echo "Hello World!";
		 ?>
	</h1>

	<h1>
		<?php 
			//Onderdeel 2
			echo twee;
		 ?>
	</h1>

	<h1>
		<?php 
			//Onderdeel 3
			echo $drie;
		 ?>
	</h1>

	<h1>
		<?php 
			//Onderdeel 4
			echo $hello.$world;
		 ?>
	</h1>

	<h1>
		<?php 
			//Onderdeel 5
			echo implode($test);
		 ?>
	</h1>
</body>
</html>