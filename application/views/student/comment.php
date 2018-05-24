<div class="container con-body">
	<h3 class="text-primary text-center"><strong>Board of Comments</strong></h3>
	<div class="row"><br><br>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<table id="studentList" class="table table-striped table-bordered bg-white text-center" style="width:100%">
				<thead class="text-center">
					<tr>
						<th style="width: 5em;">ID</th>
						<th style="width: 5em;">Date</th>
						<th style="width: 25em;">Student Comments</th>
						<th style="width: 25em;">Tutor Reply</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($comment as $com):?>
						<tr>
							<td><?php echo $com['id']; ?></td>
							<td><?php echo $com['date']; ?></td>
							<td><?php echo $com['comment']; ?></td>
							<td><?php echo $com['comment']; ?></td> <!-- Comment from Tutor  -->

						</tr>
					<?php endforeach ?>

					<!-- <tr>
						<td>2</td>
						<td>8 may 2018</td>
						<td>Dear Teacher. My supervor is very busy with his work. He did not gave me a task yet and I already talk  with him but he say he will gave after a few day.</td>
						<td>Yes. I think you wait for it and I will talk to him and contact to you later.</td>
					</tr>
					<tr>
						<td>3</td>
						<td>22 may 2018</td>
						<td>Dear Teacher. I have some problem with my computer it run too slow and I already inform to my supervisor and he did not have another one to exchange it. So how should I do?</td>
						<td>Ok I will discuss with him about this problem.</td>
					</tr> -->
				</tbody>
			</table>
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
			<a href="<?php echo base_url();?>cStudent/addComment">
				<button class="btn btn-primary float-left">
					<i class="mdi mdi-account-plus text-white" style="font-size:20px;"></i>Add Comment
				</button>
			</a>
		</div>
	</div> -->
</div>
