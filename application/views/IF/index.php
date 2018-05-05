
<div class="container">
  <div class="row">
    <div class="col-md-12 alert alert-primary text-center" style="background: #7dbcf9; font-family: sans-serif;">
      <h2 class="text-center text-dark">Welcome to PNC Internship Follow up</h2>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3">
          <div class="">
            <div class="row">
              <div class="col-md-12">
                <div class="card text-center text-white">
                  <div class="card-header" style="background-color: #ffb53e ;">
                    <i class="mdi mdi-domain mdi-light" style="font-size:70px;"></i><br><br>
                    <h4 style="font-family:  sans-serif;">Number of Companies</h4>  
                    <h5 class="card-title">124</h5>
                  </div>
                  <div class="card-body">

                    <a style="background-color: #31b5eb ; font-family: verdana" href="<?php echo base_url();?>Welcome_IF/company" class="btn btn-primary">Go Companies</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="row">
            <div class="col-md-12 "> 
              <div class="card text-center text-white">
                <div class="card-header" style="background-color: #4e95cb ;">
                  <i class="mdi mdi-account mdi-light" style="font-size:70px;"></i><br><br>
                  <h4 style="font-family:  sans-serif;">Number of Supervisors</h4>
                  <h5 class="card-title">299</h5>
                </div>
                <div class="card-body">
                  <a style="background-color: #31b5eb ; font-family: verdana" href="<?php echo base_url();?>Welcome_IF/supervisor" class="btn btn-primary">Go Supervisors</a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="row">
            <div class="col-md-12 ">
              <div class="card text-center text-white">
                <div class="card-header" style="background-color: #ed233d ;">
                  <i class="mdi mdi-account-multiple mdi-light" style="font-size:70px;"></i><br><br>
                  <h4 style="font-family:  sans-serif;">  Number of <br>Tutors</h4>
                  <h5 class="card-title">149</h5>
                </div>
                <div class="card-body">
                  <a style="background-color: #31b5eb ; font-family: verdana" href="<?php echo base_url();?>Welcome_IF/tutor" class="btn btn-primary">Go Tutors</a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="row">
            <div class="col-md-12 ">
              <div class="card text-center text-white">
                <div class="card-header" style="background-color: #1db5a6 ;">
                  <i class="mdi mdi-school mdi-light" style="font-size:70px;"></i><br><br>
                  <h4 style="font-family:  sans-serif;">Number of Students</h4>
                  <h5 class="card-title">232</h5>
                </div>
                <div class="card-body">
                  <a style="background-color: #31b5eb ; font-family: verdana" href="<?php echo base_url();?>Welcome_IF/student" class="btn btn-primary">Go Students</a>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Barchart -->
<br>
  <div class="container">
   <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
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

