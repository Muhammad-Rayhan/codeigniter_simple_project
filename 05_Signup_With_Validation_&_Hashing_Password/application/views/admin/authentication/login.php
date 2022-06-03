<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">


<!-- Mirrored from preview.pichforest.com/dashonic/layouts/auth-signin-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 May 2022 09:03:13 GMT -->

<head>

	<meta charset="utf-8" />
	<title>Sign In | Dashonic - Admin & Dashboard Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Pichforest" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?= base_url()?>assets/images/favicon.ico">
	<!-- Material Design Icon -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.7.96/css/materialdesignicons.min.css" rel="stylesheet" />
	<!-- Bootstrap Css -->
	<link href="<?= base_url()?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<!-- Icons Css -->
	<link href="<?= base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="<?= base_url()?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>


<body>

	<!-- <body data-layout="horizontal"> -->

	<div class="authentication-bg min-vh-100">
		<div class="bg-overlay bg-white"></div>
		<div class="container">
			<div class="d-flex flex-column min-vh-100 px-3 pt-4">
				<div class="row justify-content-center my-auto">
					<div class="col-lg-10">
						<div class="py-5">
							<div class="card auth-cover-card overflow-hidden">
								<div class="row g-0">
									<div class="col-lg-6">
										<div class="auth-img">
										</div>
									</div><!-- end col -->
									<div class="col-lg-6">
										<div class="p-4 p-lg-5 bg-primary h-100 d-flex align-items-center justify-content-center">
											<div class="w-100">
												<div class="mb-4 mb-md-5">
													<a href="index.html" class="d-block auth-logo">
														<img src="<?= base_url()?>assets/images/logo-light.png" alt="">
													</a>
												</div>

												<div class="text-white-50 mb-4">
													<h5 class="text-white">Welcome Back !</h5>
													<p>Sign in to continue to Dashonic.</p>
												</div>
												<form action="<?= base_url('')?>">
													<div class="form-floating form-floating-custom mb-3">
														<input type="text" class="form-control" id="input-username" placeholder="Enter User name" name="username">
														<label for="input-username">Username</label>
														<div class="form-floating-icon">
															<i class="uil uil-users-alt"></i>
														</div>
													</div>
													<div class="form-floating form-floating-custom mb-3">
														<input type="password" class="form-control" id="input-password" placeholder="Enter Password" name="password">
														<label for="input-password">Password</label>
														<div class="form-floating-icon">
															<i class="uil uil-padlock"></i>
														</div>
													</div>

													<div class="form-check form-check-info text-white-50 font-size-16">
														<input class="form-check-input bg-soft-primary" type="checkbox" id="remember-check">
														<label class="form-check-label font-size-14" for="remember-check">
															Remember me
														</label>
													</div>

													<div class="mt-3">
														<button class="btn btn-info w-100" type="submit">Log In</button>
													</div>

													<div class="mt-4 text-center">
														<a href="auth-resetpassword-cover.html" class="text-white-50 text-decoration-underline">Forgot your password?</a>
													</div>
												</form><!-- end form -->
											</div>
										</div>
									</div><!-- end col -->
								</div><!-- end row -->
							</div><!-- end card -->
							<div class="mt-5 text-center text-muted">
								<p>Don't have an account ? <a href="<?= base_url('authentication/sign_up')?>" class="fw-medium text-decoration-underline"> Signup </a></p>
							</div>
						</div>
					</div><!-- end col -->
				</div><!-- end row -->

				<div class="row">
					<div class="col-lg-12">
						<div class="text-center text-muted p-4">
							<p class="mb-0">&copy; <script>
									document.write(new Date().getFullYear())
								</script> Dashonic. Crafted with <i class="mdi mdi-heart text-danger"></i> by Pichforest</p>
						</div>
					</div><!-- end col -->
				</div><!-- end row -->
			</div>
		</div>
		<!-- end container -->
	</div>
	<!-- end authentication section -->

	<!-- JAVASCRIPT -->
	<script src="<?= base_url()?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url()?>assets/libs/metismenujs/metismenujs.min.js"></script>
	<script src="<?= base_url()?>assets/libs/simplebar/simplebar.min.js"></script>
	<script src="<?= base_url()?>assets/libs/feather-icons/feather.min.js"></script>

</body>

<!-- Mirrored from preview.pichforest.com/dashonic/layouts/auth-signin-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 May 2022 09:03:13 GMT -->

</html>