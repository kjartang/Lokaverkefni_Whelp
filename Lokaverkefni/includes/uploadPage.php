<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Whelp</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" media="all" href="../css/bootstrap.min.css">
 	   	
	    <!-- Owl Stylesheets -->
	    <link rel="stylesheet" href="../owlcarousel/assets/owl.carousel.min.css">
	    <link rel="stylesheet" href="../owlcarousel/assets/owl.theme.default.min.css">

 	   	<!-- Costum made -->
 	   	<link rel="stylesheet" type="text/css" media="all" href="../css/costum.css">
		
		<!-- Special font -->
		<link href="http://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet" type="text/css" />

		<!-- javascript -->
		<script src="../vendors/jquery.min.js"></script>
	    <script src="../owlcarousel/owl.carousel.js"></script>

	</head>

	<body>	
		<!--Font setting fyrir headerinn -->
		<style>
			nav {
				font-family: 'Shrikhand';
				font-size: 15px;
			}
		</style>

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
                            	<div>Nafn:</div>
                                <label for="name" class="sr-only">Nafn</label>
                                <input name="name" type="text" id="name" class="form-control" placeholder="Dæmi: Pétur" required autofocus>
                                <div>Notendanafn:</div>
                                <label for="username" class="sr-only">Notendanafn</label>
                                <input name="username" type="text" id="username" class="form-control" placeholder="Dæmi: Petur1" required autofocus>
                                <div>Netfang:</div>
                                <label for="inputEmail" class="sr-only">Netfang</label>
                                <input name="email" type="text" id="email" class="form-control" placeholder="Petur1@hotmail.com" required autofocus>
                                <div>Lykilorð:</div>
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
		                	<label for="inputUsername" class="sr-only">Notendanafn</label>
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

	    <!--  Myndaramminn -->
	    <section id="demos">
	    	<div class="container-fluid">
		      <div class="row">
		        <div class="col-md-12">
		          <div class="owl-carousel owl-theme">
			            <img class="owl-lazy" data-src="../images/ThisIsSubway.png" data-src-retina="images/owl2.jpg1-retina" alt="">
			            <img class="owl-lazy" data-src="../images/KfcLogoMan.png" data-src-retina="images/owl2.jpg2-retina" alt="">
			            <img class="owl-lazy" data-src="../images/DominosLogo.jpg" alt="">
			            <img class="owl-lazy" data-src="../images/owl4.jpg" alt="">
			            <img class="owl-lazy" data-src="../images/owl5.jpg" alt="">
			            <img class="owl-lazy" data-src="../images/owl6.jpg" alt="">
			            <img class="owl-lazy" data-src="../images/owl7.jpg" alt="">
			            <img class="owl-lazy" data-src="../images/owl8.jpg" alt="">
			            <img class="owl-lazy" data-src="../images/owl1.jpg" alt="">
			            <img class="owl-lazy" data-src="../images/owl2.jpg" alt="">
			            <img class="owl-lazy" data-src="../images/owl3.jpg" alt="">
		          </div>
		          <script>
		            jQuery(document).ready(function($) {
		              $('.owl-carousel').owlCarousel({
		                items: 6,
		                lazyLoad: true,
		                loop: true,
		                margin: 10
		              });
		            });
		          </script>
		        </div>
		      </div>
	    	</div>
	    </section>

	   <!-- Upload form -->
	  <form action="uploadImage.php" method="post" enctype="multipart/form-data">
	    Select image to upload:
	    <input type="file" name="fileToUpload" id="fileToUpload">
	    <input type="submit" value="Upload Image" name="submit">
	  </form>


		<!-- Libraries -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/owl.carousel.js"></script> 
		<script src="../js/bootstrap-collapse.js"></script>
    	<script src="../js/bootstrap-transition.js"></script>
    	<script src="../js/bootstrap-tab.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
		<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
		<script type="../js/costum.js"></script>

		<!-- Vendors -->
	    <script src="../vendors/highlight.js"></script>
	    <script src="../js/app.js"></script>

	</body>
</html>