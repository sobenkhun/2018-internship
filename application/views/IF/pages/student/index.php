
<!-- body -->
<div class="container con-body">
	<h3 class="text-primary text-center"><strong>Student List</strong></h3>
	<div class="row"><br><br>
		<table id="example" class="table table-striped table-bordered">
			<thead class="text-center">
				<tr>
					<th>ID</th>
					<th>Student Name</th>
					<th>Company</th>
					<th>Supervisor</th>
					<th>Tutor</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-center">1</td>
					<td>Devit Chea</td>
					<td>RCI</td>
					<td>Dara</td>
					<td>Channak</td>
					<td class="text-center">
						<a href="<?php echo base_url();?>Welcome_IF/comment">
							<i class="mdi  mdi-comment text-warning" style="font-size:24px;"></i>
						</a>
						<a href="<?php echo base_url();?>Welcome_IF/viewStudent">
							<i class="mdi mdi-eye text-info" style="font-size:24px;"></i>
						</a>
						<a href="<?php echo base_url();?>Welcome_IF/updateStudent">
							<i class="mdi  mdi-border-color text-success" style="font-size:24px;"></i>
						</a>
						<a href="" onclick = "return confirm('Are you sure that you want to delete this student?')">
							<i class="mdi mdi-delete text-danger" style="font-size:24px;"></i>
						</a>
					</td>
				</tr>
				<tr>
					<td class="text-center">2</td>
					<td>Ashton Cox</td>
					<td>PNC solution</td>
					<td>Dara Chan</td>
					<td>Channak Choun</td>
					<td class="text-center">
						<a href="<?php echo base_url();?>Welcome_IF/comment">
							<i class="mdi  mdi-comment text-warning mdi-24px" ></i>
						</a>
						<a href="<?php echo base_url();?>Welcome_IF/viewStudent" >
							<i class="mdi mdi-eye text-info mdi-24px" ></i>
						</a>
						<a href="<?php echo base_url(); ?>/Welcome_IF/updateStudent" >
							<i class="mdi  mdi-border-color text-success mdi-24px" ></i>
						</a>
						<a href="" onclick = "return confirm('Are you sure that you want to delete this student?')">
							<i class="mdi mdi-delete text-danger mdi-24px" ></i>
						</a>
					</td>
				</tr>
				<tr>
					<td class="text-center">3</td>
					<td>Ashton Cox</td>
					<td>PNC solution</td>
					<td>Dara Chan</td>
					<td>Rith Nhel</td>
					<td class="text-center">
						<a href="<?php echo base_url();?>Welcome_IF/comment">
							<i class="mdi  mdi-comment text-warning mdi-24px" ></i>
						</a>
						<a href="<?php echo base_url();?>Welcome_IF/viewStudent" >
							<i class="mdi mdi-eye text-info mdi-24px" ></i>
						</a>
						<a href="<?php echo base_url(); ?>/Welcome_IF/updateStudent" >
							<i class="mdi  mdi-border-color text-success mdi-24px" ></i>
						</a>
						<a href="" onclick = "return confirm('Are you sure that you want to delete this student?')">
							<i class="mdi mdi-delete text-danger mdi-24px" ></i>
						</a>
					</td>
				</tr>
				<tr>
					<td class="text-center">4</td>
					<td>Devit Chea</td>
					<td>RCI</td>
					<td>Dara</td>
					<td>Channak</td>
					<td class="text-center">
						<a href="<?php echo base_url();?>Welcome_IF/comment">
							<i class="mdi  mdi-comment text-warning mdi-24px" ></i>
						</a>
						<a href="<?php echo base_url();?>Welcome_IF/viewStudent" >
							<i class="mdi mdi-eye text-info mdi-24px" ></i>
						</a>
						<a href="<?php echo base_url(); ?>/Welcome_IF/updateStudent" >
							<i class="mdi  mdi-border-color text-success mdi-24px" ></i>
						</a>
						<a href="" onclick = "return confirm('Are you sure that you want to delete this student?')">
							<i class="mdi mdi-delete text-danger mdi-24px" ></i>
						</a>
					</td>
				</tr>
				<tr>
					<td class="text-center">5</td>
					<td>Devit Chea</td>
					<td>RCI</td>
					<td>Dara</td>
					<td>Channak</td>
					<td class="text-center">
						<a href="<?php echo base_url();?>Welcome_IF/comment">
							<i class="mdi  mdi-comment text-warning mdi-24px" ></i>
						</a>
						<a href="<?php echo base_url();?>Welcome_IF/viewStudent" >
							<i class="mdi mdi-eye text-info mdi-24px" ></i>
						</a>
						<a href="<?php echo base_url(); ?>/Welcome_IF/updateStudent" >
							<i class="mdi  mdi-border-color text-success mdi-24px" ></i>
						</a>
						<a href="" onclick = "return confirm('Are you sure that you want to delete this student?')">
							<i class="mdi mdi-delete text-danger mdi-24px" ></i>
						</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="row">
		<div class="col-md-12">
			<a href="<?php echo base_url();?>Welcome_IF/addStudent">
				<button class="btn btn-primary">
					<i class="mdi mdi-account-plus text-white mdi-20px"></i>New Student
				</button>
			</a>
		</div>
	</div>
</div>
