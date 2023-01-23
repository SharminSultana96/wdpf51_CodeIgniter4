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
              <li class="breadcrumb-item active">Edit Product</li>
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
            <h1>Product Edit Form</h1>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Product Edit Form</h3>
              </div>

              <?php
                $errors = []; 
                if (session()->has('errors')){
                    $errors = session()->errors;
                    // print_r($errors);

                    } 
                ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?= base_url('products/update/' . $product['id']); ?>" enctype="multipart/form-data">
                <div class="card-body">
                    <?php
                        // if (isset($error) && count($errors) > 0) {
                        //     echo "<ul>";
                        //     foreach ($errors as $err){
                        //         echo "<li>$err</li>";
                        //     }
                        //     echo "</ul>";
                        // }
                    ?>

                  <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="product_name" value="<?= old('product_name') ?  old('product_name') : $product['product_name'] ?>">
                    <span class="text-danger">
                      <?= 
                        isset($errors['product_name']) ? $errors['product_name'] : '';
                      ?>
                    </span>
                  </div>

                  <div class="form-group">
                    <label for="details">Product Details</label>
                    <textarea class="form-control" id="summernote" placeholder="Enter Details" name="product_details" ><?= old('product_details') ?  old('product_details') : $product['product_details']?></textarea>
                    <span class="text-danger">
                      <?= 
                        isset($errors['product_details']) ? $errors['product_details'] : '';
                      ?>
                    </span>
                  </div>
                  
                  <div class="form-group">
                    <label for="price">Product Price</label>
                    <input type="text" class="form-control" id="price" placeholder="Enter Price" name="product_price" value="<?= old('product_price') ?  old('product_price') : $product['product_price']?>">
                    <span class="text-danger">
                      <?= 
                        isset($errors['product_price']) ? $errors['product_price'] : '';
                      ?>
                    </span>
                  </div>

                  <div class="form-group">
                    <label for="image">Product Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Image" name="product_image" value="">
                    <img src="<?= old('product_image') ?  old('product_image') : $product['product_image']?>" style="width: 50px">
                    <span class="text-danger">
                      <?= 
                        isset($errors['product_image']) ? $errors['product_image'] : '';
                      ?>
                    </span>
                  </div>

                  <div class="form-group">
                    <label for="category">Product Category</label>
                    <input type="text" class="form-control" id="category" placeholder="Enter Category" name="product_category" value="<?= old('product_category') ?  old('product_category') : $product['product_category']?>">
                    <span class="text-danger">
                      <?= 
                        isset($errors['product_category']) ? $errors['product_category'] : '';
                      ?>
                    </span>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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

