
  <link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap-4.0.0/css/bootstrap.min.css">
  <link href="<?php echo base_url();?>assets/MDI-2.1.19/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

  <!-- Custom style //-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skeleton-1.0.0.css">

  <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/tether-1.4.3/js/tether.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/popper-1.12.9..min.js"></script>
  <script src="<?php echo base_url();?>assets/bootstrap-4.0.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="<?php echo base_url();?>assets/fullcalendar-3.8.2/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap-datepicker-1.7.1/css/bootstrap-datepicker.min.css">
  <script src="<?php echo base_url();?>assets/js/moment-with-locales-2.19.3.min.js"></script>
  <script src="<?php echo base_url();?>assets/fullcalendar-3.8.2/fullcalendar.min.js"></script>
  <!--Datepicker widget needs its CSS and JS files to work //-->
  <script src="<?php echo base_url();?>assets/bootstrap-datepicker-1.7.1/js/bootstrap-datepicker.min.js"></script>
  <style type="text/css">
</style>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <a href="<?php echo base_url(); ?>supervisor/index">
        <button class="btn btn-primary"><i class="mdi mdi-chevron-left"></i>Back</button>
      </a>
    </div>
    <div class="col-md-4"></div>
    
  </div>
</div>

  <div class="container">
    <div class="row">
      <!-- <div class="col-md-2 col-sm-12"></div> -->
      <div class="col-md-12 col-sm-12">
        <br>
        <br>
        <h4 class="text-center">Event</h4>
        <br>
        <br>
        <div id='calendar' class="col-centered"></div>
        <div id='datepicker' class="col-centered"></div>
      </div>
      <!-- <div class="col-md-2 col-sm-12"></div> -->
    </div>
  </div>
    <!-- create modal of order item -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Plant a meeting</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group row">
                   <label for="example-datetime-local-input" class="col-2 col-form-label">Student</label>
                   <div class="col-10">
                       <select class="form-control" id="exampleSelect1">
                         <option>Student 1</option>
                         <option>Student 2</option>
                         <option>Student 3</option>
                         <option>Student 4</option>
                         <option>Student 5</option>
                       </select>
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="example-datetime-local-input" class="col-2 col-form-label">Date</label>
                    <div class="col-10">
                      <input class="form-control" type="date" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-password-input" class="col-2 col-form-label">Title</label>
                    <div class="col-10">
                      <input class="form-control" type="text" id="example-password-input" placeholder="Tile on Meeting">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-time-input" class="col-2 col-form-label">From</label>
                    <div class="col-10">
                      <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-time-input" class="col-2 col-form-label">To</label>
                    <div class="col-10">
                      <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-color-input" class="col-2 col-form-label">Color</label>
                    <div class="col-10">
                      <input class="form-control" type="color" value="#563d7c" id="example-color-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-color-input" class="col-2 col-form-label">Invite</label>
                    <div class="col-10">
                      <input class="form-control" type="text">
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </div>
          </div>
    <!-- End of modal creation -->
    <script type="text/javascript">
    $(document).ready(function() {
      $('.datepicker').datepicker({
        orientation:"bottom",
        todayBtn: true,
        todayHighlight: true,
        autoclose:true,
      });
    });
    </script>
    <script>
      $(document).ready(function() {

             $('#calendar').fullCalendar({
                 header: {
                     left: 'prev,next today',
                     center: 'title',
                     right: 'month,agendaWeek,agendaDay'
                 },
                 defaultDate: '2016-09-12',
                 navLinks: true, // can click day/week names to navigate views
                 selectable: true,
                 selectHelper: true,
                 select: function(start, end) {
                     // Display the modal.
                     // You could fill in the start and end fields based on the parameters
                     $('.modal').modal('show');

                 },
                 eventClick: function(event, element) {
                     // Display the modal and set the values to the event values.
                     $('.modal').modal('show');
                     $('.modal').find('#title').val(event.title);
                     $('.modal').find('#starts-at').val(event.start);
                     $('.modal').find('#ends-at').val(event.end);

                 },
                 editable: true,
                 eventLimit: true // allow "more" link when too many events


             });

             // Bind the dates to datetimepicker.
             // You should pass the options you need
             $("#starts-at, #ends-at").datetimepicker();

             // Whenever the user clicks on the "save" button om the dialog
             $('#save-event').on('click', function() {
                 var title = $('#title').val();
                 if (title) {
                     var eventData = {
                         title: title,
                         start: $('#starts-at').val(),
                         end: $('#ends-at').val()
                     };
                     $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                 }
                 $('#calendar').fullCalendar('unselect');

                 // Clear modal inputs
                 $('.modal').find('input').val('');

                 // hide modal
                 $('.modal').modal('hide');
             });
         });
    </script>

