
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
           <th class="text-center">ID</th>
           <th>Company</th>
           <th>Location</th>
           <th class="text-center">Action</th>
         </tr>
       </thead>
       <tbody>
        <?php foreach ($company as $company):?>
          <tr>
              <td class="text-center"><?php echo $company['id']; ?></td>
              <td><?php echo $company['name']; ?></td>
              <td><?php echo $company['location']; ?></td>
            <td>
               <a href="<?php echo base_url();?>tutorDas/detailCompany2?&id=<?php echo $company['id']; ?>"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></span></a>
            </td>
      </tr>
      <?php endforeach ?>
      
    </tbody>

  </table>
</div>

</div>
</div>
</div>
<br>




