
<!-- body -->
<div class="row-fluid">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h3 class="text-primary text-center"><strong>Weekly work-log report</strong></h3>
		<br>
		<table class="table table-bordered table-hover table-responsive">
			<thead class="bg-info text-white text-center table-fixed">
				<tr>
					<th>Date & Time</th>
					<th>Work Activities</th>
					<th>What did you learn?</th>
					<th>Difficulties/ Issues</th>
					<th>Solutions</th>
					<th>To Do (Plan)</th>
					<th>Comment</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>
						<input class="form-control" type="date" value="DD/MM/YYY"><br>
						<input class="form-control" type="text" placeholder="Time to Time">
					</td>
					<td>
						<textarea class="form-group" name="" id="" cols="25" rows="4" placeholder="..."></textarea>
					</td>	
					<td>
						<textarea class="form-group" name="" id="" cols="25" rows="4" placeholder="..."></textarea>
					</td>		
					<td>
						<textarea class="form-group" name="" id="" cols="25" rows="4" placeholder="..."></textarea>
					</td>			
					<td>
						<textarea class="form-group" name="" id="" cols="25" rows="4" placeholder="..."></textarea>
					</td>				
					<td>
						<textarea class="form-group" name="" id="" cols="25" rows="4" placeholder="..."></textarea>
					</td>
					<td>
						<textarea class="form-group" name="" id="" cols="25" rows="4" placeholder="..."></textarea>
					</td>					
				</tr>
				<tr>
					<td>
						<input class="form-control" type="date" value="DD/MM/YYY"><br>
						<input class="form-control" type="text" placeholder="Time to Time">
					</td>
					<td>
						<textarea class="form-group" name="" id="" cols="25" rows="4" placeholder="..."></textarea>
					</td>	
					<td>
						<textarea class="form-group" name="" id="" cols="25" rows="4" placeholder="..."></textarea>
					</td>		
					<td>
						<textarea class="form-group" name="" id="" cols="25" rows="4" placeholder="..."></textarea>
					</td>			
					<td>
						<textarea class="form-group" name="" id="" cols="25" rows="4" placeholder="..."></textarea>
					</td>				
					<td>
						<textarea class="form-group" name="" id="" cols="25" rows="4" placeholder="..."></textarea>
					</td>
					<td>
						<textarea class="form-group" name="" id="" cols="25" rows="4" placeholder="..."></textarea>
					</td>					
				</tr>
				<tr>
					<td colspan="7">
						<a href="#" class="text-primary" style="font-size: 24px;">
							<i class="mdi mdi-plus-box" data-toggle="tooltip" title="Add New Sheet"></i>
						</a>
					</td>
				</tr>
				<tr>
					<td colspan="7">
						<textarea class="form-group" name="" id="" cols="210" rows="4" placeholder="Reflections for this week:"></textarea>

					</td>
				</tr>
			</tbody>
		</table>
		<ul class="nav nav-tabs mr-auto fixed-bottom bg-dark">
			<li class="nav-item">
				<a href="#" class="nav-link text-white">Week1</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link text-white">Week2</a>
			</li>
			<li class="nav-item" style="font-size: 25px; margin-top: 0.1em;" data-toggle="modal" data-target="#addWeek">
				<a href="#" class="text-white" >
					<i class="mdi mdi-plus-box" data-toggle="tooltip" title="Add New Sheet"></i>
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

