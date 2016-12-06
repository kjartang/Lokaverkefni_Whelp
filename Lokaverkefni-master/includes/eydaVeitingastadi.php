<?php
	include "connect.php"

	$id = $_POST['id'];

	$id = mysqli_real_escape_string($conn, $id);

	$result = "DELETE FROM restaurants WHERE id='$id'" or die("Failed to query database ".mysqli_error($conn));

	if ($conn->query($result) === TRUE) {
	    echo "Record deleted successfully";
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
?>