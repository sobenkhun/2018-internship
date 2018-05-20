<!-- Styles
<style>
	#contact label{
		display: inline-block;
		width: 100px;
		text-align: right;
	}
	#contact_submit{
		padding-left: 100px;
	}
	#contact div{
		margin-top: 1em;
	}
	textarea{
		vertical-align: top;
		height: 5em;
	}
		
	.error{
		display: none;
		margin-left: 10px;
	}		
	
	.error_show{
		color: red;
		margin-left: 10px;
	}
	
	input.invalid, textarea.invalid{
		border: 1px solid red;
	}
	
	input.valid, textarea.valid{
		border: 1px solid green;
	}
</style> -->
<div class="container con-body">
	<a href="<?php echo base_url();?>Welcome_IF/company">
		<button class="btn btn-primary">
			<i class="mdi mdi-chevron-left mdi-15px text-white"></i>Back
		</button>
	</a>
	<h3 class="text-primary text-center">New Company</h3><br>
	<div class="row">
		<div class="border border-form rounded bg-white">	
			<br>
			<br>	
			<form id="companyForm" action="<?php echo base_url();?>Welcome_IF/addCompany" method="post">
				<div class="form-row">
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="companyName">Company name</label>
						<div class="col-sm-8">
							<input for="" type="text" name="name" id="companyName" class="form-control" placeholder="Company Name ">
							<span class="required text-danger"><?php echo form_error("name"); ?></span>
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="description" >Description</label>
						<div class="col-sm-8">
							<input type="text" name="itemdescription" id="description" class="form-control" placeholder="Description of Company">
							<span class="required text-danger"><?php echo form_error("itemdescription"); ?></span>
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="companyAddress">Company address</label>
						<div class="col-sm-8">
							<input type="text" name="postaladdress" id="companyAddress" class="form-control" placeholder="Company Postaladdress">
							<span class="required text-danger"><?php echo form_error("postaladdress"); ?></span>
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="location">Location</label>
						<div class="col-sm-8">
							<input  type="text" name="location" id="location" class="form-control" placeholder="Company Location">
							<span class="required text-danger"><?php echo form_error("location"); ?></span>
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="phoneNumber">Phone number</label>
						<div class="col-sm-8">
							<input for="" type="text" name="phone" id="phoneNumber" class="form-control" placeholder="Company Phone Number">
							<span class="required text-danger"><?php echo form_error("phone"); ?></span>
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="companyWesite">Website</label>
						<div class="col-sm-8">
							<input for="" type="text" name="url" id="companyWesite" class="form-control" placeholder="Company Website ">
							<span class="required text-danger"><?php echo form_error("url"); ?></span>
						</div>
					</div><br><br><br>
					<div class="col-md-4"></div>
					<div class="col-md-2 text-center">
						<button class="btn btn-outline-success" id="submitForm" type="submit" name="btn-submit">Submit</button>
					</div>
					<div class="col-md-2 text-center">
						<button class="btn btn-outline-danger pull-right" type="reset" name="btn-cancel">Cancel</button>
						<br>
						<br>
					</div>
					<div class="col-md-4"></div>
				</div>
			</form>
		</div> 
	</div>
</div>	
<script>
	// $(document).ready(function() {
	// 	/*Real-time Validation
	// 		Name can't be blank*/
	// 		$('#companyName, #description, #companyAddress, #location ,#phoneNumber').keyup('input', function() {
	// 			var input=$(this);
	// 			var is_name=input.val();
	// 			if(is_name){input.removeClass("invalid").addClass("valid");}
	// 			else{input.removeClass("valid").addClass("invalid");}
	// 		});
	// 		$('#companyWesite').on('input', function() {
	// 			var input=$(this);
	// 			if (input.val().substring(0,4)=='www.'){input.val('http://www.'+input.val().substring(4));}
	// 			var re = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
	// 			var is_url=re.test(input.val());
	// 			if(is_url){input.removeClass("invalid").addClass("valid");}
	// 			else{input.removeClass("valid").addClass("invalid");}
	// 		});
	// });
</script>