
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<a href="<?php echo base_url(); ?>tutorDas/supervisorDas">
				<button type="button" class="btn btn-primary">
					<i class="mdi mdi-chevron-left"></i>Back
				</button>
			</a>
		</div>
		<div class="col-md-8">
			<h3 class="text-center text-primary">Supervisor Profile</h3>
		</div>
	</div>
	<br>
	<div class="row bg-white">
		<div class="col-md-1"></div>
		<div class="col-md-4 text-center ">
			<?php foreach ($supervisor as $supervisor):?>
			<br>
			<img class="user userSupervisor"  src="<?php echo base_url(); ?>assets/images/studentpiture.jpg" alt="" style="height: 260px; margin-top: 17px; padding: 10px;"><br>
			<a class="link" href="#" ><?php echo $supervisor['firstname']." ".$supervisor['lastname']; ?></a>
		</div>
		<div class="col-md-6">
			<form action="/action_page.php">
				<table><br>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">First Name</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<b class="text-dark"><?php echo $supervisor['firstname']; ?></b>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label class="text-dark">Last Name</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<b class="text-dark"><?php echo $supervisor['lastname']; ?></b>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">Company Website</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<a href="https://www.codingate.com/"><?php echo $supervisor['url']; ?></a>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">Position</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<b class="text-dark"><?php echo $supervisor['position']; ?></b>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">Email</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<a href=""><?php echo $supervisor['email']; ?></a>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">Phone</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<a href=""><?php echo $supervisor['phone']; ?></a>
							</div>
						</td>
					</tr>
				</table><br>
			</form>
			 <?php endforeach ?>
		</div>
	</div>
	<!-- </div> -->
	<!-- </div> -->
	<!-- </div>			 -->
</div>
<!-- </div> -->