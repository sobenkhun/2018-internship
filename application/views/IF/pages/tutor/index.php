




<div class="row">
	<div class="col-md-12">
		<h3 class="text-primary text-center">Tutors list</h3>
	</div>
</div>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<br><br>
		<table id="example" class="table table-striped table-bordered" style="width:100%">
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
						<a href="<?php echo base_url();?>Welcome_IF/detailTutor"><span class="mdi mdi-eye text-success" style="font-size:24px;"></a>
						<a href="<?php echo base_url();?>Welcome_IF/editTutor"><span class="mdi  mdi-pencil  text-primary" style="font-size:24px;"></span></a>


						<a href="#" onclick="return confirm('Are your sur want to delete this tutor?')"><i class="text-danger mdi  mdi-delete  data-toggle ="tooltip" title="Delete this Company" style="font-size:24px;"></i></a>
					</td>

					</tr>
					<tr>
						<td>2</td>
						<td>Ashton Cox</td>
						<td>Web Training</td>
						<td>
							<a href="<?php echo base_url();?>Welcome_IF/detailTutor"><span class="mdi mdi-eye text-success" style="font-size:24px;"></a>
							<a href="<?php echo base_url();?>Welcome_IF/editTutor"><span class="mdi  mdi-pencil  text-primary" style="font-size:24px;"></span></a>


							<a href="#" onclick="return confirm('Are your sur want to delete this tutor?')"><i class="text-danger mdi  mdi-delete  data-toggle ="tooltip" title="Delete this Company" style="font-size:24px;"></i></a>
							</td>

						</tr>
						<tr>
							<td>3</td>
							<td>Ashton Cox</td>
							<td>Web Training</td>
							<td>
								<a href="<?php echo base_url();?>Welcome_IF/detailTutor"><span class="mdi mdi-eye text-success" style="font-size:24px;"></a>
								<a href="<?php echo base_url();?>Welcome_IF/editTutor"><span class="mdi  mdi-pencil  text-primary" style="font-size:24px;"></span></a>


								<a href="#" onclick="return confirm('Are your sur want to delete this tutor?')"><i class="text-danger mdi  mdi-delete  data-toggle ="tooltip" title="Delete this Company" style="font-size:24px;"></i></a>
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
							<button class="btn btn-primary"><span class="mdi mdi-account-plus" style="font-size:20px;"></span><i>  </i>  Create New Tutor</button>
						</a>
					</div>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
			<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

			<script>
				$(document).ready(function() {
					$('#example').DataTable();
				} );
			</script>