 <!-- DataTables Example -->

<button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg">Add New</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      

      <div class="modal-body">
      <h2>Categories</h2>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>


    </div>
  </div>
</div>
<br><br>

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Categories</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                  
                  $res = $sql->getData('SELECT * FROM categories ORDER BY category_id DESC');
                  foreach($res as $row)
                  {
                    ?>     
                    <tr>
                      <td><?php echo $row->category_id; ?></td>
                      <td><?php  echo $row->category_name; ?></td>
                      <td><button type="button" class="btn btn-info" id="test-modal" data-toggle="modal"><i class="far fa-edit"></i></button></td>
                      <td>    
                  <!-- delete modal button -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-trash-alt"></i>
                </button>

                <!-- del modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>
                </td>

                    </tr>
                
                    <?php } ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->