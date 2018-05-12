
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h2 class="text-center text-primary">Supervisors List</h2>
		</div>
		<table id="example" class="table table-striped table-bordered bg-white">
        <thead>
            <tr>
                <th>ID</th>
                <th>Company Name</th>
                <th>Supervisor Name</th>
                <th class="text-center">Questionniare</th>

                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($supervisor as $supervisor):?>
          <tr>
              <td><?php echo $supervisor['id']; ?></td>
              <td><?php echo $supervisor['name']; ?></td>
              <td><?php echo $supervisor['supervisorName']; ?></td>
              <td class="text-center">
                    <a href="<?php echo base_url() ?>Welcome_IF/questionniare?&id=<?php echo $supervisor['id']; ?>"><i class="mdi mdi-book-minus mdi-24px text-dark" data-toggle ="tooltip" title=" Questionniare"></i></a>
                    
                </td>
              <td>
           <a href="<?php echo base_url();?>Welcome_IF/viewSupervisor?&id=<?php echo $supervisor['id']; ?>"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></span></a>
           <a href="<?php echo base_url();?>Welcome_IF/editTutor?&id=<?php echo $supervisor['id']; ?>"><span class="mdi mdi-pencil mdi-24px fa-lg text-success" data-toggle ="tooltip" title="Edite "></span></a>
           <a href="<?php echo base_url();?>Welcome_IF/deleteTutor?&id=<?php echo $supervisor['id']; ?>" onclick="return confirm('Are you sure to delete this Company?');">
            <i class="text-danger mdi mdi-delete mdi-24px " data-toggle ="tooltip" title="Delete"></i>
          </a>
        </td>
          </tr>
          <?php endforeach ?>
            
        </tbody>
    </table>
	</div>
    <a href="<?php echo base_url(); ?>Welcome_IF/createSupervisor">
		<button class="btn btn-primary"><i class="mdi mdi-account-plus mdi-24px"></i>New Supervisor</button>
	</a>

</div>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>