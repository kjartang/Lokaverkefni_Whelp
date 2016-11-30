<?php
	 include "connect.php";
	 if (isset($_POST["review"])) {
	 	$review = $_POST['review'];

	 	$review = mysqli_real_escape_string($conn, $review);

		$result = "INSERT INTO review (review) VALUES('$review')" or die("Failed to query database ".mysqli_error($conn));

		if ($conn->query($result) === TRUE) {
		    header("Location: ../FrontPage.php");
		} else {
		    echo "Error: " . $result . "<br>" . $conn->error;
		}
	}
?>


<div class="reviewBox">
	<form action="" method="POST">
			Leave a Review: </br>
			<textarea class="form-control" rows="10" id="comment"></textarea></br>
			<input class="btn btn-lg btn-primary" type="submit" name="review" value="Post Review">
	</form>
</div>