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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color: #6d9ac4;
		}

		.middle-content {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 100%;
			/* height: 300px; */
		}

		.hr {
			position: relative;
		}

		.or-content {
			width: 30px;
			height: 26px;
			border: 1px solid #ced4da;
			background-color: #fff;
			border-radius: 5px;
			display: flex;
			justify-content: center;
			align-items: center;
			position: absolute;
			top: 71%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
	</style>
</head>

<body>
	<div class="middle-content">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-5 rounded border px-3 py-3" style="background-color: #fff;">
					<form action="<?= base_url('dashboard')?>" method="post">
						<h4 class="mb-4">LOGIN</h4>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
						</div>
						<!--Use for email validation.-->
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" name="password">
						</div>
						<!--Use for password validation.-->
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Remember me?</label>
						</div>
						<div class="mb-4">
							<button type="submit" class="btn w-100" style="background-color: #ee5684; color: #fff;">LOGIN</button>
						</div>
						<div class="mb-3 pt-1">
							<hr class="hr">
							<div class="or-content">
								<span>OR</span>
							</div>
						</div>
						<div class="mb-3 pt-4">
							<ul class="list-unstyled d-flex justify-content-center">
								<li><a href="#"><span style="border:2px solid red; padding: 6px 10px; border-radius: 50%; color: red; margin-right: 20px;"><i class="fa-brands fa-google"></i></span></a></li>
								<li><a href="#"><span style="border:2px solid blue; padding: 6px 12px; border-radius: 50%; color: blue; margin-right: 20px;"><i class="fa-brands fa-facebook-f"></i></i></span></a></li>
								<li><a href="#"><span style="border:2px solid green; padding: 6px 10px; border-radius: 50%; color: green;"><i class="fa-brands fa-linkedin-in"></i></span></a></li>
							</ul>
						</div>
						<div class="mb-3 pt-2">
							<p class="d-flex justify-content-center">Need an account? <a href="#" class="text-dark">SIGN
									IN</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>