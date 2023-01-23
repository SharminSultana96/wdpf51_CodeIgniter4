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
              <li class="breadcrumb-item active">Add Product</li>
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
            <h1>Product Entry Form</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
      if (session()->has('errors')){
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?= base_url('products/create'); ?>">
                <div class="card-body">
                    <?php
                    // if(isset($validation)) {
                    //     $errors = $validation->getErrors();
                    //     if (count($errors) > 0) {
                    //         echo "<ul>";
                    //         foreach ($errors as $err){
                    //             echo "<li>$err</li>";
                    //         }
                    //         echo "</ul>";
                    //     }
                    // }
                    
                    ?>

                  <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="product_name" value="<?php echo old('product_name')?>">
                    <span class="text-danger">
                      <?php 
                        if(isset($error['product_name'])){
                       echo $errors['product_name']; 
              
                    }
                      ?>
                    </span>

                  </div>
                  <div class="form-group">
                    <label for="details">Product Details</label>
                    <textarea class="form-control" id="summernote" placeholder="Enter Details" name="product_details" ><?php echo old('product_details')?></textarea>
                    <span class="text-danger">
                      <?php 
                        if(isset($error['product_details'])){
                       echo $errors['product_details']; 
              
                    }
                      ?>
                    </span>
                  </div>
                  
                  <div class="form-group">
                    <label for="price">Product Name</label>
                    <input type="text" class="form-control" id="price" placeholder="Enter Price" name="product_price" value="<?php echo old('product_price')?>">
                    <span class="text-danger">
                      <?php 
                        if(isset($error['product_price'])){
                       echo $errors['product_price']; 
              
                    }
                      ?>
                    </span>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
<!-- jQuery -->

