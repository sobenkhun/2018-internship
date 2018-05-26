

<div class="contatainer">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<a href="<?php echo base_url();?>tutorDas/studentDas">
				<button class="btn btn-primary">
					<i class="mdi mdi-chevron-left mdi-15px text-white"></i>Back
				</button>
			</a>
		</div>
		<div class="col-md-6"></div>
	</div>
	<form action="<?php echo base_url();?>tutorDas/addComment?&id=<?php echo $stuId; ?>" method="post">
	<div class="row">
		<div class="col-md-2">

		</div>
		<div class="col-md-8">
			<h2 class="text-center">Comment on Student: Studnet Name</h2>
			<textarea id="tinyMCE" name="comment"></textarea>
		</div>
		<div class="col-md-2"></div>
	</div><br>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<button class="btn btn-outline-success" type="submit" name="btn-submit">Send</button>
		</div>
		<div class="col-md-6 text-right">
			<a href="<?php echo base_url();?>Welcome_IF/student">
				<button class="btn btn-outline-danger">Cancel</button>
			</a>
		</div>
		<div class="col-md-2"></div>
	</div>
			</form>
</div>
			<link rel="stylesheet" href="<?php echo base_url();?>assets/ckeditor-4.7.3/content.css">
			<script src="<?php echo base_url();?>assets/ckeditor-4.7.3/ckeditor.js"></script>
			<script src="<?php echo base_url();?>assets/tinymce-4.7.4/tinymce.min.js"></script>
			<script type="text/javascript">
				tinymce.init({
					selector:'#tinyMCE',
					plugins : 'advlist autolink link image lists charmap print preview'
				});

				CKEDITOR.replace( 'CKEditor' );
			</script>
