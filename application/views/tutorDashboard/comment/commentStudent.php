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
	<h3 class="text-primary text-center"><strong>Comment of student</strong></h3>
	<div class="row">
		<!-- <div class="col-md-3"></div> -->
		<div class="col-md-12">
			<table id="example" class="table table-striped table-bordered tTabla">
				<thead class="text-center">
					<tr>
						<th>Date</th>	
						<th>Student comment</th>
						<th>Tutor comment</th>
						<th>Validate</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center">1 may 2018</td>
						<td class="text-center"> Devit is always let in meeting...</td>
						<td class="text-center"> Devit is always let in meeting...</td>
						<td class="text-center">
							<i class="mdi  mdi-close-box mdi-24px text-danger"></i>
							
						</td>
					</tr>
					<tr>
						
						<td class="text-center">14 may 2018</td>
						<td class="text-center"> Devit should buy a clock for...</td>
						<td class="text-center"> Devit should buy a clock for...</td>
						<td class="text-center">
							<i class="mdi  mdi-close-box mdi-24px text-danger"></i>
							
						</td>
					</tr>
					<tr>
						<td class="text-center">22 may 2018</td>
						<td class="text-center"> Devit is has always good at...</td>
						<td class="text-center"> Devit is has always good at...</td>
						<td class="text-center">
							<i class="mdi  mdi-close-box mdi-24px text-danger"></i>
							
						</td>
					</tr>
					<tr>
						<td class="text-center">1 may 2018</td>
						<td class="text-center"> Devit is geting better and...</td>
						<td class="text-center"> Devit is geting better and...</td>
						<td class="text-center">
							<i class="mdi  mdi-close-box mdi-24px text-danger"></i>
							
						</td>
					</tr>
					
				</tbody>
			</table>
		</div>
		<!-- <div class="col-md-3"></div> -->
	</div>
	<div class="row">
		<div class="col-md-12">
			<a href="<?php echo base_url();?>tutorDas/addCommStuDas">
				<button class="btn btn-primary tBtn"><i class="mdi mdi-plus-box "></i>Add comment</button>
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