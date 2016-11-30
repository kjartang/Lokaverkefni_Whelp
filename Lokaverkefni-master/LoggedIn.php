<?php include "includes/connect.php" ?>
<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Whelp</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
 		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap-responsive.min.css">
 	    	<link rel="stylesheet" type="text/css" media="all" href="css/global.css">
		<link href="http://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>

	<body>	
		<!--Font setting fyrir headerinn -->
		<style>
		nav {
			font-family: 'Shrikhand';
			font-size: 15px;
		}
		</style>

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
		      <a class="navbar-brand" href="LoggedIn.php"><?php echo $_SESSION['username']; ?></a>
		    </div>
		 	
		 	<form action="includes/SearchBar.php" method="POST" class="navbar-form navbar-left">
		       <div class="form-group">
				<input type="text" value="Veitingastadir.." name="search" class="form-control" maxlength="30" onfocus="this.value=''">
				<input type="submit" class="btn btn-default" value="Leita"/>
			  </div>
			</form>
			<form action="includes/Utskra.php" name="Utskra" method="POST" class="form-signin">	
				<ul class="nav navbar-nav navbar-right">
					<button name="Utskra" class="btn btn-primary btn-lg">Utskra</button>
				</ul>
			</form>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<?php include "includes/veitingastadir.php" ?>
		<script src="js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery.js"></script>
	</body>
</html>