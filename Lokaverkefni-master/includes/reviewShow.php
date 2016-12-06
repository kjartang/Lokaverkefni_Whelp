<?php
	include "connect.php";
	mb_language('uni');
	mb_internal_encoding('UTF-8');
	 
	$getquery=mysqli_query($conn, "SELECT reviewName, review, reviewDate FROM review ORDER BY reviewId DESC");
	while($rows=mysqli_fetch_assoc($getquery))
	{

	$name=$rows['reviewName'];
	$date=$rows['reviewDate'];
	$comment=$rows['review'];
	echo 'Nafn skrifanda: ' . $name . '<br/> Dagsetnig: <br/>' . $date . '<br/> Ummæli: <br/>' . $comment . '<br/>' . '<br/>' . '<hr size="1"/>'
	;}

?>