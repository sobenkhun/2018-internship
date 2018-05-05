<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-primary text-center">Tutors list</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<table id="example" class="table table-striped table-bordered bg-white" style="width:100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tutor Name</th>
						<th>Position</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Ashton Cox</td>
						<td>English Training</td>
						<td>
							<a href="<?php echo base_url();?>Welcome_IF/detailTutor">
								<i class="mdi mdi-eye text-info" style="font-size:24px;"></i>
							</a>
							<a href="<?php echo base_url();?>Welcome_IF/editTutor">
								<i class="mdi  mdi-pencil  text-success" style="font-size:24px;"></i>
							</a>
							<a href="#" onclick="return confirm('Are your sur want to delete this tutor?')">
								<i class="mdi  mdi-delete text-danger data-toggle ="tooltip" title="Delete this Company" style="font-size:24px;"></i>
							</a>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Ashton Cox</td>
						<td>Web Training</td>
						<td>
							<a href="<?php echo base_url();?>Welcome_IF/detailTutor">
								<i class="mdi mdi-eye text-info" style="font-size:24px;"></i>
							</a>
							<a href="<?php echo base_url();?>Welcome_IF/editTutor">
								<i class="mdi  mdi-pencil  text-success" style="font-size:24px;"></i>
							</a>
							<a href="#" onclick="return confirm('Are your sur want to delete this tutor?')">
								<i class="text-danger mdi  mdi-delete  data-toggle ="tooltip" title="Delete this Company" style="font-size:24px;"></i>
							</a>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Ashton Cox</td>
						<td>Web Training</td>
						<td>
							<a href="<?php echo base_url();?>Welcome_IF/detailTutor">
								<i class="mdi mdi-eye text-info" style="font-size:24px;"></i>
							</a>
							<a href="<?php echo base_url();?>Welcome_IF/editTutor">
								<i class="mdi  mdi-pencil  text-success" style="font-size:24px;"></i>
							</a>
							<a href="#" onclick="return confirm('Are your sur want to delete this tutor?')">
								<i class="text-danger mdi  mdi-delete  data-toggle ="tooltip" title="Delete this Company" style="font-size:24px;"></i>
							</a>
						</td>
					</tr>
				</tbody>

			</table>
		</div>
		<div class="col-md-1"></div>
	</div><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="<?php echo base_url();?>Welcome_IF/addTutor">
					<button class="btn btn-info"><span class="mdi mdi-account-plus" style="font-size:20px;"></span><i>  </i>New Tutor</button>
				</a>
			</div>
		</div>
	</div>
</div>
