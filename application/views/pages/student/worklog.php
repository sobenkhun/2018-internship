<!-- body -->
<div class="container row-fluid">
	<a href="<?php echo base_url();?>Welcome_IF/student">
		<button class="btn btn-primary">
			<i class="mdi mdi-chevron-left mdi-15px text-white"></i>Back
		</button>
	</a>
	<h3 class="text-primary text-center">
		<strong>Weekly Work-log report</strong>
	</h3>
	<br>
	<div id="accordion">
		<div class="row">
			<div class="col-md-6 text-left">
				<div class="dropdownbtn">
					<button class="btn dropbtn">June</button>
					<div class="dropdown-content text-left">
						<a href="">Week 1</a>
						<a href="<?php echo base_url();?>firstMonth/secounWeek">Week 2</a>
						<a href="<?php echo base_url();?>firstMonth/thirdWeek">Week 3</a>
						<a href="<?php echo base_url();?>firstMonth/fourWeek">Week 4</a>
					</div>
				</div>
				<div class="dropdownbtn">
					<button class="btn dropbtn">July</button>
					<div class="dropdown-content text-left">
						<a href="<?php echo base_url();?>secounMonth/weekOne">Week 1</a>
						<a href="<?php echo base_url();?>secounMonth/secounWeek">Week 2</a>
						<a href="<?php echo base_url();?>secounMonth/thirdWeek">Week 3</a>
						<a href="<?php echo base_url();?>secounMonth/fourWeek">Week 4</a>
					</div>
				</div>
				<div class="dropdownbtn">
					<button class="btn dropbtn">August</button>
					<div class="dropdown-content text-left">
						<a href="<?php echo base_url();?>thirdMonth/weekOne">Week 1</a>
						<a href="<?php echo base_url();?>thirdMonth/secounWeek">Week 2</a>
						<a href="<?php echo base_url();?>thirdMonth/thirdWeek">Week 3</a>
						<a href="<?php echo base_url();?>thirdMonth/fourWeek">Week 4</a>
					</div>
				</div>
				<div class="dropdownbtn">
					<button class="btn dropbtn">September</button>
					<div class="dropdown-content text-left">
						<a href="<?php echo base_url();?>fourMonth/weekOne">Week 1</a>
						<a href="<?php echo base_url();?>fourMonth/secounWeek">Week 2</a>
						<a href="<?php echo base_url();?>fourMonth/thirdWeek">Week 3</a>
						<a href="<?php echo base_url();?>fourMonth/fourWeek">Week 4</a>
					</div>
				</div>
			</div>
			<!-- <div class="col-md-6 text-right">
				<input type="button" class="btn btn-outline-success" name="btn-submit" value="Save report">
				
			</div> -->
		</div>
		<br>
		<div class="card">
			<form action="">
				<div class="card-header text-center bg-info" id="headingOne" data-toggle="collapse" data-target="#firstday" aria-expanded="true" aria-controls="firstday">
					<h5 class="mb-0 text-white"><strong>Monday</strong></h5>
				</div>

				<div id="firstday" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body rounded">
						<table class="table table-bordered table-hover" id="tableWorkLog">
							<tbody class="bg-white">
								<tr>
									<th class="bg-info text-white text-center table-fixed"><br><br>Date & Time</th>
									<td>
										<input class="form-control" type="date" value="DD/MM/YYY"><br>
										<input class="form-control" type="text" placeholder="Start to end time"><br>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Work Activities</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>What did you learn?</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Difficulties/ Issues</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width:15em;"><br><br>Solutions</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>To Do (Plan)</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>					
									<th rowspan="2" class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Comment</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4" placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<td class="text-right">
										<input type="button" class="btn btn-outline-success" name="btn-submit" value="Save report">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</form>
		</div>

		<!-- ================ -->
		<div class="card">
			<form action="">
				<div class="card-header text-center bg-info" id="headingTwo" data-toggle="collapse" data-target="#secounday" aria-expanded="true" aria-controls="secounday">
					<h5 class="mb-0 text-white"><strong>Tuesday</strong></h5>
				</div>

				<div id="secounday" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					<div class="card-body">
						<table class="table table-bordered table-hover" id="tableWorkLog">
							<tbody class="bg-white">
								<tr>
									<th class="bg-info text-white text-center table-fixed"><br><br>Date & Time</th>
									<td>
										<input class="form-control" type="date" value="DD/MM/YYY"><br>
										<input class="form-control" type="text" placeholder="Start to end time"><br>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Work Activities</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>What did you learn?</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Difficulties/ Issues</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width:15em;"><br><br>Solutions</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>To Do (Plan)</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>					
									<th rowspan="2" class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Comment</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4" placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<td class="text-right">
										<input type="button" class="btn btn-outline-success" name="btn-submit" value="Save report">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</form>
		</div>

		<!-- ============= -->
		<div class="card">
			<form action="">
				<div class="card-header text-center bg-info" id="headingThree" data-toggle="collapse" data-target="#thirday" aria-expanded="true" aria-controls="thirday">
					<h5 class="mb-0 text-white"><strong>Wednesday</strong></h5>
				</div>

				<div id="thirday" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					<div class="card-body">
						<table class="table table-bordered table-hover" id="tableWorkLog">
							<tbody class="bg-white">
								<tr>
									<th class="bg-info text-white text-center table-fixed"><br><br>Date & Time</th>
									<td>
										<input class="form-control" type="date" value="DD/MM/YYY"><br>
										<input class="form-control" type="text" placeholder="Start to end time"><br>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Work Activities</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>What did you learn?</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Difficulties/ Issues</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width:15em;"><br><br>Solutions</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>To Do (Plan)</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>					
									<th rowspan="2" class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Comment</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4" placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<td class="text-right">
										<input type="button" class="btn btn-outline-success" name="btn-submit" value="Save report">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</form>
		</div>

		<!-- =================== -->
		<div class="card">
			<form action="">
				<div class="card-header text-center bg-info" id="headingFour" data-toggle="collapse" data-target="#fourthday" aria-expanded="true" aria-controls="fourthday">
					<h5 class="mb-0 text-white"><strong>Thursday</strong></h5>
				</div>
				<div id="fourthday" class="collapse" aria-labelledby="headingFourth" data-parent="#accordion">
					<div class="card-body">
						<table class="table table-bordered table-hover" id="tableWorkLog">
							<tbody class="bg-white">
								<tr>
									<th class="bg-info text-white text-center table-fixed"><br><br>Date & Time</th>
									<td>
										<input class="form-control" type="date" value="DD/MM/YYY"><br>
										<input class="form-control" type="text" placeholder="Start to end time"><br>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Work Activities</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>What did you learn?</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Difficulties/ Issues</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width:15em;"><br><br>Solutions</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>To Do (Plan)</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>					
									<th rowspan="2" class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Comment</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4" placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<td class="text-right">
										<input type="button" class="btn btn-outline-success" name="btn-submit" value="Save report">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</form>
		</div>
		<!-- ===================== -->
		<div class="card">
			<form action="">
				<div class="card-header text-center bg-info" id="headingFive" data-toggle="collapse" data-target="#fifthday" aria-expanded="true" aria-controls="fifthday">
					<h5 class="mb-0 text-white"><strong>Friday</strong></h5>
				</div>

				<div id="fifthday" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
					<div class="card-body">
						<table class="table table-bordered table-hover" id="tableWorkLog">
							<tbody class="bg-white">
								<tr>
									<th class="bg-info text-white text-center table-fixed"><br><br>Date & Time</th>
									<td>
										<input class="form-control" type="date" value="DD/MM/YYY"><br>
										<input class="form-control" type="text" placeholder="Start to end time"><br>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Work Activities</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>What did you learn?</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Difficulties/ Issues</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width:15em;"><br><br>Solutions</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>To Do (Plan)</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4"  placeholder="..."></textarea>
									</td>
								</tr>
								<tr>					
									<th rowspan="2" class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Comment</th>
									<td>
										<textarea class="col-md-12 form-group" name="" id="" rows="4" placeholder="..."></textarea>
									</td>
								</tr>
								<tr>
									<td class="text-right">
										<input type="button" class="btn btn-outline-success" name="btn-submit" value="Save report">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</form>
		</div>
		<div class="row">
			<div class="col-md-12 text-right">
				<form action="">
					<textarea class="col-md-12 form-group" name="" id="" rows="4" placeholder="Reflections for this week:"></textarea>
					<input type="button" class="btn btn-outline-success" name="btn-submit" value="Save Week Reflections">
				</form>
			</div>
		</div>
		
	</div>
</div>
