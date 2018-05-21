
<div class="container con-body">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<a href="<?php echo base_url();?>Welcome_IF/student">
				<button type="button" class="btn btn-primary">
					<i class="mdi mdi-chevron-left"></i>Back
				</button>
			</a>
			<h3 class="text-primary text-center"><strong>Student Comments</strong></h3>
		</div>
	</div>	 
	<br>
	<div class="row"><br><br>

		<!-- <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div> -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<table id="studentList" class="table table-striped table-bordered bg-white">
				<?php foreach ($comment as $comment):?>
				<thead class="text-center">
					<tr >
						<th>Date</th>
						<th>Student Comments</th>
						<th>Tutor Comments</th>
						<th>Validate</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-left">
						<td class="text-center">1 may 2018</td>
						<td> You should ask your supervisor for have tasks to do</td>
						<td><?php echo $comment['comment']; ?></td>
						<td class="text-center">
							<a href="#"><span class="mdi mdi-checkbox-marked-outline mdi-24px text-info" data-toggle ="tooltip" title="validated"></span></a>
							<a href="#"><span class="mdi mdi-pencil mdi-24px text-success" data-toggle ="tooltip" title="edit"></span></a>
						</td>
					</tr>
				</tbody>
				<?php endforeach ?>
			</table>
		</div>
	</div>
</div>
