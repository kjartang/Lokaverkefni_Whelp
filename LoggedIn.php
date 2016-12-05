<?php include "includes/connect.php" ?>
<?php session_start() ?>
<!DOCTYPE html>
<html>
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
		      <a class="navbar-brand" href="LoggedIn.php">Whelp</a>
		      <a class="navbar-brand" href="LoggedIn.php"></a>
		    </div>
		 	
		 	<form action="includes/SearchBar.php" method="POST" class="navbar-form navbar-left">
		       <div class="form-group">
				<input type="text" placeholder="Veitingastadir..." name="search" class="form-control" maxlength="30" required onfocus="this.value=''">
				<input type="submit" class="btn btn-default" value="Leita"/>
			  </div>
			</form>
			<form action="includes/Utskra.php" name="Utskra" method="POST" class="form-signin">	
				<ul class="nav navbar-nav navbar-right">
				<?php echo $_SESSION['username']; ?>
					<button name="Utskra" class="btn btn-primary btn-lg">Utskra</button>
				</ul>
			</form>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<?php 
			//include "includes/reviewShow.php";
			include "includes/veitingastadir.php";
			include "includes/reviewSubmit.php";
		?>

		<script src="js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery.js"></script>
	</body>
</html>