<div class="container">
  <div class="row">
    <!-- <div class="col-md-1"></div> -->
    <div class="col-md-12 alert alert-primary text-center TITitle" >
      <h2 class="text-center text-dark">Welcome to PNC Internship Follow up</h2>
    </div>
    <!-- <div class="col-md-1"></div> -->
    
  </div>
  <br>
  <div class="row">
        <!-- <div class="col-md-1" ></div> -->
        <div class="col-md-4 TICol" >
          <div class="card text-center text-white">
            <div class="card-header TICheader " >
              <i class="mdi mdi-domain mdi-light TICicon" ></i><br><br>
              <h4 style="font-family:  sans-serif;">Number of Companies</h4>  
              <h5 class="card-title">124</h5>
            </div>
            <div class="card-body ">

              <a href="<?php echo base_url();?>Welcome_IF/company" class="btn btn-primary TICbody">Go Companies</a>
            </div>
            
          </div>
        </div>
        <div class="col-md-4" >
          <div class="card text-center text-white">
            <div class="card-header TICheader1" >
              <i class="mdi mdi-account mdi-light TICicon"></i><br><br>
              <h4 style="font-family:  sans-serif">Number of Supervisors</h4>
              <h5 class="card-title">299</h5>
            </div>
            <div class="card-body ">
              <a  href="<?php echo base_url();?>Welcome_IF/supervisor" class="btn btn-primary TICbody1 ">Go Supervisors</a>
            </div>
            
          </div>
        </div>
        <div class="col-md-4 TICol1"  >
              <div class="card text-center text-white">
                <div class="card-header TICheader2" >
                  <i class="mdi mdi-school mdi-light TICicon"></i><br><br>
                  <h4 style="font-family:  sans-serif">Number of Students</h4>
                  <h5 class="card-title">232</h5>
                </div>
                <div class="card-body ">
                  <a  href="<?php echo base_url();?>Welcome_IF/student" class="btn btn-primary TICbody2">Go Students</a>
                </div>
               
              </div>
        </div>
        <!-- <div class="col-md-1"></div> -->
  </div><br>
</div>


<!-- Barchart -->
<br>
<div class="container">
  <div class="row">
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
      <script src="<?php echo base_url();?>assets/js/Chart-2.7.1.min.js"></script>
      <h1 class="text-center">Company Bar Chart</h1>
      <h2 class="text-center">Bar chart</h2>
      <canvas id="bar-chart" width="800" height="400"></canvas>
      <script type="text/javascript">
      // Bar chart Example
      new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
          labels: ["KhmerDev", "Web Essentails","Prudenital", "Codingate", "W.E bridge", "EZecom","Manulife"],
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
  <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>
</div>



