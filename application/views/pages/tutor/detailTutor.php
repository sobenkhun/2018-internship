

<div class="container">
	<div class="row">
		<div class="col-md-2">
			<a href="<?php echo base_url(); ?>Welcome_IF/tutor">
				<button type="button" class="btn btn-primary">
					<i class="mdi mdi-chevron-left"></i>Back
				</button>
			</a>
		</div>
		<div class="col-md-8">
			<h3 class="text-center text-primary">Tutor Profile</h3>
		</div>
	</div>
	<br>
		<?php foreach ($tutor as $tutor):?>
	<div class="row bg-white">
		<div class="col-md-1"></div>
		<div class="col-md-4 text-center "><br>
			<img class="user userSupervisor"  src="<?php echo base_url(); ?>assets/images/studentpiture.jpg" alt="" style="height: 260px; margin-top: 17px; padding: 10px;"><br>
			<a class="link" href="#" ><?php echo $tutor['firstname']." ".$tutor['lastname']; ?></a>
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
								<b class="text-dark"><?php echo $tutor['firstname']; ?></b>
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
								<b class="text-dark"><?php echo $tutor['lastname']; ?></b>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label class="text-dark">User Name</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<b class="text-dark"><?php echo $tutor['username']; ?></b>
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
								<b class="text-dark"><?php echo $tutor['position']; ?></b>
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
								<a href="#"><?php echo $tutor['email']; ?></a>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">Phone number</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<b class="text-dark"><?php echo $tutor['phone']; ?></b>
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
