<?php

session_start();

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

	<a href="page2.php" title="page2">page2</a>

</body>
</html>

<?php

	session_destroy();

?>