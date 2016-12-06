<?php

	 include "connect.php";
	 if (isset($_POST["review"])) {
	 	$review = $_POST['review'];
	 	$reviewName = $_SESSION['username'];

	 	$review = mysqli_real_escape_string($conn, $review);

		$result = "INSERT INTO review (review, reviewName) VALUES('$review', '$reviewName')" or die("Failed to query database ".mysqli_error($conn));

		if ($conn->query($result) === TRUE) {
		    header("Location: ../LoggedIn.php");
		} else {
		    echo "Error: " . $result . "<br>" . $conn->error;
		}
	}
?>


<div class="container">
	<form action="" method="POST">
			Leave a Review: </br>
			<textarea class="form-control" rows="10" id="review" name="review"></textarea></br>
			<input class="btn btn-lg btn-primary" type="submit">
	</form>
</div>