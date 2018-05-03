
<br>
<div class="container">
 <div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-10">
  	<a href="<?php echo base_url();?>tutorDas/companyDas">
  			<button class="btn btn-primary">
  				<i class="mdi mdi-chevron-left text-white" style="font-size:15px;"></i>Back
  			</button>
  		</a>
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
  <div class="col-md-1"></div>
  </div>
</div>
<div class="jumbotron bg-light">
  <div class="row">
    <div class="col-md-12 "><br>
      <p class="text-center">Copyright by Prem Mann</p>
    </div> 
  </div>
</div> 