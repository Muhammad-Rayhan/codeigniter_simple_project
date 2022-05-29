<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>

<body>

	<!-- <div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-4 pt-5">
				<div class="card" style="width: 18rem;">
					<img src="assets/img/field-g0e812d6b3_1920.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Serial Number</th>
							<th scope="col">Student Name</th>
							<th scope="col">Student ID</th>
							<th scope="col">Contact</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($getalldata as $value) { ?>
							<tr>
								<td><?= $value->s_number ?></td>
								<td><?= $value->s_name ?></td>
								<td><?= $value->s_id ?></td>
								<td><?= $value->s_contact ?></td>
								<td>
									<a href="#" onclick="edit(<?= $value->s_number ?>);">View</a>
								</td>
							</tr>
						<?php
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>

<!-- =======================================Modal For View================================================ -->
<!-- Modal -->
<div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" style="border: none;">
			<div class="modal-body" style="padding: 0rem; position: absolute;">
				<div class="card" style="width: 18rem;">
					<img src="assets/img/field-g0e812d6b3_1920.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, dolor. Minima magnam facilis excepturi.</p>
						<form action="" class="py-2">
							<input type="text" name="editid">
						</form>
						<!-- ================================= -->
						<a href="#" class="btn btn-info" onclick="add(<?= $value->s_number ?>);">Add Course</a>
						<!-- ================================= -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- =======================================Modal For View================================================ -->
<script>
	//make sure jquery link declear on js link
	// At first make sure our edit button have a one click function like [ onclick="edit(14);" = $value(our foreach key value ariable name)->bloagid(Our data table id feild name) ]
	function edit(s_number) { //edit() = edit button oneclick function name(bloagid = Catch our data table id $value->bloagid) 
		$('#editdata').modal('show'); //Show modal on this page declear by id  #editmodal = modal id name.
		$.get('<?php echo base_url() . 'main/add_course/'; ?>' + s_number, function(data) {
			var formated_data = JSON.parse(data);
			console.log(formated_data);
			$('input[name=editid]').val(formated_data.s_number); //'editid' = input name value  s_name = data table feild name
		});
	}
</script>



<!-- =======================================Modal For Add Course================================================ -->
<!-- Modal -->
<div class="modal fade" id="addcourse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<form action="<?= base_url() ?>main/added_course" method="post">
					<div class="form-group">
						<label class="form-label">ID</label>
						<input type="text" name='editid' class="form-control">
						<!--Show ID-->
					</div>
					<div class="form-group">
						<label for="course" class="form-label">Course</label>
						<select name="selectcourse" id="" class="form-control">


							<?php foreach ($getallcourse as $values) {
							?>
								<option value="<?= $values->course_id ?>"><?= $values->course_id ?></option>
								<!--course_id = course table feild name-->
							<?php
							} ?>


						</select>
					</div>
					<div class="form-group mt-5">
						<input type="submit" value="Updata Course" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- =======================================Modal For Add Course================================================ -->
<script>
	//make sure jquery link declear on js link
	// At first make sure our edit button have a one click function like [ onclick="edit(14);" = $value(our foreach key value ariable name)->bloagid(Our data table id feild name) ]
	function add(s_number) { //edit() = edit button oneclick function name(bloagid = Catch our data table id $value->bloagid) 
		$('#addcourse').modal('show'); //Show modal on this page declear by id  #editmodal = modal id name.
		$('#editdata').modal('hide');
		$.get('<?php echo base_url() . 'main/add_course/'; ?>' + s_number, function(data) {
			var formated_data = JSON.parse(data);
			console.log(formated_data);
		});
	}
</script>