<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<title><?php echo $title ?></title>
</head>

<body>

	<div class="container">
		<div class="row justify-content-center mt-2">
			<div class="col-12">
				<div class="d-flex align-items-start">
					<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button onclick="languageChange('English')" class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php echo $this->lang->line('english') ?></button>
						<button onclick="languageChange('Bangla')" class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><?php echo $this->lang->line('bangla') ?></button>
						<button onclick="languageChange('Arabic')" class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><?php echo $this->lang->line('arabic') ?></button>
						<button onclick="languageChange('Hindi')" class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><?php echo $this->lang->line('hindi') ?></button>
					</div>
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<h2><?php echo $this->lang->line('pageHeading') ?></h2>
							<p>
								<?php echo $this->lang->line('pageContent') ?>
							</p>
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<h2><?php echo $this->lang->line('pageHeading') ?></h2>
							<p>
								<?php echo $this->lang->line('pageContent') ?>
							</p>
						</div>
						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<h2><?php echo $this->lang->line('pageHeading') ?></h2>
							<p>
								<?php echo $this->lang->line('pageContent') ?>
							</p>
						</div>
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<h2><?php echo $this->lang->line('pageHeading') ?></h2>
							<p>
								<?php echo $this->lang->line('pageContent') ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

	<script>
		function languageChange(lan) {
			alert(lan);
			$.ajax({
				url: '<?php echo base_url('index.php/Welcome/setLanguage')?>',
				type: 'post',
				data:{
					lan: lan
				},
				success:function(data)
				{
					location.reload();
				}
			});
		}
	</script>

</body>

</html>