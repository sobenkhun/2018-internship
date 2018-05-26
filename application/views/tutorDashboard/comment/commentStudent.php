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
						<th>Add comment</th>
					</tr>
				</thead>
				<tbody>
						<?php foreach ($comment as $getComment):?>			
						  
							
								
	
					<tr>
						<td class="text-center">1 may 2018</td>
						<td class="text-center"><?php echo $getComment['comment'];?></td>
						<td class="text-center"></td>

						<td class="text-center">
							<a href="href="<?php echo base_url();?>tutorDas/addCommStuDas">
								<i class="mdi  mdi-pencil mdi-24px text-success"></i>
							</a>
						</td>
					</tr>	
					
				</tbody>
			</table>
		</div>
		<!-- <div class="col-md-3"></div> -->
	</div>
	<div class="row">
		<div class="col-md-12">
			<a href="<?php echo base_url();?>tutorDas/addCommStuDas?&id=<?php echo $getComment['stu_id']; ?>">
					
					<?php endforeach ?>
				
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