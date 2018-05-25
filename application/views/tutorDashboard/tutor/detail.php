

<div class="container con-body">
	<a href="<?php echo base_url(); ?>tutorDas/tutorList">
		<button class="btn btn-primary">
			<i class="mdi mdi-chevron-left text-white"></i>Back
		</button>
	</a>
	<h3 class="card-title text-center text-primary"><strong>Tutor Profile</strong></h3><br>
	<?php foreach ($tutor as $tutor):?>
			<?php $imagepart =  "assets/images/users/".$tutor['picture'];?>
	<div class="row bg-white st-edit" >
		<div class="col-md-3"></div>
		<div class="col-md-3"><br><br>
		<img class="user userSupervisor"  src="<?php echo base_url(); ?><?php  echo $imagepart?>" alt="" style="height: 185px; width: 220px; margin-top: 17px; padding: 10px;" class="img-thumbnail"><br>

		
		 <?php endforeach ?>						
			<div style="margin-left: 40px;">
				<b>
					<a class="link" href="#" style="margin-left: 50px;" >
						<?php echo $tutor['firstname']." ".$tutor['lastname']; ?>
							
					</a>
				</b>
			</div><br>
		</div>
		
		<table id="example" class="table table-striped table-bordered bg-white">
		<div class="col-md-6"><br><br><br>
			<div class="row">
				<div class="col-md-3"><label for="">First Name : </label></div>
				<div class="col-md-3">
				  <span class="font-weight-bold">  <?php echo $tutor['firstname']; ?></span>
			    </div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<label for="">Last Name : </label>
				</div>
				<div class="col-sm-3">
					<span class="font-weight-bold">  <?php echo $tutor['lastname']; ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">User Name : </label>
				</div>
				<div class="col-md-3">
					<span class="font-weight-bold"> <?php echo $tutor['username']; ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">Position : </label>
				</div>
				<div class="col-md-3">
					<span class="font-weight-bold"> <?php echo $tutor['position']; ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">Email : </label>
				</div>
				<div class="col-md-3">
					<span class="font-weight-bold"><?php echo $tutor['email']; ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">Phone number : </label>
				</div>
				<div class="col-md-3">
					<span class="font-weight-bold"> <?php echo $tutor['phone']; ?></span>
				</div>
			</div>
			
			
			
		</div>	
	</div><br>
</div>