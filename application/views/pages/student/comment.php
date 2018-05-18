
<div class="container con-body">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<a href="<?php echo base_url();?>Welcome_IF/student">
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
						<th>Tutor Comments</th>
						<th>Validate</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-center">
						<td>1 may 2018</td>
						<td> Devit is always let in meeting...</td>
						<td class="text-center">
							<a href="#"><span class="mdi mdi-checkbox-marked-outline mdi-24px text-info" data-toggle ="tooltip" title="validated"></span></a>
							<a href="#"><span class="mdi mdi-pencil mdi-24px text-success" data-toggle ="tooltip" title="edit"></span></a>
						</td>
					</tr>
					<tr class="text-center">
						<td>14 may 2018</td>
						<td> Devit should buy a clock for...</td>
						<td>
							<i class="mdi  mdi-close-box mdi-24px text-danger"></i>
							<i class="mdi  mdi-pencil mdi-24px text-success"></i>
						</td>
					</tr>
					<tr class="text-center">
						<td>22 may 2018</td>
						<td> Devit is has always good at...</td>
						<td>
							<i class="mdi  mdi-checkbox-marked-outline mdi-24px text-info"></i>
							<i class="mdi  mdi-pencil mdi-24px text-success"></i>
						</td>
					</tr>
					<tr class="text-center">
						<td>1 may 2018</td>
						<td> Devit is geting better and...</td>
						<td>
							<i class="mdi  mdi-close-box mdi-24px text-danger"></i>
							<i class="mdi  mdi-pencil mdi-24px text-success"></i>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
</div>
