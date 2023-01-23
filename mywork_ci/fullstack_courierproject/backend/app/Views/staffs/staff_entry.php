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
              <li class="breadcrumb-item active">Add Staff</li>
              <li class="breadcrumb-item">All Staffs</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Staff Entry Form</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php
        if(session()->has('errors')){
          $errors = session()->errors;
        }
    ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Add New Staff</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?= base_url('staffs/create'); ?>" enctype="multipart/form-data">
              <?= csrf_field() ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Staff Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Staff Name" name="staff_name" value="<?php echo old('staff_name')?>">

                    <span class="text-danger">
                      <?php 
                        if(isset($error['staff_name'])){
                        echo $errors['staff_name'];
                    }
                      ?>
                    </span>

                  </div>
                  
                  <div class="form-group">
                    <label for="email">Staff Email</label>
                    <input type="text" class="form-control" id="staff_email" placeholder="Enter Email" name="staff_email" value="<?php echo old('staff_email')?>">

                    <span class="text-danger">
                      <?php 
                        if(isset($error['staff_email'])){
                        echo $errors['staff_email'];
                    }
                      ?>
                    </span>

                  </div>

                  <div class="form-group">
                    <label for="phone">Staff Phone</label>
                    <input type="text" class="form-control" id="staff_phone" placeholder="Enter Phone Number" name="staff_phone" value="<?php echo old('staff_phone')?>">

                    <span class="text-danger">
                      <?php 
                        if(isset($error['staff_phone'])){
                        echo $errors['staff_phone'];
                    }
                      ?>
                    </span>
                  </div>

                  <div class="form-group">
                    <label for="branch">Branch Name</label>
                    <select name="branch_id" class="form-control">
                      <option value="">Select One</option>

                      <?php
                          foreach($branch as $branchName): { ?>
                            <option value="<?= $branchName['id'];?>"><?= $branchName['branch_name'];?></option>
                          
                          
                          <?php } ?>


                      <?php endforeach;?>
                    </select>
                    
                  </div>

                  

                    <span class="text-danger">
                  
                    </span>
                

                  <div class="form-group">
                    <label for="image">Staff Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Image" name="staff_image" value="<?php echo old('staff_image')?>">
                    <span class="text-danger">
                      <?php 
                        if(isset($error['staff_image'])){
                       echo $errors['staff_image']; 
              
                    }
                      ?>
                    </span>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
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