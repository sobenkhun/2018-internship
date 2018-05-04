<!-- body -->
<div class="container">
	<div class="row">
		<!-- <div class="col-md-2"></div> -->
		<div class="col-md-2">
			<a href="<?php echo base_url();?>tutorDas/studentDas">
			    <button type="button" class="btn btn-primary">
				    <i class="mdi mdi-chevron-left"></i>Back
			    </button>
			</a>
		</div>
</div>	 
<div class="container con-body">

	<h3 class="text-primary text-center"><strong>Comment student </strong></h3>
	<div class="row"><br><br>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead class="text-center">
					<tr>
						<th>ID</th>
						<th>Student </th>
						<th>Action </th>
						
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center">1</td>
						<td>Devit Chea</td>	
						<td>
							<a href="<?php echo base_url(); ?>tutorDas/CommStuDas">
								<i class="mdi  mdi-comment text-primary" style="font-size:24px;"></i>
							</a>
						</td>
					</tr>
					<tr>
						<td class="text-center">1</td>
						<td>Devit Chea</td>	
						<td>
							<a href="<?php echo base_url(); ?>tutorDas/CommStuDas">
								<i class="mdi  mdi-comment text-primary" style="font-size:24px;"></i>
							</a>
						</td>
					</tr>
					<tr>
						<td class="text-center">1</td>
						<td>Devit Chea</td>	
						<td>
							<a href="<?php echo base_url(); ?>tutorDas/CommStuDas">
								<i class="mdi  mdi-comment text-primary" style="font-size:24px;"></i>
							</a>
						</td>
					</tr>
					<tr>
						<td class="text-center">1</td>
						<td>Devit Chea</td>	
						<td>
							<a href="<?php echo base_url(); ?>tutorDas/CommStuDas">
								<i class="mdi  mdi-comment text-primary" style="font-size:24px;"></i>
							</a>
						</td>
					</tr>
					
					
					
					
				</tbody>
			</table>
		</div>
		<div class="col-md-2"></div>
		
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