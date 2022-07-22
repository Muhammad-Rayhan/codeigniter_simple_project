<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary">
	<div class="container">
		<br><br><br><br><br><br><br>
		<div class="row justify-content-center">
			<div class="col-lg-5 col-md-7 col-sm-10 col-12">
				<div class="border rounded p-3 bg-white">
					<div class="d-flex justify-content-between align-items-center mb-2">
						<h2 class="text-primary">Login Here</h2>
						<a href="<?= base_url("authentication/signup") ?>">Registration Now</a>
					</div>
					<form action="<?= base_url("authentication/login") ?>" method="post">
						<div class="form-group">
							<label for="" class="form-label">Email</label>
							<input type="email" class="form-control" placeholder="User Email" name="email">
							<span class="text-danger"><?= form_error("email") ?></span>
						</div>
						<div class="form-group">
							<label for="" class="form-label">Password</label>
							<input type="password" class="form-control" placeholder="Password" name="password">
							<span class="text-danger"><?= form_error("password") ?></span>
						</div>
						<div class="form-group mt-3">
							<input type="submit" class="form-control btn btn-primary" value="Log In">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>