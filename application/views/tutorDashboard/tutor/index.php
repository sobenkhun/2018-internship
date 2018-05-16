
<div class="container ">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-primary text-center">Tutors list</h2>
		</div>
	</div>
	<div class="row">
		<!-- <div class="col-md-1"></div> -->
		<div class="col-md-12">
			<table id="example" class="table table-striped table-bordered bg-white" style="width:100%">
				<thead>
					<tr>
						<th class="text-center">ID</th>
						<th class="text-center">Tutor Name</th>
						<th class="text-center">Position</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($tutor as $tutor):?>
					<tr>
						<td class="text-center"><?php echo $tutor['id']; ?></td>
						<td><?php echo $tutor['tutorName']; ?></td>
						<td><?php echo $tutor['position']; ?></td>
						<td class="text-center">
							<a href="<?php echo base_url();?>tutorDas/tutorDtail?&id=<?php echo $tutor['id']; ?>">
								<i class="mdi mdi-eye text-info data-toggle ="tooltip" title="view  " style="font-size:24px;"></i>
							</a>
							
						</td>
					</tr>
					<?php endforeach ?>
					
				</tbody>

			</table>
		</div>
		<!-- <div class="col-md-1"></div> -->
	</div><br>
	
</div>
<!-- jquey -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
<!-- js datatable -->
<script src="<?php echo base_url();?>assets/DataTable/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
<!-- js bootstrap datatable -->
<script src="<?php echo base_url();?>assets/DataTable/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url();?>assets/tether-1.4.3/js/tether.min.js"></script>
<script src="<?php echo base_url();?>assets/js/popper-1.12.9..min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap-4.0.0/js/bootstrap.min.js"></script>
<!-- custom js -->
<script src="<?php echo base_url();?>assets/js/customJs.js"></script>
