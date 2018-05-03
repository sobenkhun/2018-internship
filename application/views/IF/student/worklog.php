<!-- body -->
<div class="row-fluid">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h3 class="text-primary text-center"><strong>Weekly work-log report</strong></h3>
		<br>
		<table class="table table-bordered table-hover table-responsive table-fixed">
			<thead class="bg-info text-white">
				<tr>
					<th>Date & Time</th>
					<!-- <th>Time</th> -->
					<th>Work Activities</th>
					<th>What did you learn?</th>
					<th>Difficulties/Issues</th>
					<th>Solutions</th>
					<th>To Do (Plan)</th>
					<th>Comment</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>
						<input class="form-control" type="date" value="DD/MM/YYY"><br>
						<input class="form-control" type="time" value="h:m">
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
						<input class="form-control" type="time" value="h:m">
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
			</tbody>
		</table>
		<!-- <table class="table table-dark"> -->
			<ul class="nav nav-tabs fixed-bottom bg-dark">
				<li class="nav-item">
					<a href="#" class="nav-link text-white">Week1</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link text-white">Week2</a>
				</li>
				<li class="nav-item" style="font-size: 25px; margin-top: 0.1em;" data-toggle="modal" data-target="#addWeek">
					<a href="#" class="text-white"><i class="mdi mdi-plus-box"></i></a>
				</li>
			</ul>
		<!-- </table> -->
		<!-- The Modal -->
		<div class="modal fade" id="addWeek">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Add week</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<div class="comment">
							<label for="">Comment</label>
							<input type="text">
						</div>
						<div class="text-right">
							<button type="button" class="btn btn-primary btn-submit" data-dismiss="modal">Add</button>
						</div>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
					</div>

				</div>
			</div>
		</div>
	</div>
</div><br>
<!-- //body -->
