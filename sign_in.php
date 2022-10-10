<?php 
	session_start();
?>
<?php include_once('inc/conn.php'); ?>
<?php

	if(isset($_POST['submit'])){

		$email = "";
		$password = "";
		$msg = "";

		$email = input_verify($_POST['email']);
		$password = input_verify($_POST['password']);

		$query1 = "SELECT * FROM tbl_user WHERE email = '{$email}' AND password = '{$password}' LIMIT 1";

		$showResult = mysqli_query($conn,$query1);

		if ($showResult) {
			
			if (mysqli_num_rows($showResult) == 1) {
				
				$user = mysqli_fetch_assoc($showResult);
				$_SESSION['User_firstname'] = $user['firstName'];
				$_SESSION['User_lastname'] = $user['lastName'];

				header("Location:index.php");				

			}
			else{

				$msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
					  <strong>Sorry..‼️ </strong> Please Chack Your Email OR password
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					    <span aria-hidden='true'>&times;</span>
					  </button>
					</div>";
				
			}
		}		
	}

	function input_verify($data){

		//For Remove MT Space In User Input
		$data = trim($data);
		
		//Remover Back slash from User Input
		$data = stripcslashes($data);
		
		//Convert Special Chars To Html Entities
		$data = htmlspecialchars($data);

		return $data;
	}

?>

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
						<h4>Sign In From</h4>	
					</div>
					<div class="card-body" id="card-body">
						
						<form action="sign_in.php" method="POST">

							<?php if (!empty($msg)) {
								echo $msg;
							} ?>

							<div class="form-group">
							  <label for="">Email</label>
							  <input type="Email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
							  <small id="helpId" class="text-muted">Enter Your Email</small>
							</div>

							<div class="form-group">
							  <label for="">Password</label>
							  <input type="Password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
							  <small id="helpId" class="text-muted">Enter Your Password</small>
							</div>

					</div>
						<div class="card-footer" id="card-footer">
							<button type="submit" name="submit" class="btn btn-primary">Sign In</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>

</body>
</html>