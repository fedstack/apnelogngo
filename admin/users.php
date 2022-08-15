
<?php include 'header.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-sm-6">
          <h1>Users</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
          </ol>
        </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <button type="button" class="btn btn-info">Add User</button>
          </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: calc(100vh - 300px)">
                <table class="table table-head-fixed table-bordered text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Gender</th>
                      <th>Nationality</th>
                      <th>Aadhar</th>
                      <th>Pan</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>John Doe</td>
                      <td>john@gmail.com</td>
                      <td><span class="tag tag-success">9876543210</span></td>
                      <td>Male</td>
                      <td>Indian</td>
                      <td>234-776-987</td>
                      <td>PKHTR6543K</td>
                      <td style="vertical-align:middle">
                        <button type="button" class="btn btn-info btn-sm">Edit</button>
                        <button type="button" value="14" class="btn btn-danger btn-sm dltrecord">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>John Doe</td>
                      <td>john@gmail.com</td>
                      <td><span class="tag tag-success">9876543210</span></td>
                      <td>Male</td>
                      <td>Indian</td>
                      <td>234-776-987</td>
                      <td>PKHTR6543K</td>
                      <td style="vertical-align:middle">
                        <button type="button" class="btn btn-info btn-sm">Edit</button>
                        <button type="button" value="14" class="btn btn-danger btn-sm dltrecord">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>John Doe</td>
                      <td>john@gmail.com</td>
                      <td><span class="tag tag-success">9876543210</span></td>
                      <td>Male</td>
                      <td>Indian</td>
                      <td>234-776-987</td>
                      <td>PKHTR6543K</td>
                      <td style="vertical-align:middle">
                        <button type="button" class="btn btn-info btn-sm">Edit</button>
                        <button type="button" value="14" class="btn btn-danger btn-sm dltrecord">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'footer.php' ?>