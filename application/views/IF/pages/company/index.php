<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center text-primary">Company List</h2>
    </div>
  </div>
  <div class="row">

    <div class="col-md-12">
      <br><br>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
       <thead>
         <tr>
           <th>CID</th>
           <th>Company</th>
           <th>Location</th>
           <th>Action</th>
         </tr>
       </thead>
       <tbody>
        <tr>
          <td>001</td>
          <td><a href="https://www.khmerdev.com/en/" target="_blank">KhmerDev</a></td>
          <td>Phnom Penh</td>
          <td>
     <a href="<?php echo base_url();?>Welcome_IF/detailCompany"><span class="mdi mdi-eye mdi-24px text-success"></span></a>
            <a href="<?php echo base_url();?>Welcome_IF/editeCompany"><span class="mdi mdi-pencil mdi-24px fa-lg text-success"></span></a>
     <a href="<?php echo base_url();?>Welcome_IF/" onclick="return confirm('Are you sure to delete this Company?');">
      <i class="text-danger mdi mdi-delete mdi-24px " data-toggle ="tooltip" title="Delete this class"></i>
    </a>
        </td>
      </tr>
      <tr>
        <td>002</td>
        <td>CodinGate</td>
        <td>Phnom Penh</td>
        <td>
     <a href="<?php echo base_url();?>Welcome_IF/detailCompany"><span class="mdi mdi-eye mdi-24px text-success"></span></a>
          <a href="<?php echo base_url();?>Welcome_IF/"><span class="mdi mdi-pencil mdi-24px fa-lg text-success"></span></a>
     <a href="<?php echo base_url();?>Welcome_IF/" onclick="return confirm('Are you sure to delete this Company?');">
      <i class="text-danger mdi mdi-delete mdi-24px " data-toggle ="tooltip" title="Delete this class"></i>
    </a>
      </td>
    </tr>
    <tr>
      <td>003</td>
      <td>Web Essentails</td>
      <td>Phnom Penh</td>
      <td>
     <a href="<?php echo base_url();?>Welcome_IF/detailCompany"><span class="mdi mdi-eye mdi-24px text-success"></span></a>
        <a href="<?php echo base_url();?>Welcome_IF/"><span class="mdi mdi-pencil mdi-24px fa-lg text-success"></span></a>
     <a href="<?php echo base_url();?>Welcome_IF/" onclick="return confirm('Are you sure to delete this Company?');">
      <i class="text-danger mdi mdi-delete mdi-24px " data-toggle ="tooltip" title="Delete this class"></i>
    </a>
    </td>
  </tr>
  <tr>
    <td>004</td>
    <td>Virtual Company</td>
    <td>Phnom Penh</td>
    <td>
     <a href="detail.html"><span class="mdi mdi-eye mdi-24px text-success"></span></a>
     <a href=""><span class="mdi mdi-pencil mdi-24px fa-lg text-success"></span></a>
     <a href="#" onclick="return confirm('Are you sure to delete this Company?');">
      <i class="text-danger mdi mdi-delete mdi-24px " data-toggle ="tooltip" title="Delete this class"></i>
    </a>
  </td>
</tr>
</tbody>

</table>
</div>

</div>
<br>
<div class="container">
<div class="row">
  <div class="col-md-12">
    <a href="<?php echo base_url();?>Welcome_IF/createCompany"><button class="btn btn-primary"><span class="mdi mdi-plus text-warning"></span><i>  </i>  Create New Company</button></a>
  </div>
</div>
</div>
</div>
<br>
<div class="row row-fluid">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <!-- We just need a JS  -->
    <script src="<?php echo base_url();?>assets/js/Chart-2.7.1.min.js"></script>

    <h1>Company Bar Chart</h1>
    <h2>Bar chart</h2>

    <canvas id="bar-chart" width="800" height="450"></canvas>

    <script type="text/javascript">
    // Bar chart
    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
          labels: ["PNC", "PNV","PNP", "Coding", "Webrige", "EZecom","Toyota","Mustang"],
          datasets: [
            {
              label: "Population (millions)",
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","yellow","#00C853","#FFC107"],
              data: [10,4,3,5,7,3,9,6]
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
<div class="jumbotron bg-light">
  <div class="row">
    <div class="col-md-12 "><br>
      <p class="text-center">Copyright by Prem Mann</p>
    </div> 
  </div>
</div> 
