
<div class="container erohome">
  <!-- title welcom -->
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 alert alert-primary text-center title">
      <h2 class="text-center text-dark"><strong>Welcome to PNC Internship Follow up</strong></h2>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
      <div class="card text-center text-white">
        <div class="card-header card1">
          <i class="mdi mdi-domain mdi-light"></i>
          <!-- <br><br> -->
          <h4>Number of Companies</h4>  
          <h5 class="card-title"><?php echo $company; ?></h5>
        </div>
        <div class="card-body">
          <a href="<?php echo base_url();?>tutorDas/companyDas" class="btn btn-primary">Go Companies</a>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
      <div class="card text-center text-white">
        <div class="card-header card2">
          <i class="mdi mdi-account mdi-light"></i>
          <h4>Number of Supervisors</h4>
          <h5 class="card-title"><?php echo $supervisor; ?></h5>
        </div>
        <div class="card-body">
          <a href="<?php echo base_url();?>tutorDas/supervisorDas" class="btn btn-primary">Go Supervisors</a>
        </div>

      </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

      <div class="card text-center text-white">
        <div class="card-header card3">
          <i class="mdi mdi-account-multiple mdi-light"></i>
          <h4>  Number of <br>Tutors</h4>
          <h5 class="card-title"><?php echo $tutor; ?></h5>
        </div>
        <div class="card-body">
          <a href="<?php echo base_url();?>tutorDas/tutorList" class="btn btn-primary">Go Tutors</a>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
      <div class="card text-center text-white">
        <div class="card-header card4">
          <i class="mdi mdi-school mdi-light"></i>
          <h4>Number of Students</h4>
          <h5 class="card-title"><?php echo $student; ?></h5>
        </div>
        <div class="card-body">
          <a href="<?php echo base_url();?>tutorDas/studentDas" class="btn btn-primary">Go Students</a>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- Barchart -->
<br>
<div class="container">
  <div class="row">
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
      <script src="<?php echo base_url();?>assets/js/Chart-2.7.1.min.js"></script>
      <h1 class="text-center">Companies bar chart</h1>
      <canvas id="bar-chart" width="800" height="400"></canvas>
      <script type="text/javascript">
      // Bar chart Example
      new Chart(document.getElementById("bar-chart"), {

        type: 'bar',
        data: {
          labels: ["KhmerDev", "Web Essentails","Prudenital", "Codingate", "W.E bridge", "EZecom","Manulife" ],
          datasets: [
          {
            label: "Population (millions)",
            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","yellow","#00C853","#FFC107"],
            data: [10,4,8,5,7,0,9,6]
          }
          ]

        },
        options: {
          legend: { display: false },
          title: {
            display: true,

             text: 'Number of student from PNC in company over the past years',

          }

        }

      });
    </script>
  </div>
  <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>
</div><br><br>
