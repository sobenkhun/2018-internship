
<div class="container">
  
  <div class="container  ">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center text-primary">Companies List</h2>
      </div>
    </div>
  <div class="row">
    <div class="col-md-12 ">
      <table id="example" class="table table-striped table-bordered bg-white">
       <thead>
         <tr>
           <th>CID</th>
           <th>Company</th>
           <th>Postal Address</th>
           <th>Location</th>
           <th>Phone number</th>
           <th>Website URL</th>
           <th>Action</th>
         </tr>
       </thead>
       <tbody>
        <?php foreach ($company as $company):?>
          <tr>
              <td><?php echo $company['id']; ?></td>
              <td><?php echo $company['name']; ?></td>
              <td><?php echo $company['location']; ?></td>
              <td><?php echo $company['postaladdress']; ?></td>
              <td><?php echo $company['phone']; ?></td>
              <td><?php echo $company['url']; ?></td>

              
        <!-- <tr>
          <td>001</td>
          <td><a href="https://www.khmerdev.com/en/" target="_blank">KhmerDev</a></td>
          <td>Phnom Penh</td> -->
          <td>
           <a href="<?php echo base_url();?>tutorDas/cDetailDas"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></span></a>
           
        </td>
      </tr>
      <?php endforeach ?>
      <!-- <tr>
        <td>002</td>
        <td>CodinGate</td>
        <td>Phnom Penh</td>
        <td>

          <a href="<?php echo base_url();?>tutorDas/cDetailDas"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View"></span></a>
          
        </td>
      </tr>
      <tr>
        <td>003</td>
        <td>Web Essentails</td>
        <td>Phnom Penh</td>
        <td>

          <a href="<?php echo base_url();?>tutorDas/cDetailDas"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></span></a>
         
        </td>
      </tr>
      <tr>
        <td>004</td>
        <td>Virtual Company</td>
        <td>Phnom Penh</td>
        <td>
          <a href="<?php echo base_url();?>tutorDas/cDetailDas"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View"></span></a>
          
        </td>
      </tr> -->
    </tbody>

  </table>
</div>

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



