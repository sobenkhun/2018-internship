
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
			<form action="<?php echo base_url();?>Welcome_IF/addCompany" method="post">
				<div class="form-row">
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Company name</label>
						<div class="col-sm-8">
							<input type="text" name="name" id="" class="form-control" placeholder="Company Name ">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Description</label>
						<div class="col-sm-8">
							<input type="text" name="itemdescription" id="" class="form-control" placeholder="Description of Company">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Company address</label>
						<div class="col-sm-8">
							<input type="text" name="postaladdress" id="" class="form-control" placeholder="Company Postaladdress">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Location</label>
						<div class="col-sm-8">
							<input type="text" name="location" id="" class="form-control" placeholder="Compnay Location">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Phone number</label>
						<div class="col-sm-8">
							<input type="text" name="phone" id="" class="form-control" placeholder="Compnay Phone Number">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Website</label>
						<div class="col-sm-8">
							<input type="text" name="url" id="" class="form-control" placeholder="Compnay Website ">
						</div>
					</div><br><br><br>
					<div class="col-md-4"></div>
					<div class="col-md-2 text-center">
						<button class="btn btn-outline-success" type="submit" name="btn-submit">Submit</button>
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