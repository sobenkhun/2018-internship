
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<a href="<?php echo base_url(); ?>supervisor/student">
				<button type="button" class="btn btn-primary">
					<i class="mdi mdi-chevron-left"></i>Back
				</button>
			</a>
		</div>
		<div class="col-md-8">
			<h3 class="text-center text-primary">Student Profile</h3>
		</div>
	</div>
	<br>
	<div class="row bg-white">
		<div class="col-md-1"></div>
		<div class="col-md-4 text-center "><br>
			<img class="user userSupervisor"  src="<?php echo base_url(); ?>assets/images/studentpiture.jpg" alt="" style="height: 260px; margin-top: 17px; padding: 10px;"><br>
			<label for="">Prem MANN</label>
		</div>
		<div class="col-md-6">
			 <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                
                <th class="text-center">Action</th>
            </tr>
        </thead>
         <tbody>
        <?php foreach ($studentProfile as $student):?>
          <tr>
              <td><?php echo $student['userid']; ?></td>
              <td><?php echo $student['studentName']; ?></td>
        </td>
          </tr>
          <?php endforeach ?>
    </tbody>
    </table>
		</div>
	</div>
	<!-- </div> -->
	<!-- </div> -->
	<!-- </div>			 -->
</div>
<!-- </div> -->