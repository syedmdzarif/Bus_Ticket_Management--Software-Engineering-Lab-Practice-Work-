<?php

	$ID = $_GET["id"];

	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM ticket_booking WHERE ID=$ID" )

		or die("Can not execute query");

	echo "Record deleted<br>";

	echo "<p><a href=read.php>READ all records</a>";
    echo "<button> <a href = 'index.php'> Home </a> </button>";

?>