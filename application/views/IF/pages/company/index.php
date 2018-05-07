
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center text-primary">Companies List</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table id="example" class="table table-striped table-bordered bg-white">
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
           <a href="<?php echo base_url();?>Welcome_IF/detailCompany"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View Detail"></span></a>
           <a href="<?php echo base_url();?>Welcome_IF/editeCompany"><span class="mdi mdi-pencil mdi-24px fa-lg text-success" data-toggle ="tooltip" title="Edite Company"></span></a>
           <a href="#" onclick="return confirm('Are you sure to delete this Company?');">
            <i class="text-danger mdi mdi-delete mdi-24px " data-toggle ="tooltip" title="Delete this Company"></i>
          </a>
        </td>
      </tr>
      <tr>
        <td>002</td>
        <td>CodinGate</td>
        <td>Phnom Penh</td>
        <td>

          <a href="<?php echo base_url();?>Welcome_IF/detailCompany"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View Detail"></span></a>
          <a href="<?php echo base_url();?>Welcome_IF/editeCompany"><span class="mdi mdi-pencil mdi-24px fa-lg text-success" data-toggle ="tooltip" title="Edite Company"></span></a>
          <a href="#" onclick="return confirm('Are you sure to delete this Company?');">
            <i class="text-danger mdi mdi-delete mdi-24px " data-toggle ="tooltip" title="Delete this Company"></i>
          </a>
        </td>
      </tr>
      <tr>
        <td>003</td>
        <td>Web Essentails</td>
        <td>Phnom Penh</td>
        <td>

          <a href="<?php echo base_url();?>Welcome_IF/detailCompany"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View Detail"></span></a>
          <a href="<?php echo base_url();?>Welcome_IF/editeCompany"><span class="mdi mdi-pencil mdi-24px fa-lg text-success" data-toggle ="tooltip" title="Edite Company"></span></a>
          <a href="#" onclick="return confirm('Are you sure to delete this Company?');">
            <i class="text-danger mdi mdi-delete mdi-24px " data-toggle ="tooltip" title="Delete this Company"></i>
          </a>
        </td>
      </tr>
      <tr>
        <td>004</td>
        <td>Virtual Company</td>
        <td>Phnom Penh</td>
        <td>
          <a href="<?php echo base_url();?>Welcome_IF/detailCompany"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View Detail"></span></a>
          <a href="<?php echo base_url();?>Welcome_IF/editeCompany"><span class="mdi mdi-pencil mdi-24px fa-lg text-success" data-toggle ="tooltip" title="Edite Company"></span></a>
          <a href="#" onclick="return confirm('Are you sure to delete this Company?');">
            <i class="text-danger mdi mdi-delete mdi-24px " data-toggle ="tooltip" title="Delete this Company"></i>
          </a>
        </td>
      </tr>
    </tbody>

  </table>
</div>

</div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="<?php echo base_url();?>Welcome_IF/createCompany"><button class="btn btn-primary"><span class="mdi mdi-20px mdi-account-plus "></span><i>  </i>New Company</button></a>
    </div>
  </div>
</div>


