<?php

	mb_language('uni');
	mb_internal_encoding('UTF-8');
	 
	$getquery=mysql_query("SELECT review FROM review ORDER BY reviewId DESC");
	while($rows=mysql_fetch_assoc($getquery))
	{

	$name=$rows['name'];
	$comment=$rows['review'];
	echo $name . '<br/>' . '<br/>' . $comment . '<br/>' . '<br/>' . '<hr size="1"/>'
	;}

?>