<html>
<head>
	<title>cours php</title>
</head>
<body>
	<h1>cours php</h1>
	<?php
		// ceci est un commentaire
		$maVariable = "toto";
	?>
	<span>le contenu de ma variable est : <?php print($maVariable); ?></span>
	<h2>Les tableaux</h2>
	<h3>unidimensionnels</h3>
	<?php
		$tableau1 = [
			"a",
			"b",
			"c",
			"d"
		];
	?>
	<span>Mon tableau contient : </span><br>
	<pre>
		<code>
			<?php
				var_dump($tableau1);
			?>
		</code>
	</pre>
	<span>Affichage avec une boucle</span><br>
	<?php
		foreach($tableau1 as $case) {
			echo($case) . "<br>";
		}
	?>
	<span>Clés / valeurs</span>
	<?php
		$tableau2 = [
			"a" => "tata",
			"b" => "tbtb",
			"c" => "tctc",
			"d" => "tdtd"
		];
	?>
	<span>Mon tableau contient : </span><br>
	<pre>
		<code>
			<?php
				var_dump($tableau2);
			?>
		</code>
	</pre>
	<?php
		foreach($tableau2 as $key => $case) {
			echo($key . " => " . $case) . "<br>";
		}
	?>
	<h3>multidimensionnels</h3>
	<?php
		$tableau3 = [
			["a", "a", "a"],
			["b"]
		];
	?>
	<pre>
		<code>
			<?php
				var_dump($tableau3);
			?>
		</code>
	</pre>
	<span>avec un foreach : </span><br>
	<?php
		foreach($tableau3 as $case) {
			foreach($case as $subcase) {
				echo($subcase) . "<br>";
			}
		}
	?>
</body>
</html>