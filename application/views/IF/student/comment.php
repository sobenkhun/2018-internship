
 <div class="container">
 	<div class="row">
 		<!-- <div class="col-md-2"></div> -->
 		<div class="col-md-2">
 			<a href="<?php echo base_url();?>tutorDas/listCommStuDas">
 			    <button type="button" class="btn btn-primary">
 				    <i class="mdi mdi-chevron-left"></i>Back
 			    </button>
 			</a>
 		</div>
 </div>	 

<div class="container con-body">
	
	<h3 class="text-primary text-center"><strong>Comment of student</strong></h3>
	<br>
	<br>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
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
		<div class="col-md-3"></div>
	</div>
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
			<button class="btn btn-primary"><i class="mdi mdi-plus-box " style="font-size: 20px;"></i>Add comment</button>
		</div>
		<div class="col-md-3"></div>
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