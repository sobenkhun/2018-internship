<link rel="stylesheet" type="text/css" href="../css/style.css">
<div class="container con-body">
	<div class="row">
		<a href="<?php echo base_url();?>cStudent/index">
			<button type="button" class="btn btn-primary">
				<i class="mdi mdi-chevron-left"></i>Back
			</button>
		</a>
	</div>	 
	<h3 class="text-primary text-center"><strong>Comment of student : Student Name</strong></h3>
	<br>
	<div class="row"><br><br>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<table id="studentList" class="table table-striped table-bordered bg-white">
				<thead class="text-center">
					<tr>
						<th>Date</th>
						<th>Comment</th>
						<th>Validate</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1 may 2018</td>
						<td class="text-center"> Devit is always let in meeting...</td>
						<td class="text-center">
							<i class="mdi  mdi-checkbox-marked-outline mdi-24px text-info"></i>
							<i class="mdi  mdi-pencil mdi-24px text-success"></i>
						</td>
					</tr>
					<tr>
						<td>14 may 2018</td>
						<td class="text-center"> Devit should buy a clock for...</td>
						<td class="text-center">
							<i class="mdi  mdi-close-box mdi-24px text-danger"></i>
							<i class="mdi  mdi-pencil mdi-24px text-success"></i>
						</td>
					</tr>
					<tr>
						<td>22 may 2018</td>
						<td class="text-center"> Devit is has always good at...</td>
						<td class="text-center">
							<i class="mdi  mdi-checkbox-marked-outline mdi-24px text-info"></i>
							<i class="mdi  mdi-pencil mdi-24px text-success"></i>
						</td>
					</tr>
					<tr>
						<td>1 may 2018</td>
						<td class="text-center"> Devit is geting better and...</td>
						<td class="text-center">
							<i class="mdi  mdi-close-box mdi-24px text-danger"></i>
							<i class="mdi  mdi-pencil mdi-24px text-success"></i>
						</td>
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
			<a href="<?php echo base_url();?>Welcome_IF/addComment">
				<button class="btn btn-primary">
					<i class="mdi mdi-account-plus text-white mdi-20px"></i>New Comment
				</button>
			</a>
		</div>
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8"></div>
	</div>
</div>
