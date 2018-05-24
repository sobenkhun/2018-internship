<div class="container ">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-primary text-center"><strong>Tutors list</strong></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table id="example" class="table table-striped table-bordered bg-white" style="width:100%">
				<thead>
					<tr>
						<th class="text-center">ID</th>
						<th>Tutor Name</th>
						<th>Position</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>

					<?php foreach ($tutors as $tutor):?>
					<tr>
						<td class="text-center"><?php echo $tutor['id']; ?></td>
						<td><?php echo $tutor['firstname']; echo " "; echo $tutor['lastname']; ?></td>
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
	</div><br>
</div>



