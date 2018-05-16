

<div class="container">
	<div class="row">
		<!-- <div class="col-md-2"></div> -->
		<div class="col-md-2"><a href="<?php echo base_url();?>tutorDas/tSupervisorDas">
			<button type="button" class="btn btn-primary"><i class="mdi mdi-chevron-left"></i>Back</button></a></div>
			<div class="col-md-8">
				<h3 class="text-center text-primary">Supervisor Profile</h3>
			</div>
		</div><br><br>

		<!-- <div class="row"> -->
			<!-- <div class="col-md-2"></div> -->
			<!-- <div class="col-md-2"></div> -->
			<!-- <div class="col-md-8"> -->
				<!-- <div class="card"> -->
					<!-- <div class="card-header bg-primary"> -->
						<!-- </div> -->
						<!-- <div class="body"> -->
							<?php foreach ($ss as $value):?>
							<div class="row bg-white">
								<div class="col-md-1"></div>
								<div class="col-md-4 text-center "><br>
									<img class="user" src="<?php echo base_url(); ?>assets/images/studentpiture.jpg" alt=""><br><br>
									<a class="link" href="#" ><?php echo $value['firstname'].' '.$value['lastname']; ?></a>
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
												<td class="TStd"> </td>
												<td>
													<div class="form-group">
														<b class="text-dark"><?php echo $value['firstname']; ?></b>
													</div>
												</td>
											</tr>
											<tr>
												<td> 
													<div class="form-group">
														<label class="text-dark">Last Name</label>
													</div> 
												</td>
												<td class="TStd"> </td>
												<td>
													<div class="form-group">
														<b class="text-dark"><?php echo $value['lastname']; ?></b>
													</div>
												</td>
											</tr>
											<tr>
												<td> 
													<div class="form-group">
														<label for="email">Company Website</label>
													</div> 
												</td>
												<td class="TStd"> </td>
												<td>
													<div class="form-group">
														<a href="https://www.codingate.com/"><?php echo 'www.codingate.com'?></a>
													</div>
												</td>
											</tr>
											<tr>
												<td> 
													<div class="form-group">
														<label for="email">Position</label>
													</div> 
												</td>
												<td class="TStd"> </td>
												<td>
													<div class="form-group">
														<b class="text-dark"><?php echo $value['position']; ?></b>
													</div>
												</td>
											</tr>
											<tr>
												<td> 
													<div class="form-group">
														<label for="email">Email</label>
													</div> 
												</td>
												<td class="TStd"> </td>
												<td>
													<div class="form-group">
														<b class="text-dark"><?php echo $value['email']; ?></b>
													</div>
												</td>
											</tr>
											<tr>
												<td> 
													<div class="form-group">
														<label for="email">Phone</label>
													</div> 
												</td>
												<td  class="TStd"> </td>
												<td>
													<div class="form-group">
														<b class="text-dark"><?php echo $value['phone']; ?></b>
													</div>
												</td>
											</tr>
										</table><br>
									</form>
								</div>
							</div>
							<!-- </div> -->
							<!-- </div> -->
							<!-- </div>			 -->
						</div>
						 <?php endforeach ?>
<!-- </div> -->
