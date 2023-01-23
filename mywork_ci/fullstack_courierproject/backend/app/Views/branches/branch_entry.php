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
              <li class="breadcrumb-item active">Add Branch</li> 
              <li class="breadcrumb-item">All Branches</li>
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
            <h1>Branch Entry Form</h1>
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
                <h3 class="card-title">Add New Branch</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?= base_url('branches/create'); ?>" enctype="multipart/form-data">
              <?= csrf_field() ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Branch Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Branch Name" name="branch_name" value="<?php echo old('branch_name')?>">

                    <span class="text-danger">
                      <?php 
                        if(isset($error['branch_name'])){
                        echo $errors['branch_name'];
                    }
                      ?>
                    </span>

                  </div>
                  <div class="form-group">
                    <label for="details">Branch Details</label>
                    <textarea class="form-control" id="summernote" placeholder="Enter Details" name="branch_details" ><?php echo old('branch_details')?></textarea>
                    <span class="text-danger">
                      <?php 
                        if(isset($error['branch_details'])){
                       echo $errors['branch_details']; 
              
                    }
                      ?>
                    </span>
                  </div>
                  
                

                  <div class="form-group">
                    <label for="phone">Branch Phone</label>
                    <input type="text" class="form-control" id="branch_phone" placeholder="Enter Phone Number" name="branch_phone" value="<?php echo old('branch_phone')?>">

                    <span class="text-danger">
                      <?php 
                        if(isset($error['branch_phone'])){
                        echo $errors['branch_phone'];
                    }
                      ?>
                    </span>
                  </div>

                  <div class="form-group">
                    <label for="image">Branch Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Image" name="branch_image" value="<?php echo old('branch_image')?>">
                    <span class="text-danger">
                      <?php 
                        if(isset($error['branch_image'])){
                       echo $errors['branch_image']; 
              
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