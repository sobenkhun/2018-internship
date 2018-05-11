
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
<!-- <style>
    .mdi:hover:after {
    content: "Questionnair";

    display: inline;
    font-size: 0.71em !important;
    color: grey;
    /*position: absolute;*/
    transition-delay: 2s;
    top: -16px;
    right: -16px;
    width: 40px;
    /*background: lightblue;*/
}
</style> -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-primary text-center">Students list for questionnaire</h2>
        </div>
    </div>
    <div class="row">
        <table id="studentList" class="table table-bordered bg-white" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                
                <th>Action</th>
            </tr>
        </thead>
             <tbody>
            <?php foreach ($student as $student):?>
              <tr>
                  <td><?php echo $student['userid']; ?></td>
                  <td><?php echo $student['studentName']; ?></td>
                  <td>
               <!-- <a href="<?php echo base_url();?>supervisor/studentDetail?&id=<?php echo $student['id']; ?>"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></span></a> -->
              
            </td>
              </tr>
              <?php endforeach ?>
        </tbody>
        <!-- <tbody>
            <tr>
                <td>3</td>
                 <td>Devit</td>
               
                <td>
                <a href="<?php echo base_url() ?>/supervisor/questionnair" data-toggle="tooltip" title="Questionnair"><i class="mdi mdi-book-minus text-success" style="font-size: 24px;" ></i></a>
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
