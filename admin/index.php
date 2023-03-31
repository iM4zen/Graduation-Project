<?php
// Set the correct password
$correct_password = "mazen";

// Check if the password has been submitted
if(isset($_POST['password'])) {
    $password = $_POST['password'];
    
    // Compare the submitted password with the correct password
    if($password == $correct_password) {
        // Password is correct, redirect to dashboard.php
        header("Location: dashboard.php");
        exit();
    } else {
        // Password is incorrect, display an error message
        echo "Incorrect password!";
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		body {
			background-image: url("1.jpeg");
			background-size: cover;
			background-repeat: no-repeat;
			background-size: revert;
		}
		.container {
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						
					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
