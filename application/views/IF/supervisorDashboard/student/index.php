
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
    <div class="col-md-4">
      <a href="<?php echo base_url(); ?>supervisor/index" >
        <button class="btn btn-primary"><i class="mdi mdi-chevron-left"></i>Back</button>
      </a>
    </div>
    <div class="col-md-4"></div>
    
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 class="text-center text-primary">Student List</h2>
        </div>
        <table id="studentList" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Bunthean</td>
                
                <td>
                <a href="<?php echo base_url() ?>/supervisor/questionnair" data-toggle="tooltip" title="Questionnair" ><i class="mdi mdi-checkbox-marked-outline text-success" style="font-size: 24px; " ></i></a>
                </td>

            </tr>
            <tr>
                <td>2</td>
                <td>Prem</td>
                
                <td>
                <a href="<?php echo base_url() ?>/supervisor/questionnair" data-toggle="tooltip" title="Questionnair"><i class="mdi mdi-checkbox-blank-outline text-success" style="font-size: 24px;" ></i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                 <td>Devit</td>
               
                <td>
                <a href="<?php echo base_url() ?>/supervisor/questionnair" data-toggle="tooltip" title="Questionnair"><i class="mdi mdi-pencil-box-outline text-success" style="font-size: 24px;" ></i></a>
                </td>
            </tr>
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
