

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 class="text-center text-primary">Supervisors List</h2>
        </div>
        <table id="example" class="table table-striped table-bordered bg-white">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th>Company Name</th>
                <th>Supervisor Name</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td>Cloude Net</td>
                <td>Rith NHEL</td>
                <td class="text-center">

                    <a href="<?php echo base_url() ?>tutorDas/viewSupervisorDas"><i class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></i></a>
                    <a href="<?php echo base_url() ?>tutorDas/questionnair"><i class="mdi mdi-book-minus mdi-24px text-dark" data-toggle ="tooltip" title=" Questionniare"></i></a>
                    
                </td>
                
                

            </tr>
            <tr>
                <td>2</td>
                <td>Coding Get</td>
                <td>Rady Y</td>
                <td class="text-center">
                    <a href="<?php echo base_url() ?>tutorDas/viewSupervisorDas"><i class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></i></a>
                    <a href="<?php echo base_url() ?>tutorDas/questionnair"><i class="mdi mdi-book-minus mdi-24px text-dark" data-toggle ="tooltip" title=" Questionniare"></i></a>
                    
                </td>
                
                
               
            </tr>
            <tr>
                <td>3</td>
                <td>Khalibri</td>
                 <td>Rady</td>
                 <td class="text-center">
                     <a href="<?php echo base_url() ?>tutorDas/viewSupervisorDas"><i class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></i></a>
                     <a href="<?php echo base_url() ?>tutorDas/questionnair"><i class="mdi mdi-book-minus mdi-24px text-dark" data-toggle ="tooltip" title=" Questionniare"></i></a>
                     
                 </td>
                
               
                
            </tr>
            <tr>
                <td>4</td>
                <td>EZECOM</td>
                <td>Kea LOHN</td>
                <td class="text-center">

                    <a href="<?php echo base_url() ?>tutorDas/viewSupervisorDas"><i class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></i></a>
                    <a href="<?php echo base_url() ?>tutorDas/questionnair"><i class="mdi mdi-book-minus mdi-24px text-dark" data-toggle ="tooltip" title=" Questionniare"></i></a>
                    
                </td>
                
                
               
            </tr>
            <tr>
                <td>5</td>
                <td>Online</td>
                <td>Sopheak</td>
                <td class="text-center">
                    <a href="<?php echo base_url() ?>tutorDas/viewSupervisorDas"><i class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></i></a>
                    <a href="<?php echo base_url() ?>tutorDas/questionnair"><i class="mdi mdi-book-minus mdi-24px text-dark" data-toggle ="tooltip" title=" Questionniare"></i></a>
                    
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Eintelego</td>
                <td>Pisey</td>
                <td class="text-center">

                    <a href="<?php echo base_url() ?>tutorDas/viewSupervisorDas"><i class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></i></a>
                    <a href="<?php echo base_url() ?>tutorDas/questionnair"><i class="mdi mdi-book-minus mdi-24px text-dark" data-toggle ="tooltip" title=" Questionniare"></i></a>
                    
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>RCI</td>
                <td>Rith NHEL</td>
                <td class="text-center">

                    <a href="<?php echo base_url() ?>tutorDas/viewSupervisorDas"><i class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></i></a>
                    <a href="<?php echo base_url() ?>tutorDas/questionnair"><i class="mdi mdi-book-minus mdi-24px text-dark" data-toggle ="tooltip" title=" Questionniare"></i></a>
                    
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Res Up</td>
                 <td>Chanak CHON</td>
                 <td class="text-center">
                     <a href="<?php echo base_url() ?>tutorDas/viewSupervisorDas"><i class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></i></a>
                     <a href="<?php echo base_url() ?>tutorDas/questionnair"><i class="mdi mdi-book-minus mdi-24px text-dark" data-toggle ="tooltip" title=" Questionniare"></i></a>
                     
                 </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Camsolution</td>
                <td>Rady Y</td>
                <td class="text-center">
                    <a href="<?php echo base_url() ?>tutorDas/viewSupervisorDas"><i class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></i></a>
                    <a href="<?php echo base_url() ?>tutorDas/questionnair"><i class="mdi mdi-book-minus mdi-24px text-dark" data-toggle ="tooltip" title=" Questionniare"></i></a>
                    
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
    $('#example').DataTable();
} );
</script>