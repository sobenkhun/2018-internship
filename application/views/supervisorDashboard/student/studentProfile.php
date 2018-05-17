
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<a href="<?php echo base_url(); ?>supervisor/student">
				<button type="button" class="btn btn-primary">
					<i class="mdi mdi-chevron-left"></i>Back
				</button>
			</a>
		</div>
		<div class="col-md-8">
			<h3 class="text-center text-primary">Student Profile</h3>
		</div>
	</div>
	<br>
	<div class="row bg-white">
		<?php foreach ($student as $student):?>
		<div class="col-md-1"></div>
		<div class="col-md-4 text-center "><br>
			<img class="user userSupervisor"  src="<?php echo base_url(); ?>assets/images/studentpiture.jpg" alt="" style="height: 260px; margin-top: 17px; padding: 10px;"><br>

			<label for=""><?php echo $student['firstname']; ?></label>
			<label for=""><?php echo $student['lastname']; ?></label>
		</div>
		<div class="col-md-6">
			
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
								<label "><?php echo $student['firstname']; ?></label>
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
								<label ><?php echo $student['lastname']; ?></label>
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
								<!-- <a href="#"><?php echo $student['url']; ?></a> -->
								<a href="#">www.codingget.com</a>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">Tutor By</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<!-- <label><?php echo $student['tutorName']; ?></label> -->
								<label>Rady Y</label>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">Batch</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<label><?php echo $student['batch']; ?></label>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">Year</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<label><?php echo $student['year']; ?></label>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">Eamil School</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<a href="#"><?php echo $student['schoolemail']; ?></a>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">Eamil Personal</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<a href="#"><?php echo $student['peremail'] ?></a>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">Phone Number</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<label><?php echo $student['phone']; ?></label>
							</div>
						</td>
					</tr>
				</table>
		</div>
		<?php endforeach ?>
	</div>
</div>