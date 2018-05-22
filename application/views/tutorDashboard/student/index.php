
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
						<a href="<?php echo base_url(); ?>tutorDas/detailStudentDas?&id=<?php echo $student['id']; ?>">
							<i class="mdi mdi-eye text-info TCMDI"  data-toggle="tooltip" title="View " ></i>
						</a>
						<a href="<?php echo base_url(); ?>tutorDas/viewWorkLog">
							<i class="mdi   mdi mdi-book-open-page-variant text-dark TCMDI data-toggle="tooltip" title="  Work-log" ></i>
						</a>
						<a href="<?php echo base_url(); ?>tutorDas/CommStuDas" >
							<i class="mdi  mdi-comment box-back TCMDI"  data-toggle="tooltip" title="Comment" ></i>
						</a>
							
					</td>
				</tr>
				<?php endforeach ?>
				<tr>
			</tbody>
		</table>
	</div>
</div>
