 <!-- DataTables Example -->

<button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg">Add New</button>

<div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      

      <div class="modal-body">
      <h2>News</h2>
        <form method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title" class="col-form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
            <span class="text-center text-danger" id="error"></span>
          </div>
          <div class="form-group">
            <label for="content" class="col-form-label">Content:</label>
            <textarea class="form-control" id="content" name="content" required></textarea>
            <span class="text-center text-danger" id="error_content"></span>
          </div>

       <div class="form-group">
          <label for="picture">Image:</label><br>
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
          <input type="file" class="form-control-file" name="pictures" id="pictures" accept="image/*"/>
      </div>

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" id="publish" value="Publish">
      </div>

    </div>
  </div>
</div>
<br><br>

<div class="alert alert-success alert-dismissible hidden-modal" id="show-modal">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p style="margin:0px; padding:0px;" id="message"></p>
</div>


 <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      All news</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Content</th>
              <th>Image</th>
              <th>Category</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>

            <?php
            
            $res = $sql->getData('SELECT * FROM news_view ORDER BY post_id DESC');
            foreach($res as $row)
            {
              ?>     
              <tr>
                <td><?php echo $row->post_id; ?></td>
                <td><?php echo substr($row->title, 0 , 40)."..."; ?></td>
                <td><?php echo substr($row->content, 0 , 100)."..."; ?></td>
                <td><img src="../../assets/img/<?php echo $row->main_image; ?>" alt="" width=100></td>
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
