<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="plugin/bootstrap.min.css">
	<script src="plugin/jquery.min.js"></script>
	<script src="plugin/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sing_up.css">
	
	<title>King Amda</title>
</head>
<body>

	<?php include_once('inc/navbar.php') ?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="card mt-4">
					<div class="card-header" id="card-header">
						<h4>Sign Up From</h4>	
					</div>
					<div class="card-body" id="card-body">
						
						<form action="index.php">

							<div class="form-group">
							  <label for="">First Name</label>
							  <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
							  <small id="helpId" class="text-muted">Enter Your First Name</small>
							</div>

							<div class="form-group">
							  <label for="">Last Name</label>
							  <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
							  <small id="helpId" class="text-muted">Enter Your Last Name</small>
							</div>

							<div class="form-group">
							  <label for="">Email</label>
							  <input type="Email" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
							  <small id="helpId" class="text-muted">Enter Your Email</small>
							</div>

							<div class="form-group">
							  <label for="">Password</label>
							  <input type="Password" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
							  <small id="helpId" class="text-muted">Creat Your Password</small>
							</div>

					</div>
						<div class="card-footer" id="card-footer">
							<button type="submit" class="btn btn-primary">Sign Up</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>

</body>
</html>