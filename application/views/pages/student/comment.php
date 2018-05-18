
<div class="container con-body">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<a href="<?php echo base_url();?>cStudent/index">
				<button type="button" class="btn btn-primary">
					<i class="mdi mdi-chevron-left"></i>Back
				</button>
			</a>
			<h3 class="text-primary text-center"><strong>Student Comments</strong></h3>
		</div>
	</div>	 
	<br>
	<div class="row"><br><br>
		<!-- <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div> -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
							<a href="#"><span class="mdi mdi-checkbox-marked-outline mdi-24px text-info" data-toggle ="tooltip" title="validated"></span></a>
							<a href="#"><span class="mdi mdi-pencil mdi-24px text-success" data-toggle ="tooltip" title="edit"></span></a>
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
	</div>
</div>
