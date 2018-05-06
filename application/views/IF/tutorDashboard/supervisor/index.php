

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h2 class="text-center text-primary"> Supervisors lists</h2>
		</div>
		<table id="example" class="table table-bordered tTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Company Name</th>
                <th>Supervisor Name</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Cloude Net</td>
                <td>Rith NHEL</td>
                
                <td>
               
                <a href="<?php echo base_url();?>tutorDas/questionnair"><i class="mdi  mdi-book-minus text-success TCMDI" data-toggle="tooltip" title="Questionnair"></i></a>
                <a href="<?php echo base_url();?>tutorDas/viewSupervisorDas">
                    <i class="mdi mdi-eye text-primary TCMDI" data-toggle="tooltip" title="View Detail"></i>
                </a>
                
                </td>

            </tr>
            <tr>
                <td>2</td>
                <td>Coding Get</td>
                <td>Rady Y</td>
                
                <td>
               
                <a href="<?php echo base_url();?>tutorDas/questionnair"><i class="mdi  mdi-book-minus text-success TCMDI" data-toggle="tooltip" title="Questionnair"></i></a>
                <a href="<?php echo base_url();?>tutorDas/viewSupervisorDas">
                    <i class="mdi mdi-eye text-primary TCMDI" data-toggle="tooltip" title="View Detail"></i>
                </a>
                
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Khalibri</td>
                 <td>Rady</td>
               
                <td>
               
                <a href="<?php echo base_url();?>tutorDas/questionnair"><i class="mdi  mdi-book-minus text-success TCMDI" data-toggle="tooltip" title="Questionnair"></i></a>
                <a href="tutorDas/viewSupervisorDas<?php echo base_url();?>tutorDas/viewSupervisorDas">
                    <i class="mdi mdi-eye text-primary TCMDI" data-toggle="tooltip" title="View Detail"></i>
                </a>
                
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>EZECOM</td>
                <td>Kea LOHN</td>
                
                <td>
               
                <a href="<?php echo base_url();?>tutorDas/questionnair"><i class="mdi  mdi-book-minus text-success TCMDI" data-toggle="tooltip" title="Questionnair"></i></a>
                <a href="<?php echo base_url();?>tutorDas/viewSupervisorDas">
                    <i class="mdi mdi-eye text-primary TCMDI" data-toggle="tooltip" title="View Detail"></i>
                </a>
                
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Online</td>
                <td>Sopheak</td>
                
                <td>
               
                <a href="<?php echo base_url();?>tutorDas/questionnair"><i class="mdi  mdi-book-minus text-success TCMDI" data-toggle="tooltip" title="Questionnair"></i></a>
                <a href="<?php echo base_url();?>tutorDas/viewSupervisorDas">
                    <i class="mdi mdi-eye text-primary TCMDI" data-toggle="tooltip" title="View Detail"></i>
                </a>
               
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Eintelego</td>
                <td>Pisey</td>
                
                <td>
               
                <a href="<?php echo base_url();?>tutorDas/questionnair">
                    <i class="mdi  mdi-book-minus text-success TCMDI" data-toggle="tooltip" title="Questionnair" data-toggle="tooltip" title="Questionnair"></i>
                </a>
                <a href="<?php echo base_url();?>tutorDas/viewSupervisorDas">
                    <i class="mdi mdi-eye text-primary TCMDI" data-toggle="tooltip" title="View Detail"></i>
                </a>
                
                </td>
            </tr>
           
            <tr>
                <td>8</td>
                <td>Res Up</td>
                 <td>Chanak CHON</td>
               
                <td>
               
                    <a href="<?php echo base_url();?>tutorDas/questionnair">
                        <i class="mdi mdi-book-minus text-success TCMDI"  ></i>
                    </a>
                    <a href="<?php echo base_url();?>tutorDas/viewSupervisorDas">
                        <i class="mdi mdi-eye text-primary TCMDI" data-toggle="tooltip" title="View Detail"></i>
                    </a>
               
                </td>
            </tr>
           
        </tbody>
    </table>
	</div>
</div>

</div>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>