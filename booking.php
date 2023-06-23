<?php

	$name = $_GET["name"];
	$date = $_GET["date"];
    $from = $_GET["from"];
    $to = $_GET["to"];



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO ticket_booking VALUES ( '', '$name', '$date', '$from', '$to' )" )

		or die("Can not execute query");


?>