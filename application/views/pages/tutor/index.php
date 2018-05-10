
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-primary text-center">Tutors List</h2>
		</div>
	</div>
	<div class="row">
		<!-- <div class="col-md-1"></div> -->
		<div class="col-md-12">
			<table id="example" class="table table-striped table-bordered bg-white">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tutor Name</th>
						<th>Position</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
			<?php foreach ($tutor as $tutor):?>
          <tr>
              <td><?php echo $tutor['userid']; ?></td>
              <td><?php echo $tutor['tutorName']; ?></td>
              <td><?php echo $tutor['position']; ?></td>
              <td>
           <a href="<?php echo base_url();?>Welcome_IF/detailTutor?&id=<?php echo $tutor['userid']; ?>"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></span></a>
           <a href="<?php echo base_url();?>Welcome_IF/editTutor?&id=<?php echo $tutor['userid']; ?>"><span class="mdi mdi-pencil mdi-24px fa-lg text-success" data-toggle ="tooltip" title="Edite "></span></a>
           <a href="<?php echo base_url();?>Welcome_IF/deleteTutor?&id=<?php echo $tutor['userid']; ?>" onclick="return confirm('Are you sure to delete this Company?');">
            <i class="text-danger mdi mdi-delete mdi-24px " data-toggle ="tooltip" title="Delete "></i>
          </a>
        </td>
          </tr>
          <?php endforeach ?>
				</tbody>

			</table>
		</div>
		<!-- <div class="col-md-1"></div> -->
	</div><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="<?php echo base_url();?>Welcome_IF/addTutor">
					<button class="btn btn-info"><span class="mdi mdi-account-plus" style="font-size:20px;"></span><i>  </i>New Tutor</button>
				</a>
			</div>
		</div>
	</div>
</div>
