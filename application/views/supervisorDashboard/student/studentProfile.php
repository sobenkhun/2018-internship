
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
		<div class="col-md-1"></div>
		<div class="col-md-4 text-center "><br>
			<img class="user userSupervisor"  src="<?php echo base_url(); ?>assets/images/studentpiture.jpg" alt="" style="height: 260px; margin-top: 17px; padding: 10px;"><br>
			<label for="">Prem MANN</label>
		</div>
		<div class="col-md-6">
			 <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                
                <th class="text-center">Action</th>
            </tr>
        </thead>
         <tbody>
        <?php foreach ($studentProfile as $student):?>
          <tr>
              <td><?php echo $student['userid']; ?></td>
              <td><?php echo $student['studentName']; ?></td>
        </td>
          </tr>
          <?php endforeach ?>
    </tbody>
    </table>
			<!-- <form action="/action_page.php">
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
								<b class="text-dark">Prem</b>
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
								<b class="text-dark">MANN</b>
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
								<a href="https://www.codingate.com/">Coding Get</a>
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
								<b class="text-dark">Chanank CHON</b>
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
								<select name="" id="">
									<option value="">WEB</option>
									<option value="">WEB</option>
								</select>
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
								<select name="" id="">
									<option value="">2018</option>
									<option value="">2019</option>
								</select>
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
								<a href="#">prem.mann@student.passerellesnumeriques.org</a>
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
								<a href="#">prem.mann@gmail.com</a>
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
								<label for="">0968889878</label>
							</div>
						</td>
					</tr>
				</table><br>
			</form> -->
		</div>
	</div>
	<!-- </div> -->
	<!-- </div> -->
	<!-- </div>			 -->
</div>
<!-- </div> -->