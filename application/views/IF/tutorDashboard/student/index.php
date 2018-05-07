<!-- body -->
<div class="container con-body">
	<h3 class="text-primary text-center"><strong>Students List</strong></h3>
	<div class="row"><br><br>
		<table id="example" class="table table-striped table-bordered" style="width:100%">
			<thead class="text-center">
				<tr>
					<th class="text-center">ID</th>
					<th class="text-center">Student Name</th>
					<th class="text-center">Company</th>
					<th class="text-center">Supervisor</th>
					<th class="text-center">Tutor</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-center">2018023</td>
					<td class="text-center">Devit Chea</td>
					<td class="text-center">RCI</td>
					<td class="text-center">Dara</td>
					<td class="text-center">Channak</td>
					<td class="text-center">
						<a href="<?php echo base_url(); ?>tutorDas/detailStudentDas" )">
							<i class="mdi mdi-eye text-info TCMDI"  data-toggle="tooltip" title="View " ></i>
						</a>
						<a href="<?php echo base_url(); ?>tutorDas/viewWorkLog">
							<i class="mdi  mdi mdi-book-open-page-variant text-dark TCMDI data-toggle="tooltip" title=" Work-log "  ></i>
                                                      
						</a>
						<a href="<?php echo base_url(); ?>tutorDas/CommStuDas">
							<i class="mdi  mdi-comment text-warning TCMDI"  data-toggle="tooltip" title="Comment"  ></i>
						</a>
						
						
					</td>
				</tr>
				<tr>
					<td class="text-center">2018024</td>
					<td class="text-center">Ashton Cox</td>
					<td class="text-center">PNC solution</td>
					<td class="text-center">Dara Chan</td>
					<td class="text-center">Channak Choun</td>
					<td class="text-center">
						<a href="<?php echo base_url(); ?>tutorDas/detailStudentDas" )">
							<i class="mdi mdi-eye text-info TCMDI"  data-toggle="tooltip" title="View " ></i>
						</a>
						<a href="<?php echo base_url(); ?>tutorDas/viewWorkLog" >
							<i class="mdi    mdi mdi-book-open-page-variant text-dark TCMDI data-toggle="tooltip" title=" Work-log" ></i>
						</a>
						<a href="<?php echo base_url(); ?>tutorDas/tutorDas/CommStuDas" >
							<i class="mdi  mdi-comment text-warning TCMDI"  data-toggle="tooltip" title="Comment" ></i>
						</a>
						
						
					</td>
				</tr>
				<tr>
					<td class="text-center">2018025</td>
					<td class="text-center">Ashton Cox</td>
					<td class="text-center"></td>>PNC solution</td>
					<td class="text-center">Dara Chan</td>
					<td class="text-center">Rith Nhel</td>
					<td class="text-center">
						<a href="<?php echo base_url(); ?>tutorDas/detailStudentDas" )">
							<i class="mdi mdi-eye text-info TCMDI"  data-toggle="tooltip" title="View " ></i>
						</a>
						<a href="<?php echo base_url(); ?>tutorDas/viewWorkLog">
							<i class="mdi  mdi mdi-book-open-page-variant text-dark data-toggle="tooltip" title=" Work-log" style="font-size:24px;"></i>
						</a>
						<a href="<?php echo base_url(); ?>tutorDas/CommStuDas">
							<i class="mdi  mdi-comment text-warning TCMDI"  data-toggle="tooltip" title="Comment" ></i>
						</a>
						

						
						
					</td>
				</tr>
				<tr>
					<td class="text-center">2018027</td>
					<td class="text-center">Devit Chea</td>
					<td class="text-center">RCI</td>
					<td class="text-center">Dara</td>
					<td class="text-center">Channak</td>
					<td class="text-center">
						<a href="<?php echo base_url(); ?>tutorDas/detailStudentDas" )">
							<i class="mdi mdi-eye text-info TCMDI"  data-toggle="tooltip" title="View " ></i>
						</a>
						<a href="<?php echo base_url(); ?>tutorDas/viewWorkLog" >
							<i class="mdi   mdi mdi-book-open-page-variant text-dark TCMDI data-toggle="tooltip" title=" Work-log" ></i>
						</a>
						<a href="<?php echo base_url(); ?>tutorDas/CommStuDas" >
							<i class="mdi mdi-comment text-warning TCMDI"  data-toggle="tooltip" title="Comment" ></i>
						</a>
						
						
					</td>
				</tr>
				<tr>
					<td class="text-center">2018029</td>
					<td class="text-center">Devit Chea</td>
					<td class="text-center">RCI</td>
					<td class="text-center">Dara</td>
					<td class="text-center">Channak</td>
					<td class="text-center">
						<a href="<?php echo base_url(); ?>tutorDas/detailStudentDas" )">
							<i class="mdi mdi-eye text-info TCMDI"  data-toggle="tooltip" title="View " ></i>
						</a>
						<a href="<?php echo base_url(); ?>tutorDas/viewWorkLog">
							<i class="mdi   mdi mdi-book-open-page-variant text-dark TCMDI data-toggle="tooltip" title="  Work-log" ></i>
						</a>
						<a href="<?php echo base_url(); ?>tutorDas/CommStuDas" >
							<i class="mdi  mdi-comment text-warning TCMDI"  data-toggle="tooltip" title="Comment" ></i>
						</a>
						
						
					</td>
				</tr>
			</tbody>
		</table>
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
