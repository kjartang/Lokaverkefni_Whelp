<?php 
include "includes/connect.php";
include "includes/nyskra.php";
include "includes/innskra.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Whelp</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
 	   	
	    <!-- Owl Stylesheets -->
	    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
	    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">

 	   	<!-- Costum made -->
 	   	<link rel="stylesheet" type="text/css" media="all" href="css/costum.css">
		
		<!-- Special font -->
		<link href="http://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet" type="text/css" />

		<!-- javascript -->
		<script src="vendors/jquery.min.js"></script>
	    <script src="owlcarousel/owl.carousel.js"></script>

	</head>

	<body>	
		<!--Font setting fyrir headerinn -->

		<!-- Navigation barinn. -->
		<nav class="navbar-inverse">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="Frontpage.php">Whelp</a>
		    </div>
		 

		      </ul>

		      <form action="" method="POST" class="navbar-form navbar-left">
		       <div class="form-group">
				<input type="text" placeholder="Veitingastadir..." name="search" class="form-control" required maxlength="30" onfocus="this.value=''">
				<input name="searchit" id="searchit" type="submit" class="btn btn-default" value="Leita"/>
			  </div>
			 </form>	

		      <ul class="nav navbar-nav navbar-right">
		      	<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">Nýskrá</button>
		      	     <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Nýskráning</h4>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST" class="form-signin">
                            	<div>Nafn:</div>
                                <label for="name" class="sr-only">Nafn</label>
                                <input name="name" type="text" id="name" class="form-control" required autofocus>
                                <div>Notendanafn:</div>
                                <label for="username" class="sr-only">Notendanafn</label>
                                <input name="username" type="text" id="username" class="form-control" required autofocus>
                                <div>Netfang:</div>
                                <label for="inputEmail" class="sr-only">Netfang</label>
                                <input name="email" type="email" id="email" class="form-control" placeholder="Dæmi@gmail.com" required autofocus>
                                <div>Lykilorð:</div>
                                <label for="inputPassword" class="sr-only">Lykilorð</label>
                                <input name="password" type="password" id="password" class="form-control" placeholder="**********" required="10">
                                <button class="btn btn-lg btn-primary btn-block" name="nyskra" id="nyskra" type="submit">Innskrá</button>       
                            </form>
                           <div class="modal-footer">
				              <div class="modal-footer">
				                <button type="button" class="btn btn-default" data-dismiss="modal">Loka</button>
				              </div>
		              	  </div>
                          </div>
                    </div>
                  </div>
                </div>
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Innskrá</button>
		        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		          <div class="modal-dialog">
		            <div class="modal-content">
		              <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                <h4 class="modal-title" id="myModalLabel">Innskráning</h4>
		              </div>
		              <div class="modal-body">
		                <form action="" method="POST" class="form-signin">
		                	<label for="inputUsername" class="sr-only">Notendanafn</label>
		                	<input name="username" type="text" id="inputUsername" class="form-control" placeholder="Notendanafn" required autofocus>
		                	<label for="inputPassword" class="sr-only">Lykilorð</label>
		                	<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Lykilorð" required="10">
		                	<button class="btn btn-lg btn-primary btn-block" name="innskra" id"innskra" type="submit">Innskrá</button>
		                </form>
		              </div>
		              <div class="modal-footer">
			              <div class="modal-footer">
			                <button type="button" class="btn btn-default" data-dismiss="modal">Loka</button>
			              </div>
		              </div>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

	   	<div class="page-header">
	   	<h3 class="centerIt">Veitingastaðir:</h3>
	   	</div>
		   <?php
		    include "includes/searchBar.php";
				//echo '<img src="http://tsuts.tskoli.is/2t/2804963169/Lokaverkefni-master'. $_SESSION["newsession"] . '"alt="Image not found">';
				//echo "<br> Restaurants: ". $_SESSION["namesession"]. "<br>";
		    ?>
		
		<!-- Libraries -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.js"></script> 
		<script src="js/bootstrap-collapse.js"></script>
    	<script src="js/bootstrap-transition.js"></script>
    	<script src="js/bootstrap-tab.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
		<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
		<script type="js/costum.js"></script>

		<!-- Vendors -->
	    <script src="vendors/highlight.js"></script>
	    <script src="js/app.js"></script>
	</body>
</html>