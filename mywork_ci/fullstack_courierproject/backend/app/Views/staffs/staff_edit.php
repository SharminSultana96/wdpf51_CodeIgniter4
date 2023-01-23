<?php echo view('layouts/header.php')?>
<!-- move to header.php -->
  <!-- Navbar -->
 <!-- move to topbar.php -->
 <?php echo view('layouts/top_navbar.php') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <!-- move to left_sidebar.php -->
<?php echo view('layouts/left_sidebar.php') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">All Staffs</li>
              <li class="breadcrumb-item active">Edit Staff</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <!-- /.row -->
        <!-- Main row -->

        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Staff Edit Form</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Staff Edit Form</h3>
              </div>

              <?php 
                  $errors = [];
                  if(session()->has('errors')){
                    $errors = session()->errors;
                  }

              ?>

              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?= base_url('staffs/update/' . $staff['id']); ?>" enctype="multipart/form-data">
              <?= csrf_field(); ?> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Staff Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Staff Name" name="staff_name" value="<?php echo old('staff_name') ? old('staff_name') : $staff['staff_name'] ?>">

                    <span class="text-danger">
                      <?= 
                        isset($errors['staff_name']) ? $errors['staff_name'] : '';
                      ?>
                    </span>

                  </div>
                  <!-- <div class="form-group">
                    <label for="details">Product Details</label>
                    <textarea class="form-control" id="summernote" placeholder="Enter Details" name="product_details" ><?php //echo set_value('product_details')?></textarea> -->
                  <!-- </div> -->
                  
                  <div class="form-group">
                    <label for="email">Staff Email</label>
                    <input type="text" class="form-control" id="staff_email" placeholder="Enter Email" name="staff_email" value="<?php echo old('staff_email') ? old('staff_email') : $staff['staff_email']?>">

                    <span class="text-danger">
                      <?= 
                        isset($errors['staff_email']) ? $errors['staff_email'] : '';
                      ?>
                    </span>

                  </div>

                  <div class="form-group">
                    <label for="phone">Staff Phone</label>
                    <input type="text" class="form-control" id="staff_phone" placeholder="Enter Phone Number" name="staff_phone" value="<?php echo old('staff_phone') ? old('staff_phone') : $staff['staff_phone'] ?>">

                    <span class="text-danger">
                      <?= 
                        isset($errors['staff_phone']) ? $errors['staff_phone'] : '';
                      ?>
                    </span>
                  </div>

                  <div class="form-group">
                    <label for="image">Product Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Staff Image" name="staff_image" value="">
                    <img src="<?= old('staff_image') ?  old('staff_image') : $staff['staff_image']?>" style="width: 50px">
                    <span class="text-danger">
                      <?= 
                        isset($errors['staff_image']) ? $errors['staff_image'] : '';
                      ?>
                    </span>
                  </div>

                  <div class="form-group">
                    <label for="branch">Branch ID</label>
                    <input type="text" class="form-control" id="branch" placeholder="Enter Branch ID" name="branch_id" value="<?= old('branch_id') ?  old('branch_id') : $staff['branch_id']?>">
                    <span class="text-danger">
                      <?= 
                        isset($errors['branch_id']) ? $errors['branch_id'] : '';
                      ?>
                    </span>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
         
        </div>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
     
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php echo view('layouts/footer.php') ?>
