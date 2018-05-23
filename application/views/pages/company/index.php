<div class="container  ">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center text-primary"><strong>Companies List</strong></h2>
    </div>
  </div>
  <!-- massage insert successfull -->
  <?php if (isset($message)) { ?>
    <div class="alert"></div>
    <script>

      $('.alert').addClass('alert-success').text('Data Inserted Successfully');
      $(function () {
        setTimeout(function(){
          document.querySelector('.alert').style.display = 'none';
        },3000);
      });
      
    </script>
  <?php } ?>

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
            <td class="text-center">
             <a href="<?php echo base_url();?>Welcome_IF/detailCompany?&id=<?php echo $company['id']; ?>"><span class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></span></a>
             <a href="<?php echo base_url();?>Welcome_IF/editeCompany?&id=<?php echo $company['id']; ?>"><span class="mdi mdi-pencil mdi-24px fa-lg text-success" data-toggle ="tooltip" title="Edit"></span></a>
             <a href="<?php echo base_url();?>Welcome_IF/deleteCompany?&id=<?php echo $company['id']; ?>" onclick="return confirm('Are you sure to delete this Company?');">
              <i class="text-danger mdi mdi-delete mdi-24px " data-toggle ="tooltip" title="Delete "></i>
            </a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>

  </table>
</div>

</div>

<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="<?php echo base_url();?>Welcome_IF/createCompany">
        <button class="btn btn-primary">
          <span class="mdi mdi-20px mdi-table-column-plus-before"><i>  </i>New Company<span>
          </button>
        </a>
      </div>
    </div>
  </div>
</div>
