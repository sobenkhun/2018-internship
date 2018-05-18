
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
					<th>Work-log</th>
					<th>Action</th>
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
						<a href="<?php echo base_url();?>Welcome_IF/worklog" data-toggle ="tooltip" title="View Worklog">
							<i class="mdi  mdi-book-open-page-variant text-dark mdi-24px"></i>
						</a>
						<a href="<?php echo base_url();?>Welcome_IF/comment?&id=<?php echo $student['id'] ?>" data-toggle ="tooltip" title="View Comment">
							<i class="mdi  mdi-comment mdi-24px box-back" ></i>
						</a>
					</td>
					<td class="text-center">
						
						<a href="<?php echo base_url();?>Welcome_IF/viewStudentData?&id=<?php echo $student['id']; ?>">
							<i class="mdi mdi-eye text-info mdi-24px" data-toggle ="tooltip" title="View "></i>
						</a>
						<a href="<?php echo base_url();?>Welcome_IF/updateStudent?&id=<?php echo $student['id']; ?>" data-toggle ="tooltip" title="Edit">
							<i class="mdi  mdi-border-color text-success mdi-24px" ></i>
						</a>
						<a href="<?php echo base_url();?>Welcome_IF/deleteStudent?&id=<?php echo $student['id']; ?>" onclick = "return confirm('Are you sure that you want to delete this student?')" data-toggle ="tooltip" title="Delete ">
							<i class="mdi mdi-delete text-danger mdi-24px" ></i>
						</a>
					</td>
				</tr>
				 <?php endforeach ?>
				
			</tbody>
		</table>
	</div>
	<div class="row">
		<div class="col-md-12">
			<a href="<?php echo base_url();?>Welcome_IF/addStudent">
				<button class="btn btn-primary">
					<i class="mdi mdi-account-plus text-white mdi-20px">  </i>New Student
				</button>
			</a>
		</div>
	</div>
</div>
