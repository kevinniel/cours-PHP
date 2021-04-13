<?php

// PHPTEST
$mysqli = new mysqli("localhost:8889", "PHPTEST", "PHPTEST", "PHPTEST");

if ($mysqli->connect_errno) {
    printf("Échec de la connexion : %s\n", $mysqli->connect_error);
    exit();
}

if ($result = $mysqli->query("SELECT * FROM toto")) {

	echo("<table border=\"1\"><thead><tr><td>id</td><td>blague</td></tr></thead><tbody>");
	while ($row = $result->fetch_assoc()) {
		echo("<tr>");
		echo("<td>" . $row["id"] . "</td>");
		echo("<td>" . $row["blague"] . "</td>");
		// var_dump($row);
		echo("</tr>");
	}
	echo("</tbody></table>");

 //    /* Libération du jeu de résultats */
 //    $result->close();
}

// ON fait une insertion
$sql = "INSERT INTO toto (blague) VALUES ('keskiestjauneetkiaten')";

if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
