<?php

// les sessions sont des variables superglobales
// $_SESSION

session_start();

$_SESSION["nom"] = "CA";

?>

<html>
<head>
	<title>session</title>
</head>
<body>
	<h1>sessions</h1>

	<p>
		le nom de l'école est : <?php echo($_SESSION["nom"]); ?>
	</p>

	<a href="page1.php" title="page1">page1</a>

</body>
</html>