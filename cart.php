<?php


session_start();
if(!isset($_SESSION["uid"])){
	
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
        
		<head>


        <meta charset="UTF-8">
		<title> Nihar Cart</title>

		
	
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
       <script src="js/jquery-2.2.4.min.js"></script>
	   <script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>

        </head>
        

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
	        <div class= "container-fluid">
			     <div class="navbar-header">
				      <a href="index.php" class="navbar-brand">Nihar Cart</a>			
			
			     </div>
				 <ul  class="nav navbar-nav nav-stacked">
				      <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					  <li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
				</ul>

			</div>
    </div>			
		<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8" id="cart_msg">
					<!-- cart message -->
				</div>
				<div class="col-md-2"></div>
			
			</div>
		
		<div class="row">
			
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Check out</div>
						<div class="panel-body">
						<div class="row">
							<div class="col-md-2"><b>Action</b></div>
							<div class="col-md-2"><b>Product Image</b></div>
							<div class="col-md-2"><b>Product Name</b></div>
							<div class="col-md-2"><b>Quantity</b></div>
							<div class="col-md-2"><b>Product Price in $</b></div>
							<div class="col-md-2"><b>Total price in $</b></div>
							</div>
							<div id="cart_checkout"></div>
							<!--<div class="row">
							<div class="col-md-2">
								<div class=" btn-group">
									<a href="#" class="btn btn-danger" ><span class="glyphicon glyphicon-trash"></span></a>
									<a href="#" class="btn btn-primary" ><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src = 'images/images.JPEG'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type ='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type ='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type ='text' class='form-control' value='5000' disabled></div>
						</div>-->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Grand TOTAL $500000</b>
							</div>
						</div>-->
						
					</div>
					<div class="panel-footer">  </div>
			<div class="col-md-2"></div>
		</div>
	</div>			
</body>
</html>