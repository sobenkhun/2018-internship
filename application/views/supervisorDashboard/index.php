<div class="container">
  <div class="row">
    <div class="col-md-12 alert alert-primary text-center" style="background: #7dbcf9; font-family: sans-serif;">
      <h2 class="text-center text-dark">Welcome To PNC Internship Follow up</h2>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6"  >
          <div class="">
            <div class="row">
              <div class="col-md-12 ">
                <div class="card text-center text-white">
                  <div class="card-header" style="background-color: #FFD740 ;">
                    <i class="mdi mdi-comment-text" style="font-size:70px;"></i><br>
                    <h4 style="font-family:  sans-serif;">Number Of Your Students</h4>
                    <h5 class="card-title"><?php echo $student; ?></h5>
                  </div>
                  <div class="card-body">
                    <a style="background-color: #31b5eb ; font-family: verdana" href="<?php echo base_url();?>supervisor/student" class="btn btn-primary">Go Student</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6" >
          <div class="row">
            <div class="col-md-12 "> 
              <div class="card text-center text-white">
                <div class="card-header" style="background-color: #4e95cb ;">
                  <i class="mdi mdi-book-open-page-variant " style="font-size:70px;"></i><br>
                  <h4 style="font-family:  sans-serif">View On Calendar</h4>
                  <h5 class="card-title">2 Events</h5>
                </div>
                <div class="card-body">
                  <a style="background-color: #31b5eb ; font-family: verdana" href="<?php echo base_url();?>supervisor/calendar" class="btn btn-primary">Go Calendar</a>
                </div>             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


