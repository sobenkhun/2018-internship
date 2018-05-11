
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 class="text-center text-primary">Students List</h2>
        </div>
        <table id="studentList" class="table table-bordered bg-white" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                
                <th class="text-center">Action</th>
            </tr>
        </thead>
         <tbody>
        <?php foreach ($student as $student):?>
          <tr>
              <td><?php echo $student['userid']; ?></td>
              <td><?php echo $student['studentName']; ?></td>
              <td>
           <a href="<?php echo base_url();?>supervisor/studentDetail?&id=<?php echo $student['id']; ?>"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></span></a>
           <!-- <a href="<?php echo base_url();?>supervisor/editeCompany?&id=<?php echo $company['id']; ?>"><span class="mdi mdi-pencil mdi-24px fa-lg text-success" data-toggle ="tooltip" title="Edite "></span></a>
           <a href="<?php echo base_url();?>supervisor/deleteCompany?&id=<?php echo $company['id']; ?>" onclick="return confirm('Are you sure to delete this Company?');">
            <i class="text-danger mdi mdi-delete mdi-24px " data-toggle ="tooltip" title="Delete "></i>
          </a> -->
        </td>
          </tr>
          <?php endforeach ?>
    </tbody>
        <!-- <tbody>
            <tr>
                <td>3</td>
                 <td>Devit</td>
               
                <td class="text-center">
                <a href="<?php echo base_url() ?>/supervisor/profile" data-toggle="tooltip" title="View Profile"><i class="mdi mdi-eye text-info TCMDI"  ></i></a>
                </td>
            </tr>
        </tbody> -->
    </table>
    </div>
</div>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#studentList').DataTable();
} );
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
