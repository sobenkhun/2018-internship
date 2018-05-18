<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#testAdd").click(function(){
			$(".dropbtn").clone().appendTo(" "+".rowAdd");
		});
	});
	$(document).ready(function(){
		$("#addDay").click(function(){
			$(".cardForm").clone().appendTo(" "+".cardAdd");
		});
	});
</script>

<!-- body -->
<div class="container row-fluid">
	<h3 class="text-primary text-center">
		<strong>Weekly Work-log report</strong>
	</h3>
	<br>
	<div id="accordion">
		<div class="row">
			<div class="col-xs-12" style="margin: 0em 0em 0em 1em;">
				<button class="btn dropdownbtn dropbtn">Week 1</button>
			</div>
			<div class="col-xs-12 rowAdd"></div>
			<!-- icon add week -->
			<div class="col-xs-1">
				<div class="text-right" style="font-size: 25px;" data-toggle="modal" data-target="#addWeek">
					<a href="#" class="text-primary" id="testAdd">
						<i class="mdi mdi-plus-box" data-toggle="tooltip" title="Add week"></i>
					</a>
				</div>
			</div>
		</div>
		<br>
		<div class="card">
			<form action="" class="cardForm">
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
		<div class="card cardAdd">
			
		</div>
		<div class="text-right" style="font-size: 25px;" data-toggle="modal" data-target="#addWeek">
			<a href="" class="text-primary" id="addDay">
				<i class="mdi mdi-plus-box" data-toggle="tooltip" title="Add day"></i>
			</a>
		</div>
		<!-- ================ -->
		<div class="card1">

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
