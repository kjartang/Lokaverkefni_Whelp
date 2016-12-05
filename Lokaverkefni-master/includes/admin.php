<?php 
include "connect.php"; 
include "uploadRestaurant.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Whelp</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" media="all" href="../css/bootstrap.min.css">
		
		<!-- Special font -->
		<link href="http://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" media="all" href="../css/costum.css">
		<!-- javascript -->
		<script src="../vendors/jquery.min.js"></script>
	</head>

	<body>	

		<!-- Navigation barinn. -->
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="../Frontpage.php">Whelp</a>
		    </div>
		 

		      </ul>

		      <form action="includes/SearchBar.php" method="POST" class="navbar-form navbar-left">
		       <div class="form-group">
				<input type="text" placeholder="Veitingastadir..." name="search" class="form-control" maxlength="30" onfocus="this.value=''">
				<input type="submit" class="btn btn-default" value="Leita"/>
			  </div>
			 </form>
			 <form action="Utskra.php" name="Utskra" method="POST" class="form-signin">	
				<ul class="nav navbar-nav navbar-right">
					<button name="Utskra" class="btn btn-primary btn-lg">Útskra</button>
				</ul>
			</form>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<div class="container">
			<div class="page-header">
				<h2>Setja inn veitingastað</h2>
			</div>
		  <form action="uploadRestaurant.php" method="post">
		    <div class="form-group row">
		      <label for="inputName" class="col-sm-2 col-form-label">Nafn</label>
		      <div class="col-sm-10">
		        <input type="text" class="form-control" id="name" name="name" required>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="inputLocation" class="col-sm-2 col-form-label">Staðsetning</label>
		      <div class="col-sm-10">
		        <input type="text" class="form-control" id="location" name="location" required>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="inputOpen" class="col-sm-2 col-form-label">Opnunartími</label>
		      <div class="col-sm-10">
		        <input type="text" class="form-control" id="open" name="open" placeholder="12:00 - 20:00" required>
		      </div>
		    </div>
		    <div class="form-group row">
		      <div class="offset-sm-2 col-sm-10">
		        <button name="uploadVeitingastad" id="uploadVeitingastad" type="submit" class="btn btn-primary">Setja inn</button>
		      </div>
		    </div>
		  </form>
		   <!-- Upload form -->
		  <form action="uploadImage.php" method="post" enctype="multipart/form-data">
		    Select image to upload:
		    <input type="file" class="btn btn-default btn-file" name="fileToUpload" id="fileToUpload">
		    <input type="submit" class="btn btn-primary" value="Upload Image" name="submit">
		  </form>

		</div>

		<div class="container">
			<form action="eydaVeitingastadi.php" method="post">
			<div class="page-header">
				<h2>Eyða veitingastaði</h2>
				<?php include "adminVeitingastadir.php" ?>
			</div>
			<div class="form-group row">
		      <div class="offset-sm-2 col-sm-10">
		        <button type="submit" name="eyða" class="btn btn-primary">Eyða</button>
		      </div>
		    </div>
		    </form>
		</div>

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