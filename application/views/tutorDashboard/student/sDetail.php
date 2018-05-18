
<div class="container con-body">
	<a href="<?php echo base_url();?>tutorDas/studentDas">
		<button class="btn btn-primary">
			<i class="mdi mdi-chevron-left text-white"></i>Back
		</button>
	</a>
	<h3 class="card-title text-center text-primary"><strong>Student Profile</strong></h3><br>
	<div class="row bg-white st-edit">
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<br>
			<img src="<?php echo base_url();?>assets/images/studentpiture.jpg" alt="" class="img-thumbnail" id="viewStudent">
			<div class="form-check text-center">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox"> Hired after internship 
				</label>
			</div>
		</div>
		<?php foreach ($student as $student):?>
		<!-- <table id="example" class="table table-striped table-bordered bg-white"> -->
		<div class="col-md-6"><br>
			<table>
				<tr>
					<td><label for="">First Name : </label> </td>
					<!-- <td></td> -->
					<td><span class="font-weight-bold">  <?php echo $student['stuFName']; ?></span></td>
				</tr>
				<tr>
					<td><label for="">Last Name : </label></td>
					<!-- <td></td> -->
					<td><span class="font-weight-bold">  <?php echo $student['stuLName']; ?></span></td>
				</tr>
				<tr>
					<td><label for="">Company : </label></td>
					<!-- <td></td> -->
					<td><span class="font-weight-bold">  <?php echo $student['stuLName']; ?></span></td>
				</tr>
				<tr>
					<td><label for="">Suppervisor : </label> </td>
					<!-- <td></td> -->
					<td><span class="font-weight-bold">  <?php echo $student['suFName']." ".$student['suLName']; ?></span></td>
				</tr>
				<tr>
					<td><label for="">Tutor : </label></td>
					<!-- <td></td> -->
					<td><span class="font-weight-bold">  <?php echo $student['tFName']." ".$student['tLName']; ?></span></td>
				</tr>
				<tr>
					<td><label for="">Batch : </label></td>
					<!-- <td></td> -->
					<td><span class="font-weight-bold"> <?php echo $student['batch']." ".$student['year']; ?></span></td>
				</tr>
				<tr>
					<td><label for="">Phone number : </label></td>
					<!-- <td></td> -->
					<td><span class="font-weight-bold">  <?php echo $student['phone']; ?></span></td>
				</tr>
				<tr>
					<td><label for="">Personal Email : </label></td>
					<!-- <td></td> -->
					<td><span class="font-weight"><a href=""><?php echo $student['peremail']; ?></a></span></td>
				</tr>
				<tr>
					<td><label for="">School Email : </label></td>
					<!-- <td></td> -->
					<td><span class="font-weight"><a href=""><?php echo $student['schoolemail']; ?></a>
					</span></td>
				</tr>
			</table><br>
		</div>	
		 <?php endforeach ?>						
	</div><br>
</div>