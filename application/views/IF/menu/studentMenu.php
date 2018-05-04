<style>
  .logo {
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }
</style>
<nav class=" navbar navbar-expand-lg navbar-light color fixed-top">
  <a class="navbar-brand" href="<?php echo base_url();?>Welcome_IF/home">
      <img stMenu" src="<?php echo base_url();?>assets/images/logoL.png" alt="Logo" style="width:150px;">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class=" collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ">
        <a class="nav-link" href="<?php echo base_url();?>cStudent/index">
          <b class="colorTextMenu">  Work-log</b>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>cStudent/comment">
          <b class="colorTextMenu">  Comment</b>
        </a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link" href="<?php echo base_url();?>cStudent/calendar">
          <b class="colorTextMenu">Calendar   
            <i class="mdi mdi-book" style="font-size:12px; margin-bottom: -9px;"></i>
          </b>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav">
             <li class="nav-item">
              <div class="dropdown">
               <a href="#" class="nav-link active"  data-toggle="dropdown" aria-expanded="false">
                 <i  style="font-size: 20px; margin-right: 20px;" class="mdi mdi-email"> </i>          
               </a>
                <div class="dropdown-menu ">
                    <div class="dropdown-body">
                     <a class="dropdown-item text-dark" href="#"><img class="logo" src="<?php echo base_url();?>assets/images/logo.png"><strong>Davit.Chea</strong> <br>Create Event on <strong>Calendar</strong></b></a>
                      
                    </div>
                    <div class="dropdown-body">
                     <a class="dropdown-item text-dark" href="#"><img class="logo" src="<?php echo base_url();?>assets/images/logo.png">  <strong>Rith.Nhil</strong> <br>conmment on <strong>Toch.Ban</strong></b></a>
                      
                    </div>
                    <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">View All</a>
                  </div>
               </div>
             </li>
             <li class="nav-item">
              <div class="dropdown">
               <a href="#" class="nav-link active"  data-toggle="dropdown" aria-expanded="false">
                 <i  style="font-size: 20px; margin-right: 20px;" class="mdi mdi-bell"> </i>          
               </a>
                <div class="dropdown-menu ">
                    <div class="dropdown-body">
                     <a class="dropdown-item text-dark" href="#"><img class="logo" src="<?php echo base_url();?>assets/images/logo.png"><strong>Rith.Nhil</strong> <br>conmment on <strong>Toch.Ban</strong></b></a>
                      
                    </div>
                    <div class="dropdown-body">
                     <a class="dropdown-item text-dark" href="#"><img class="logo" src="<?php echo base_url();?>assets/images/logo.png">  <strong>Rith.Nhil</strong> <br>conmment on <strong>Toch.Ban</strong></b></a>
                      
                    </div>
                    <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">View All</a>
                  </div>
               </div>
             </li>
          
             <li class="nav-item ">
               <a class="nav-link" href="#">       
                 <b class="colorTextMenu">  
                   <span> Username </span><i style="font-size: 20px;" class="mdi mdi-account-circle"></i> 
                 </b>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url();?>Welcome_IF">
                 <b class="colorTextMenu"> 
                   <span> Logout </span> <i style="font-size: 20px;" class="mdi mdi-login"></i> 
                 </b>
               </a>
             </li>
           </ul>
  </div>
  
</nav><br><br><br><br><br>
<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Your </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- ========= -->