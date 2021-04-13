<?php

echo("get.php");

// Superglobales
// $_GET
// $_POST

echo("<br>");
echo("<br>");
var_dump($_POST);
echo("<br>");
echo("<br>");
// echo("<br>");

// http://localhost/.../get.php?nom=toto&famille=debilos
// var_dump($_GET);

// Requêtes HTTP
// GET : appel d'une page via URL en mode "récupération d'informations"
// POST : envoie d'informations sur une URL
// PUT : similaire au POST, mais dans une sémantique de modification
// DELETE : similaire au POST, mais dans une sémantique de suppression

$mysqli = new mysqli("localhost:8889", "PHPTEST", "PHPTEST", "PHPTEST");

if ($mysqli->connect_errno) {
    printf("Échec de la connexion : %s\n", $mysqli->connect_error);
    exit();
}

function insertJoke($mysqli, $joke) {
	$sql = "INSERT INTO toto (blague) VALUES ('".$joke."')";

	if ($mysqli->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $mysqli->error;
	}
}

function getJokes($mysqli) {
	$jokes = [];
	if ($result = $mysqli->query("SELECT * FROM toto")) {
		while ($row = $result->fetch_assoc()) {
			$jokes[] = $row["blague"];
		}
	    $result->close();
	}
	return $jokes;
}

// On gère si le formulaire à été envoyé
if ( !is_null($_POST) && !empty($_POST) ) {
	insertJoke($mysqli, $_POST["joke"]);
}

?>
<html>
<head>
	<title>test</title>
</head>
<body>
	<div>
		<?php if(!is_null($_GET["nom"])): ?>
			<p>Salut <?php echo($_GET["nom"]); ?> !</p>
		<?php endif; ?>
		<a href="?nom=toto" title="toto">toto</a>
		<a href="?nom=tata" title="tata">tata</a>
		<a href="?nom=tutu" title="tutu">tutu</a>
		<a href="" title="ICI">ICI</a>
	</div>

	<div>
		<h2>Liste des blagues</h2>
		<?php
			$jokes = getJokes($mysqli);
		?>
		<ul>
			<?php foreach($jokes as $joke): ?>
				<li>
					<?php echo ($joke); ?>
				</li>
			<?php endforeach; ?>
		</ul>

		<h2>ajouter une blague</h2>
		<form action="" method="POST">
			<input type="text" name="joke">
			<button type="submit">Ajouter la blague</button>
		</form>

	</div>

</body>
</html>