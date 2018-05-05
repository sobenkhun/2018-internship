
<br>

<br>
<div class="contatainer">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<a href="<?php echo base_url();?>Welcome_IF/comment">
				<button class="btn btn-primary">
					<i class="mdi mdi-chevron-left mdi-15px text-white"></i>Back
				</button>
			</a>
		</div>
		<div class="col-md-6"></div>
	</div>
	<div class="row">
		<div class="col-md-2">

		</div>
		<div class="col-md-8">
			<h2 class="text-center">Comment on Student: Studnet Name</h2>

			<textarea id="tinyMCE"></textarea>

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

		</div>
		<div class="col-md-2"></div>
	</div><br>
	<div class="row">
		<div class="col-md-2"></div>
		<!-- <div class="col-md-2"></div> -->
		<div class="col-md-8 text-right">
			<a href="<?php echo base_url();?>Welcome_IF/student">
				<button class="btn btn-danger">Cancel</button>
			</a>
			<a href="<?php echo base_url();?>Welcome_IF/student">
				<button class="btn btn-primary">Add</button>
			</a>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
