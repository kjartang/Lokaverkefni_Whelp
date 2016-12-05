<?php
if (isset($_POST["eydaVeiting"])) {

	$id = $_POST['id'];

	$id = mysqli_real_escape_string($conn, $id);

	$result = "DELETE FROM restaurants WHERE id = '$id'" or die("Failed to query database ".mysqli_error($conn));

	if ($conn->query($result) === TRUE) {
	    echo "<script type='text/javascript'>alert('Veitingastadur eyddur!')</script>";
	} else {
	    echo "<script type='text/javascript'>alert('Rangar upplýsingar!')</script>";
	}
}
?>