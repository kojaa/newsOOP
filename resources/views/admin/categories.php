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
                  
                    $res = $sql->getAllDesc('categories', 'category_id');
                    while($row = $res->fetch_object()){

                  ?>

                  <tr>
                    <td><?php echo $row->category_id; ?></td>
                    <td><?php echo $row->name; ?></td>
                    <td>Edit</td>
                    <td>Delete</td>
                  </tr>

                  <?php } ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->