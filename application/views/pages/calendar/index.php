<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$title = (isset($title)) ? $title :  "Skeleton";
$langCode= (isset($langCode)) ? $langCode :  "en";

?>

  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap-4.0.0/css/bootstrap.min.css">
  <link href="<?php echo base_url();?>assets/MDI-2.1.19/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

  <!-- Custom style //-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skeleton-1.0.0.css">
  <!-- Custom style skeleton -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/customCss.css">

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
  

  <marquee behavior="" direction=""><h1 class="text-info">Comming Soon..</h1></marquee>
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-2 col-sm-12"></div> -->
        <div class="col-md-12 col-sm-12">
          <br>
          <br>
          <h3 class="text-center text-info"><b class="text-info">Calendar</b></h3>
        <br>
        <br>
        <div id='calendar' class="col-centered"></div>
        <div id='datepicker' class="col-centered"></div>
      </div>

  </ul>
</div>
</nav>
<!-- create modal of order item -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Plan a meeting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group row">
        <label for="example-datetime-local-input" class="col-2 col-form-label">Name</label>
        <div class="col-10">
           <select class="form-control" id="exampleSelect1">
           <option>Chea Devith </option>
           <option>Ban Touch</option>
           <option>Mann Prem</option>
           <option>Mov Bunthean</option>
           <option>Khun Soben</option>
         </select>
        </div>
      </div><div class="form-group row">
        <label for="example-datetime-local-input" class="col-2 col-form-label">Date</label>
        <div class="col-10">
          <input class="form-control" type="date" value="2011-08-19T13:45:00" id="example-datetime-local-input">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-password-input" class="col-2 col-form-label">Title</label>
        <div class="col-10">
          <input class="form-control" type="text" value="Meeting about student student name" id="example-password-input">
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
       <label for="example-datetime-local-input" class="col-2 col-form-label">Invite</label>
       <div class="col-10">
         <select class="form-control" id="exampleSelect1">
           <option>devith.chea@student.passerellesnumerques.org </option>
           <option>prem.man@student.passerellesnumerques.org </option>
           <option>bunthean.man@student.passerellesnumerques.org</option>
           <option>soben.man@student.passerellesnumerques.org</option>
           <option>prem.man@student.passerellesnumerques.org</option>
         </select>
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
<!-- Start Profile -->
<div class="modal fade" id="myProfile">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
          <img src="<?php echo base_url();?>assets/images/studentimage/studentpiture.jpg" alt="" style="width: 100px;"><br>
          <h5 class="modal-title">Penh SOK</h5>
        </div>
        <div class="col-md-4 text-right">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <table> 
          <tr>
            <td><label for="">Sex</label></td>
            <td><b class="text-dark">: Female</b></td>
          </tr>
          <tr>
            <td> <label for="">DepartMent</label></td>
            <td><b class="text-dark">:  ERO Team</b></td>
          </tr>
          <tr>
            <td> <label for="">Phone</label></td>
            <td>
              <b class="text-dark">:   081477282 </b>
            </td>
          </tr>
          <tr>
            <td></td>
            <td><b class="text-dark">:   0713581071</b></td>
          </tr>
          <tr>
            <td><label for="">Personal Email</label></td>
            <td><b class="text-dark">:   first.last@gmail.com</b></td>
          </tr>
          <tr>
            <td><label for="">School Email</label></td>
            <td><b class="text-dark">:   first.last@student.passerellesnumeriques.org</b></td>
          </tr>
        </table>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

      <!-- <div class="col-md-2 col-sm-12"></div> -->
    </div>
  </div>
    <!-- create modal of order item -->
        <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                   <label for="example-datetime-local-input" class="col-2 col-form-label">Tutor</label>
                   <div class="col-10">
                       <select class="form-control" id="exampleSelect1">
                         <option>Tutor 1</option>
                         <option>Tutor 2</option>
                         <option>Tutor 3</option>
                         <option>Tutor 4</option>
                         <option>Tutor 5</option>
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
                      <input class="form-control" type="text" value="Meeting about student student name" id="example-password-input">
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

    /* calendar */
    $(document).ready(function() {

           $('#calendar').fullCalendar({
              header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listMonth'
              },
              navLinks: true, // can click day/week names to navigate views
              businessHours: true, // display business hours
              editable: true,
              selectable: true,
              selectHelper: true,
              events: [
                {
                  title: 'Business Lunch',
                  start: '2018-03-03T13:00:00',
                  constraint: 'businessHours'
                },
                {
                  title: 'Meeting',
                  start: '2018-03-13T11:00:00',
                  constraint: 'availableForMeeting', // defined below
                  color: '#257e4a'
                },
                {
                  title: 'Conference',
                  start: '2018-03-18',
                  end: '2018-03-20'
                },
                {
                  title: 'Party',
                  start: '2018-03-29T20:00:00'
                },

                // areas where "Meeting" must be dropped
                {
                  id: 'availableForMeeting',
                  start: '2018-03-11T10:00:00',
                  end: '2018-03-11T16:00:00',
                  rendering: 'background'
                },
                {
                  id: 'availableForMeeting',
                  start: '2018-03-13T10:00:00',
                  end: '2018-03-13T16:00:00',
                  rendering: 'background'
                },

                // red areas where no events can be dropped
                {
                  start: '2018-03-24',
                  end: '2018-03-28',
                  overlap: false,
                  rendering: 'background',
                  color: '#ff9f89'
                },
                {
                  start: '2018-03-06',
                  end: '2018-03-08',
                  overlap: false,
                  rendering: 'background',
                  color: '#ff9f89'
                }
              ],
                 editable: true,
                 eventDrop: function(event, delta, revertFunc) {

                   alert(event.title + " was dropped on " + event.start.format());

                   if (!confirm("Are you sure about this change?")) {
                     revertFunc();
                   }

                 },
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
               dayClick: function(date, jsEvent, view) {
                   date_last_clicked = $(this);
                   $(this).css('background-color', '#333');
                   $('#addModal').modal();
               },
               editable: true,
               eventLimit: true // allow "more" link when too many events


           });

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
   
