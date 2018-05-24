
<div class="container con-body">
	<a href="<?php echo base_url();?>tutorDas/studentDas">
		<button class="btn btn-primary">
			<i class="mdi mdi-chevron-left text-white"></i>Back
		</button>
	</a>
	<h3 class="card-title text-center text-primary"><strong>Student Profile</strong></h3><br>
	<div class="row bg-white st-edit">
		<div class="col-md-2"></div>
		<div class="col-md-4">
		<?php foreach ($student as $student):?>
			<?php $imagepart =  "assets/images/users/".$student['sPic'];?> 
			<br>
			<img src="<?php echo base_url();?><?php echo $imagepart; ?>" alt=""  id="viewStudent"  style="height: 200px; width: 230px; margin-top: 17px; padding: 10px;" >
		 <?php endforeach ?>						
			<div class="form-check text-center">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox"> Hired after internship 
				</label>
			</div>
		</div>
		
		<table id="example" class="table table-striped table-bordered bg-white">
		<div class="col-md-6"><br>
			<div class="row">
				<div class="col-md-3"><label for="">First Name : </label></div>
				<div class="col-md-3">
				  <span class="font-weight-bold">  <?php echo $student['stuFName'];; ?></span>
			    </div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<label for="">Last Name : </label>
				</div>
				<div class="col-sm-3">
					<span class="font-weight-bold">  <?php echo $student['stuLName']; ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">Company : </label>
				</div>
				<div class="col-md-3">
					<span class="font-weight-bold">  <?php echo $student['name']; ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">Suppervisor : </label>
				</div>
				<div class="col-md-3">
					<span class="font-weight-bold">  <?php echo $student['suFName']." ".$student['suLName']; ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">Tutor : </label>
				</div>
				<div class="col-md-3">
					<span class="font-weight-bold">  <?php echo $student['tFName']." ".$student['tLName']; ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">Batch : </label>
				</div>
				<div class="col-md-3">
					<span class="font-weight-bold"> <?php echo $student['batch']." ".$student['year']; ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">Phone number : </label>
				</div>
				<div class="col-md-3">
					<span class="font-weight-bold">  <?php echo $student['phone']; ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">Personal Email : </label>
				</div>
				<div class="col-md-3">
					<span class="font-weight"><a href=""><?php echo $student['peremail']; ?></a></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">School Email : </label>
				</div>
				<div class="col-md-3">
					<span class="font-weight"><a href=""><?php echo $student['schoolemail']; ?></a>
					</span>
				</div>
			</div>	
		</div>	
	</div><br>
</div>