<?php
	include 'connect.php';	
if (isset($_POST["searchit"])) {
		
	$sqli = "SELECT * FROM storedimages WHERE image_path LIKE '%" . $_POST['search'] . "%'";
	$resulti = $conn->query($sqli);
	//$_SESSION["newsession"]= $sqli;

	echo '<div class="row">';

	if ($resulti->num_rows > 0) {
	     // output data of each row
	     while($row = $resulti->fetch_assoc()) {
	     	//$_SESSION["newsession"] = $row["image_path"];
	     echo '
		  <div class="col-md-3">
		    <div class="thumbnail">
		   	 <div id="display">';
	     	echo '<img src="http://tsuts.tskoli.is/2t/2804963169/Lokaverkefni-master'. $row["image_path"] . '" alt="Image not found" style="width:100%">';
	     	echo '<button type="button" class="btn btn-default"><a href="includes/roadhouse.php">Upplýsingar</a></button>
			</div>
		</div>';
	     }
	} else {
	     echo "0 results";
	}
	echo '</div>';
} else {
		$sql = "SELECT image_path FROM storedimages";
			$result = $conn->query($sql);
	echo '<div class="row">';
			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			     echo'<div class="col-md-3">
		    		<div class="thumbnail">
		        		<div class="caption">';
			     	echo '<img src="http://tsuts.tskoli.is/2t/2804963169/Lokaverkefni-master'. $row["image_path"] . '"alt="Image not found" style="width:100%">';
			     	echo '<button type="button" class="btn btn-default"><a href="includes/roadhouse.php">Upplýsingar</a></button>
			     		</div>
					</div>
				</div>';
			     }
			} else {
			     echo "0 results";
			}
			echo '</div>';
}
?>