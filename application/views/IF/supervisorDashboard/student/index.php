<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 class="text-center text-primary">Student List</h2>
        </div>
        <table id="studentList" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Bunthean</td>
                
                <td>
                <span data-toggle="modal" data-target="#exampleModal">
                    <i class="mdi mdi-message-plus text-success" style="font-size: 24px; cursor: pointer;" ></i>
                </span>
                <!-- </button> -->

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Send message</button>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="<?php echo base_url() ?>/supervisor/questionnair"><i class="mdi mdi-checkbox-marked-outline text-success" style="font-size: 24px;" ></i></a>
                </td>

            </tr>
            <tr>
                <td>2</td>
                <td>Prem</td>
                
                <td>
                <span data-toggle="modal" data-target="#exampleModal">
                    <i class="mdi mdi-message-plus text-success" style="font-size: 24px; cursor: pointer;" ></i>
                </span>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Send message</button>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="<?php echo base_url() ?>/supervisor/questionnair"><i class="mdi mdi-checkbox-blank-outline text-success" style="font-size: 24px;" ></i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                 <td>Devit</td>
               
                <td>
               
                <span data-toggle="modal" data-target="#exampleModal">
                    <i class="mdi mdi-message-plus text-success" style="font-size: 24px; cursor: pointer;" ></i>
                </span>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Send message</button>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="<?php echo base_url() ?>/supervisor/questionnair"><i class="mdi mdi-pencil-box-outline text-success" style="font-size: 24px;" ></i></a>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#studentList').DataTable();
} );
</script>