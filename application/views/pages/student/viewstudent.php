
<div class="container con-body">
	<a href="<?php echo base_url();?>Welcome_IF/student">
		<button class="btn btn-primary">
			<i class="mdi mdi-chevron-left text-white"></i>Back
		</button>
	</a>
	<h3 class="card-title text-center text-primary"><strong>Student Profile</strong></h3><br>
	<div class="row bg-white st-edit">
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
			<?php 	
					$studentLName = $student['stuFName'];
			 ?>
		 <?php endforeach ?>						
		<table id="example" class="table table-striped table-bordered bg-white">
		<div class="col-md-8"><br>
			<label for="">First Name : </label> 
			<span class="font-weight-bold">  <?php echo $studentName; ?></span><br>
			<label for="">Last Name : </label> 
			<span class="font-weight-bold">  <?php echo $student['stuLName']; ?></span><br>
			<label for="">Company : </label> 
			<span class="font-weight-bold">  <?php echo $student['stuLName']; ?></span><br>
			<label for="">Suppervisor : </label> 
			<span class="font-weight-bold">  <?php echo $student['suFName']." ".$student['suLName']; ?></span><br>
			<label for="">Tutor : </label>
			<span class="font-weight-bold">  <?php echo $student['tFName']." ".$student['tLName']; ?></span><br>
			<label for="">Batch : </label>
			<span class="font-weight-bold"> <?php echo $student['batch']." ".$student['year']; ?></span><br>

			<label for="">Phone number : </label>
			<span class="font-weight-bold">  <?php echo $student['phone']; ?></span><br>
			<label for="">Personal Email : </label>
			<span class="font-weight"><a href=""><?php echo $student['peremail']; ?></a></span><br>
			<label for="">School Email : </label>
			<span class="font-weight"><a href=""><?php echo $student['schoolemail']; ?></a>
			</span><br>
		</div>	
	</div><br>
</div>