<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File Upload</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container pt-5">
		<div class="row justify-content-center mt-5">
			<div class="col-md-6">
				<div class="border border-success py-3 px-3 rounded">
					<form action="<?php echo base_url() ?>main/supload" method="post" enctype="multipart/form-data" class="was-validated">
						<div class="form-group">
							<label for="uploadimage" class="mb-2">Upload Image</label>
							<input type="file" class="form-control" name="file" require>
							<div class="valid-feedback">Valid</div>
							<div class="invalid-feedback">Please Upload a File.</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Submit" class="btn btn-success mt-4">
							<input type="reset" value="Reset" class="btn btn-danger mt-4">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>