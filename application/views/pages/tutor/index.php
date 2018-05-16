
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
						<th class="text-center">ID</th>
						<th>Tutor Name</th>
						<th>Position</th>
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
           <a href="<?php echo base_url();?>Welcome_IF/detailTutor?&id=<?php echo $tutor['id']; ?>"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></span></a>
           <a href="<?php echo base_url();?>Welcome_IF/loadEditTutor?&id=<?php echo $tutor['id']; ?>"><span class="mdi mdi-pencil mdi-24px fa-lg text-success" data-toggle ="tooltip" title="Edite "></span></a>
           <a href="<?php echo base_url();?>Welcome_IF/deleteTutor?&id=<?php echo $tutor['id']; ?>" onclick="return confirm('Are you sure to delete this tutor ?');">
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
				<a href="<?php echo base_url();?>Welcome_IF/loadAddTutor">
					<button class="btn btn-primary"><span class="mdi mdi-20px mdi-account-plus "></span><i>  </i>New Tutor</button>
				</a>
			</div>
		</div>
	</div>
</div>
