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
		<style>
			table tr td {padding:10px;}
		
		</style>
        </head>
        

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
	        <div class= "container-fluid">
			     <div class="navbar-header">
				      <a href="profile.php" class="navbar-brand">Nihar Cart</a>			
			
					</div>
					<ul  class="nav navbar-nav nav-stacked">
						<li><a href="profile.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
						<li><a href="profile.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
					</ul>
			</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	
	<div class="container-fluid">
		<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="panel panel-primary">
						<div class="panel-heading"></div>
						<div class="panel-body">
							<h1>Customer Order Detailes</h1>
							<hr/>
							<div class="row">
								<div class="col-md-6" >
									<img style="float:right;" src="images/image.JPEG" class="img-thumbnail">
								</div>
								<div class="col-md-6">
									<table>
										<tr><td>Product Name</td><td><b> Something</b></td></tr>
										<tr><td>Product price</td><td><b> Something</b></td></tr>
										<tr><td>Quantity</td><td><b> Something</b></td></tr>
										<tr><td>Payment</td><td><b> Something</b></td></tr>
										<tr><td>Transaction Id</td><td><b> Something</b></td></tr>
									</table>
								</div>
							</div>
						</div>
						<div class="panel-footer"></div>
					</div>
				</div>
				<div class="col-md-2"></div>
		</div>
	</div>
			
</body>     

</html>