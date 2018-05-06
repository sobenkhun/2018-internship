
<div class="container con-body">
	<div class="row">
		<a href="<?php echo base_url();?>Welcome_IF/student">
			<button type="button" class="btn btn-primary">
				<i class="mdi mdi-chevron-left"></i>Back
			</button>
		</a>
	</div>	 
	<h3 class="text-primary text-center"><strong>Comment of student</strong></h3>
	<div class="row"><br><br>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<table id="studentList" class="table table-striped table-bordered bg-white" style="width:100%">
				<thead class="text-center">
					<tr>
						<th>Date</th>
						<th>Student</th>
						<th>Comment</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center">1</td>
						<td>1 may 2018</td>
						<td class="text-center"> Devit is always let in meeting...</td>
					</tr>
					<tr>
						<td class="text-center">1</td>
						<td>14 may 2018</td>
						<td class="text-center"> Devit should buy a clock for...</td>
					</tr>
					<tr>
						<td class="text-center">1</td>
						<td>22 may 2018</td>
						<td class="text-center"> Devit is has always good at...</td>
					</tr>
					<tr>
						<td class="text-center">1</td>
						<td>1 may 2018</td>
						<td class="text-center"> Devit is geting better and...</td>
					</tr>

				</tbody>
			</table>
		</div>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
	</div>
	<div class="row">
		<!-- <div class="col-md-"></div> -->
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right">
			<a href="<?php echo base_url();?>Welcome_IF/addStudent">
				<button class="btn btn-primary">
					<i class="mdi mdi-account-plus text-white" style="font-size:20px;"></i>New Comment
				</button>
			</a>
		</div>
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8"></div>
	</div>
</div>
