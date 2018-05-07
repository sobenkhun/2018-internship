
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center text-primary">Companies List</h2>
		</div>
	</div>
	<div class="row">

		<div class="col-md-12">
			<br><br>
			<table id="example" class="table table-striped table-bordered tTable">
				<thead>
					<tr>
						<th class="text-center">CID</th>
						<th class="text-center">Company</th>
						<th class="text-center">Location</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center">001</td>
						<td class="text-center"><a href="https://www.khmerdev.com/en/" target="_blank">KhmerDev</a></td>
						<td class="text-center">Phnom Penh</td>
						<td class="text-center">
							
							<a href="<?php echo base_url();?>tutorDas/cDetailDas">
								<span class="mdi mdi-eye mdi-24px text-info data-toggle="tooltip" title="View Profile""></span>
							</a>

						</td>
					</tr>
					<tr>
						<td class="text-center">002</td>
						<td class="text-center">CodinGate</td>
						<td class="text-center">Phnom Penh</td>
						<td class="text-center">
							
							<a href="<?php echo base_url();?>tutorDas/cDetailDas"><span class="mdi mdi-eye mdi-24px text-info data-toggle="tooltip" title="View Profile""></span></a>

						</td>
					</tr>
					<tr>
						<td class="text-center">003</td>
						<td class="text-center">Web Essentails</td>
						<td class="text-center">Phnom Penh</td>
						<td class="text-center">
							
							<a href="<?php echo base_url();?>tutorDas/cDetailDas"><span class="mdi mdi-eye mdi-24px text-info data-toggle="tooltip" title="View Profile""></span></a>
							
						</td>
					</tr>
					<tr>
						<td class="text-center">004</td>
						<td class="text-center">Virtual Company</td>
						<td class="text-center">Phnom Penh</td>
						<td class="text-center">
							
							<a href="<?php echo base_url();?>tutorDas/cDetailDas"><span class="mdi mdi-eye mdi-24px text-info data-toggle="tooltip" title="View Profile""></span></a>
							
						</td>
					</tr>
				</tbody>

			</table>
		</div>

	</div>
	<br>
	
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

