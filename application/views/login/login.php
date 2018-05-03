<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<style>
	img{
		width: 145px;
		height: auto;
		border-radius: 50%;
		box-shadow:0 1px 1px 1px gray;
		
	}
	.col-md-8{
		margin-left: 25px;
		margin-top: -95px;
	}
	body{
		background-image: url('https://images.unsplash.com/photo-1460602594182-8568137446ce?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c6a89cf0d31c8ed23b35aaf9a119a9f5&auto=format&fit=crop&w=755&q=80');
	}
</style>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">

						<div class="card bg-light">
							<div class="card-body">
								<div class="row">
									<div class="col-md-2"></div>
									<div class="col-md-8"><img src="<?php echo base_url() ?>/assets/images/logo.png" class="text-center bg-white" alt="logo.png"></div>
									<div class="col-md-2"></div>
								</div>
								<br>
								<form action="<?php echo base_url(); ?>/Welcome_IF/login" method="post"	 >
									<div class="form-group">
										<!-- <label for="formGroupExampleInput">Example label</label> -->
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password">
									</div>
									<br>
									<button class="btn btn-info float-right">Login</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>