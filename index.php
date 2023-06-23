<?php
	require_once('dbconfig.php');
	$conn = mysqli_connect( HOST, USER, PASS, DB )
		or die("Unable to establish connection");


	$results = mysqli_query( $conn, "SELECT * FROM ticket_booking" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>ID</th> <th>Name</th> <th>Application Date</th> <th>From</th> <th>To</th> <th>Status</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $ID </td>";
		echo "<td> $NAME </td>";
        echo "<td> $APPT_DATE </td>";
		echo "<td> $FROM_LOCATION </td>";
        echo "<td> $TO_LOCATION </td>";
        echo "<td> $STATUS </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<br>";


    echo "<button> <a href = 'booking_input.php'> addBooking </a> </button>";
	echo "<button> <a href = '#'> CancelBooking </a> </button>";

?>