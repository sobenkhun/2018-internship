
<!-- body -->
<div class="container con-body">
	<h3 class="text-primary text-center"><strong>Students List</strong></h3>
	<div class="row"><br><br>
		<table id="example" class="table table-striped table-bordered bg-white">
			<thead>
				<tr>
					<th class="text-center">ID</th>
					<th>Student Name</th>
					<th>Company</th>
					<th>Supervisor</th>
					<th>Tutor</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				 <?php foreach ($student as $student):?>
				<tr>
					<td class="text-center"><?php echo $student['id']; ?></td>
					<td><?php echo $student['stuFName']." ".$student['stuLName']; ?></td>
					<td><?php echo $student['name']; ?></td>
					<td><?php echo $student['suFName']." ".$student['suLName']; ?></td>
					<td><?php echo $student['tFName']." ".$student['tLName']; ?></td>
					<td class="text-center">
						<a href="<?php echo base_url();?>tutorDas/detailStudentDas?&id=<?php echo $student['id']; ?>">
							<i class="mdi mdi-eye text-info mdi-24px" data-toggle ="tooltip" title="View "></i>
						</a>
						<a href="<?php echo base_url();?>tutorDas/viewWorkLog" data-toggle ="tooltip" title="View Worklog">
							<i class="mdi  mdi-book-open-page-variant text-dark mdi-24px"></i>
						</a>
						<a href="<?php echo base_url();?>tutorDas/CommStuDas?&id=<?php echo $student['id'] ?>" data-toggle ="tooltip" title="View Comment">
							<i class="mdi  mdi-comment mdi-24px box-back" ></i>
						</a>
					</td>
					
				</tr>
				 <?php endforeach ?>
				
			</tbody>
		</table>
	</div>
	
</div>
