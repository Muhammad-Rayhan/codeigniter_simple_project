<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-8">
				<div class="card">
					<div class="card-header" style="padding: 0.50rem 0.50rem; display: flex; justify-content: space-between;">
						<h5>Login</h5>
						<button type="button" class="btn btn-primary px-4 py-1">ADD</button>
					</div>
					<div class="card-body">
						<form action="authenticationController/check" method="post">
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<lable class="form-lable">Email: </lable>
										<input type="email" class="form-control" placeholder="Enter your registered email" name="email">
										<span class="test-danger"><?php echo form_error('email') ?></span>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<lable class="form-lable">Password: </lable>
										<input type="password" class="form-control" placeholder="Enter your registered password" name="password">
										<span class="test-danger"><?php echo form_error('password') ?></span>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<button class="btn btn-success w-100">Login</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>