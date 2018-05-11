
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
              <td><?php echo $student['id']; ?></td>
              <td><?php echo $student['studentName']; ?></td>
              <td>
                <a href="<?php echo base_url();?>supervisor/questionnaire?&id=<?php echo $student['id']; ?>"><span class="mdi mdi-book-minus mdi-24px text-info" data-toggle ="tooltip" title="View "></span></a>    
            </td>
          </tr>
          <?php endforeach ?>
    </tbody>
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

