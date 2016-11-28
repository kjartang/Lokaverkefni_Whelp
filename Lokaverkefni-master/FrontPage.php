<?php include "includes/connect.php" ?>
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
		        <span class=s"icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="Frontpage.php">Whelp</a>
		    </div>
		 

		      </ul>

		      <form action="includes/SearchBar.php" method="POST" class="navbar-form navbar-left">
		       <div class="form-group">
				<input type="text" value="Veitingastadir.." name="search" class="form-control" maxlength="30" onfocus="this.value=''">
				<input type="submit" class="btn btn-default" value="Leita"/>
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
                            <form action="includes/nyskra.php" method="POST" class="form-signin">
                                <label for="name" class="sr-only">Nafn</label>
                                <input name="name" type="text" id="name" class="form-control" placeholder="Nafn" required autofocus>
                                <label for="username" class="sr-only">Notendanafn</label>
                                <input name="username" type="text" id="username" class="form-control" placeholder="NotendaNafn" required autofocus>
                                <label for="inputEmail" class="sr-only">Netfang</label>
                                <input name="email" type="text" id="email" class="form-control" placeholder="Netfang" required autofocus>
                                <label for="inputPassword" class="sr-only">Lykilorð</label>
                                <input name="password" type="password" id="password" class="form-control" placeholder="Lykilorð" required="10">
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Innskrá</button>       
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
		                <form action="includes/innskra.php" method="POST" class="form-signin">
		                	<label for="inputEmail" class="sr-only">Netfang</label>
		                	<input name="username" type="username" id="inputUsername" class="form-control" placeholder="Notendanafn" required autofocus>
		                	<label for="inputPassword" class="sr-only">Lykilorð</label>
		                	<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Lykilorð" required="10">
		                	<button class="btn btn-lg btn-primary btn-block" type="submit">Innskrá</button>
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
		<div></div>
		
		<?php include "includes/veitingastadir.php" ?>
		<script src="js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery.js"></script>
	</body>
</html>