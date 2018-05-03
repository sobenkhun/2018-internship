
<div class="container">

		<a href="<?php echo base_url();?>tutorDas/companyDas">
				<button class="btn btn-primary">
					<i class="mdi mdi-chevron-left text-white" style="font-size:15px;"></i>Back
				</button>
			</a>
		<br>
		<br>
	<div class="row">
		<div class="col-md-7">
			<h3 class="text-center">Company Name  xxxx</h3>
			<div class="card-body">
				<form class="form" role="form" autocomplete="off">
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Company name</label>
						<div class="col-lg-9">
							<p> Name </p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Description</label>
						<div class="col-lg-9">
							<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam modi nostrum voluptas deserunt facere voluptatum ipsam aliquam ducimus fugit esse inventore velit, aperiam beatae a, amet eius odit, tenetur commodi?</p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Postal Address</label>
						<div class="col-lg-9">
							<p>	Street #######,#######,Phnom Penh</p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Phone</label>
						<div class="col-lg-9">
							<p> (+855) (0)23 228 000</p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Website</label>
						<div class="col-lg-9">
							<p>	www.companyurl.com</p>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-5 text-center">
			<h3 class="text-center">Maps</h3>
			<br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.01419335054!2d104.88086341424142!3d11.550839347581286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951add5e2cd81%3A0x171e0b69c7c6f7ba!2sPasserelles+num%C3%A9riques+Cambodia+(PNC)!5e0!3m2!1sen!2skh!4v1525250678472" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>
<br>
<div class="container">
<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <script src="<?php echo base_url();?>assets/js/Chart-2.7.1.min.js"></script>

    <h1 class="text-center">Company Bar Chart</h1>
    <h2 class="text-center">Bar chart</h2>

    <canvas id="bar-chart" width="800" height="450"></canvas>

    <script type="text/javascript">
    // Bar chart Example
    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
          labels: ["PNC", "PNV","PNP", "Coding", "Webrige", "EZecom","Toyota","Mustang"],
          datasets: [
            {
              label: "Population (millions)",
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","yellow","#00C853","#FFC107"],
              data: [10,4,8,5,7,3,9,6]
            }
          ]
        },
        options: {
          legend: { display: false },
          title: {
            display: true,
            text: 'Predicted world population (millions) in 2050'
          }
        }
    });
    </script>
  </div>
  <div class="col-md-2"></div>
  </div>
</div>
<div class="jumbotron bg-light">
  <div class="row">
    <div class="col-md-12 "><br>
      <p class="text-center">Copyright by Prem Mann</p>
    </div> 
  </div>
</div> 