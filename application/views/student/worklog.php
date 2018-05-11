
<!-- body -->
<div class="container row-fluid">
	<div class="col-md-12 col-lg-12">
		<h3 class="text-primary text-center"><strong>Weekly work-log report</strong></h3>
		<br>
		<table class="table table-bordered table-hover table-responsive" id="tableWorkLog">
			<tbody class="bg-white">
			<tr>
				<th class="bg-info text-white text-center table-fixed"><br>Date & Time</th>
				<td>
					<input class="form-control" type="date" value="DD/MM/YYY"><br>
					<input class="form-control" type="text" placeholder="Start to end time">
				</td>
				<td>
					<input class="form-control" type="date" value="DD/MM/YYY"><br>
					<input class="form-control" type="text" placeholder="Start to end time">
				</td>
			</tr>
			<tr>
				<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Work Activities</th>
				<td>
					<textarea class="form-group" name="" id="" cols="46" rows="4" placeholder="..."></textarea>
				</td>
				<td>
					<textarea class="form-group" name="" id="" cols="46" rows="4" placeholder="..."></textarea>
				</td>
			</tr>
			<tr>
				<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>What did you learn?</th>
				<td>
					<textarea class="form-group" name="" id="" cols="46" rows="4" placeholder="..."></textarea>
				</td>
				<td>
					<textarea class="form-group" name="" id="" cols="46" rows="4" placeholder="..."></textarea>
				</td>
			</tr>
			<tr>
				<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Difficulties/ Issues</th>
				<td>
					<textarea class="form-group" name="" id="" cols="46" rows="4" placeholder="..."></textarea>
				</td>
				<td>
					<textarea class="form-group" name="" id="" cols="46" rows="4" placeholder="..."></textarea>
				</td>
			</tr>
			<tr>
				<th class="bg-info text-white text-center table-fixed" style="width:15em;"><br><br>Solutions</th>
				<td>
					<textarea class="form-group" name="" id="" cols="46" rows="4" placeholder="..."></textarea>
				</td>
				<td>
					<textarea class="form-group" name="" id="" cols="46" rows="4" placeholder="..."></textarea>
				</td>
			</tr>
			<tr>
				<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>To Do (Plan)</th>
				<td>
					<textarea class="form-group" name="" id="" cols="46" rows="4" placeholder="..."></textarea>
				</td>
				<td>
					<textarea class="form-group" name="" id="" cols="46" rows="4" placeholder="..."></textarea>
				</td>
			</tr>
			<tr>					
				<th rowspan="2" class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br><br>Comment</th>
				<td>
					<textarea class="form-group" name="" id="" cols="46" rows="4" placeholder="..."></textarea>
				</td>
				<td>
					<textarea class="form-group" name="" id="" cols="46" rows="4" placeholder="..."></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="7" class="text-right" style="font-size: 25px; margin-top: 0.1em;">
					<button class="btn btn-circle text-white bg-info" onclick="addDay" title="Add day">
						<i class="mdi mdi-table-column-plus-after "></i>
					</button>
				</td>
			</tr>
			<tr>
				<td colspan="7">
					<textarea class="form-group" name="" id="" cols="128" rows="4" placeholder="Reflections for this week:"></textarea>

				</td>
			</tr>
			</tbody>
			<!-- </thead> -->
		</table>
		
		<br><br>
		<ul class="nav nav-tabs mr-auto fixed-bottom bg-dark">
			<li class="nav-item">
				<a href="#" class="nav-link text-white">Week1</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link text-white">Week2</a>
			</li>
			<li class="nav-item" style="font-size: 25px; margin-top: 0.1em;" data-toggle="modal" data-target="#addWeek">
				<a href="#" class="text-white" >
					<i class="mdi mdi-plus-box" data-toggle="tooltip" title="Add week"></i>
				</a>
			</li>
			
			<li class="nav-item text-right" style="margin: 0.1em 0em 0em 68em;">
				<input type="button" class="btn btn-warning" name="btn-submit" value="Save">
			</li>
		</ul>
		<!-- The Modal -->
		<div class="modal smalle" id="addWeek">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-footer">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<label class="modal-title">Add week :</label>
						<input type="text">
						<button type="button" class="btn btn-primary btn-submit" data-dismiss="modal">Add</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><br>
<!-- //body -->

