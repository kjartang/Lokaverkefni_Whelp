<?php include "connect.php" ?>
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
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 	    <script type="text/javascript" language="javascript" charset="utf-8" src="js/bootstrap.min.js"></script>
	</head>

	<body>	
		<!--Font setting fyrir headerinn -->
		<style>
		nav {
			font-family: 'Shrikhand';
			font-size: 15px;
		}
		</style>


		<!-- Installation fyrir browser: https://github.com/adampresley/sublime-view-in-browser/wiki/Getting-Started -->
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
		      <a class="navbar-brand" href="Frontpage.php">Whelp</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Um Okkur<span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Skrifa umsögn</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="	" aria-haspopup="true" aria-expanded="false">Bæjarfélög<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		      <form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Veitingastadur..">
		        </div>
		        <button type="submit" class="btn btn-default">Leita</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		            Innskrá
		        </button>
		        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		          <div class="modal-dialog">
		            <div class="modal-content">
		              <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                <h4 class="modal-title" id="myModalLabel">Innskráning</h4>
		              </div>
		              <div class="modal-body">
		                <form class="form-signin">
		                	<label for="inputEmail" class="sr-only">Netfang</label>
		                	<input type="email" id="inputEmail" class="form-control" placeholder="Netfang" required autofocus>
		                	<label for="inputPassword" class="sr-only">Lykilorð</label>
		                	<input type="password" id="inputPassword" class="form-control" placeholder="Lykilorð" required="10">
		                	<button class="btn btn-lg btn-primary btn-block" type="submit">Innskrá</button>
		                </form>
		              </div>
		              <div class="modal-footer">
		                <button type="button" class="btn btn-default" data-dismiss="modal">Loka</button>
		                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
				           Nýskrá
				        </button>
				      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			          <div class="modal-dialog">
			            <div class="modal-content">
			              <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 class="modal-title" id="myModalLabel">Nýskráning</h4>
			              </div>
			              <div class="modal-body">
			                <form class="form-signin">
			                	<label for="inputEmail" class="sr-only">Netfang</label>
			                	<input type="email" id="inputEmail" class="form-control" placeholder="Netfang" required autofocus>
			                	<label for="inputPassword" class="sr-only">Lykilorð</label>
			                	<input type="password" id="inputPassword" class="form-control" placeholder="Lykilorð" required="10">
			                	<button class="btn btn-lg btn-primary btn-block" type="submit">Innskrá</button>
			                </form>
			              </div>
			              <div class="modal-footer">
			                <button type="button" class="btn btn-default" data-dismiss="modal">Loka</button>

		              </div>
		            </div>
		          </div>
		        </div>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		
		<!-- Small modal -->
    

		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="//code.jquery.com/jquery.js"></script>
	</body>
</html>