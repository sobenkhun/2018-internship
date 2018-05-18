
<!-- body -->
<div class="container row-fluid">
	<h3 class="text-primary text-center">
		<strong>Weekly Work-log report</strong>
	</h3>
	<br>
	<div id="accordion">
		<div class="row">
			<div class="col-md-12">
					<a href="<?php echo base_url();?>cStudent/weekWorklog">
						<button class="btn dropbtn text-right"> Week 1</button>
					</a>
					<a href="<?php echo base_url();?>cStudent/weekWorklog">
						<button class="btn dropbtn text-right">Week 2</button>
					</a>
					<a href="<?php echo base_url();?>cStudent/weekWorklog">
						<button class="btn dropbtn text-right">Week 3</button>
					</a>
					<a href="<?php echo base_url();?>cStudent/weekWorklog">
						<button class="btn dropbtn text-right">Week 4</button>
					</a>
					<a href="<?php echo base_url();?>cStudent/weekWorklog">
						<button class="btn dropbtn text-right">Week 5</button>
					</a>
					<a href="<?php echo base_url();?>cStudent/weekWorklog">
						<button class="btn dropbtn text-right">Week 6</button>
					</a>
					<a href="<?php echo base_url();?>cStudent/weekWorklog">
						<button class="btn dropbtn text-right">Week 7</button>
					</a>
					<a href="<?php echo base_url();?>cStudent/weekWorklog">
						<button class="btn dropbtn text-right">Week 8</button>
					</a>
					<a href="<?php echo base_url();?>cStudent/weekWorklog">
						<button class="btn dropbtn text-right">Week 9</button>
					</a>
					<a href="<?php echo base_url();?>cStudent/weekWorklog">
						<button class="btn dropbtn text-right">Week 10</button>
					</a>
					<a href="<?php echo base_url();?>cStudent/weekWorklog">
						<button class="btn dropbtn text-right">Week 11</button>
					</a>
					<a href="<?php echo base_url();?>cStudent/weekWorklog">
						<button class="btn dropbtn text-right">Week 12</button>
					</a>
					<a href="<?php echo base_url();?>cStudent/weekWorklog">
						<button class="btn dropbtn text-right">Week 13</button>
					</a>
			</div>

			<!-- <div class="col-xs-5"></div> -->
			<!-- <div class="col-xs-2 monthAdd" style="margin: 0em 0em 0em 1em;"> -->
				<!-- <div class="dropdownbtn"> -->
					<!-- <button class="btn dropbtn text-right">Week 1</button> -->
					<!-- <div class="dropdown-content text-left">
						<a href="">Week 1</a>
					</div> -->
				<!-- </div> -->
			<!-- </div> -->
			<!-- <p id="month"></p> -->
			<!-- <div class="col-xs-2">
				<div class="dropdownbtn">
					<button class="btn dropbtn text-right" id="month"></button>
					<div class="dropdown-content text-left">
						<a href="" id="week"></a>
					</div>
				</div>
			</div> -->
			<!-- <div class="col-xs-1">
				<div class="text-right" style="font-size: 25px;" data-toggle="modal" data-target="#addWeek">
					<a href="#" class="text-primary" >
						<i class="mdi mdi-plus-box" data-toggle="tooltip" title="Add month&week"></i>
					</a>
				</div>
			</div> -->
			<!-- The Modal -->
			<!-- <div class="modal smalle" id="addWeek">
				<div class="modal-dialog">
					<div class="modal-content">

						Modal Header
						<div class="modal-header bg-primary">
							<h4 class="modal-title text-white">Add Month and Week</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						Modal body
						<div class="modal-body">
							<form action="<?php echo base_url();?>cStudent/add" role="form" method="post">
								<div class="form-group">
									<label for="month" class="modal-title"><strong>Month:</strong></label>
									<input type="text" class="form-control" id="month" name="month" placeholder="Month name">
								</div>
								<div class="form-group">
									<label for="week" class="modal-title"><strong>Week:</strong></label>
									<input type="text" class="form-control" id="week" name="week" placeholder="Week number">
								</div>
								<div class="form-group text-right">
									<button type="button" class="btn btn-outline-success btn-submit" data-dismiss="modal" onclick="myFunction()">Add</button>
									<button type="submit" class="btn btn-outline-danger btn-default" data-dismiss="modal">Cancel</button>
								</div>
							</form>
						</div>
					</div>
				</div>
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
<!-- //body -->

<!-- <script>
	function myFunction() {
		var x = document.getElementById("month").name;
		document.getElementById("month").innerHTML = x;
	}
</script> -->