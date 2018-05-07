

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h2 class="text-center text-primary"> Supervisors List</h2>
		</div>
		<table id="example" class="table table-bordered tTable">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Company Name</th>
                <th class="text-center">Supervisor Name</th>
                
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td class="text-center">Cloude Net</td>
                <td class="text-center">Rith NHEL</td>
                
                <td class="text-center">
               
                <a href="<?php echo base_url();?>tutorDas/questionnair"><i class="mdi  mdi-book-minus text-dark TCMDI" data-toggle="tooltip" title="Questionnair"></i></a>
                <a href="<?php echo base_url();?>tutorDas/viewSupervisorDas">
                    <i class="mdi mdi-eye text-primary TCMDI" data-toggle="tooltip" title="View Profile"></i>
                </a>
                
                </td>

            </tr>
            <tr>
                <td class="text-center">2</td>
                <td class="text-center">Coding Get</td>
                <td class="text-center">Rady Y</td>
                
                <td class="text-center">
               
                <a href="<?php echo base_url();?>tutorDas/questionnair"><i class="mdi  mdi-book-minus text-dark TCMDI" data-toggle="tooltip" title="Questionnair"></i></a>
                <a href="<?php echo base_url();?>tutorDas/viewSupervisorDas">
                    <i class="mdi mdi-eye text-primary TCMDI" data-toggle="tooltip" title="View Profile"></i>
                </a>
                
                </td>
            </tr>
            <tr>
                <td class="text-center"> 3</td>
                <td class="text-center">Khalibri</td>
                 <td class="text-center">Rady</td>
               
                <td class="text-center">
               
                <a href="<?php echo base_url();?>tutorDas/questionnair"><i class="mdi  mdi-book-minus text-dark TCMDI" data-toggle="tooltip" title="Questionnair"></i></a>
                <a href="tutorDas/viewSupervisorDas<?php echo base_url();?>tutorDas/viewSupervisorDas">
                    <i class="mdi mdi-eye text-primary TCMDI" data-toggle="tooltip" title="View Profile"></i>
                </a>
                
                </td>
            </tr>
            <tr>
                <td class="text-center">4</td>
                <td class="text-center">EZECOM</td>
                <td class="text-center">Kea LOHN</td>
                
                <td class="text-center">
               
                <a href="<?php echo base_url();?>tutorDas/questionnair"><i class="mdi  mdi-book-minus text-dark TCMDI" data-toggle="tooltip" title="Questionnair"></i></a>
                <a href="<?php echo base_url();?>tutorDas/viewSupervisorDas">
                    <i class="mdi mdi-eye text-primary TCMDI" data-toggle="tooltip" title="View Profile"></i>
                </a>
                
                </td>
            </tr>
            <tr>
                <td class="text-center">5</td>
                <td class="text-center">Online</td>
                <td class="text-center">Sopheak</td>
                
                <td class="text-center">
               
                <a href="<?php echo base_url();?>tutorDas/questionnair"><i class="mdi  mdi-book-minus text-dark TCMDI" data-toggle="tooltip" title="Questionnair"></i></a>
                <a href="<?php echo base_url();?>tutorDas/viewSupervisorDas">
                    <i class="mdi mdi-eye text-primary TCMDI" data-toggle="tooltip" title="View Profile"></i>
                </a>
               
                </td>
            </tr>
            <tr>
                <td class="text-center">6</td>
                <td class="text-center">Eintelego</td>
                <td class="text-center">Pisey</td>
                
                <td class="text-center">
               
                <a href="<?php echo base_url();?>tutorDas/questionnair">
                    <i class="mdi  mdi-book-minus text-dark TCMDI" data-toggle="tooltip" title="Questionnair" data-toggle="tooltip" title="Questionnair"></i>
                </a>
                <a href="<?php echo base_url();?>tutorDas/viewSupervisorDas">
                    <i class="mdi mdi-eye text-primary TCMDI" data-toggle="tooltip" title="View Profile"></i>
                </a>
                
                </td>
            </tr>
           
            <tr>
                <td class="text-center">8</td>
                <td class="text-center">Res Up</td>
                 <td class="text-center">Chanak CHON</td>
               
                <td class="text-center">
               
                    <a href="<?php echo base_url();?>tutorDas/questionnair">
                        <i class="mdi mdi-book-minus text-dark TCMDI"  ></i>
                    </a>
                    <a href="<?php echo base_url();?>tutorDas/viewSupervisorDas">
                        <i class="mdi mdi-eye text-primary TCMDI" data-toggle="tooltip" title="View Profile"></i>
                    </a>
               
                </td>
            </tr>
           
        </tbody>
    </table>
	</div>
</div>

</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>