

<div class="container con-body">
	<a href="<?php echo base_url();?>tutorDas/tSupervisorDas">
		<button class="btn btn-primary">
			<i class="mdi mdi-chevron-left text-white"></i>Back
		</button>
	</a>
	<h3 class="card-title text-center text-primary"><strong>Supervisor Profile</strong></h3><br>
	<div class="row bg-white st-edit">
		<div class="col-md-3"></div>
		<div class="col-md-3">
			<?php foreach ($ss as $supervisor):?>
				<?php $imagepart =  "assets/images/users/".$supervisor['picture'];?>
			<br><br><br>
			 <img class="user userSupervisor"  src="<?php echo base_url(); ?><?php  echo $imagepart?>" alt="" style="height: 195px; width: 220px; margin-top: 17px; padding: 10px;" class="img-thumbnail"><br>
			
			<div style="margin-left: 60px;">
			   <b>
			   	<a class="link" href="#" >
			   		<?php echo $supervisor['firstname']." ".$supervisor['lastname']; ?>		
			   	</a>
			   	</b>
			</div><br>						
		</div>
		 <?php endforeach ?>
		
		<div class="col-md-6"><br><br><br><br>
			<div class="row">
				<div class="col-md-3"><label for="">First Name : </label></div>
				<div class="col-md-3">
				  <span class="font-weight-bold">  <?php echo $supervisor['firstname'];; ?></span>
			    </div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<label for="">Last Name : </label>
				</div>
				<div class="col-sm-3">
					<span class="font-weight-bold">  <?php echo $supervisor['lastname']; ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">Company Website :</label>
				</div>
				<div class="col-md-3">
					<span class="font-weight-bold">
					  <a href="https://www.codingate.com/">
					  	<?php echo "www.rci.com"//$supervisor['url']; ?>
					  	</a>
					 </span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">Position :</label>
				</div>
				<div class="col-md-3">
					<span class="font-weight-bold"> <?php echo $supervisor['position']; ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">Email : </label>
				</div>
				<div class="col-md-3">
					<span class="font-weight-bold"> <a href=""><?php echo $supervisor['email']; ?></a></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label for="">Phone number </label>
				</div>
				<div class="col-md-3">
					<span class="font-weight-bold"> <a href=""><?php echo $supervisor['phone']; ?></a></span>
				</div>
			</div><br>
			
			
			
		</div>	

	</div><br>
</div>