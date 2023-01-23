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
            <h1 class="m-0" style="color:indianred; font-weight:bolder; font-size:48px;">Dashboard</h1>
            <a href="/products/new/" class="btn btn-info" style="margin-top: 6px;">Add Product</a>

            <?php 
            if (session()->has('update')): ?>
              <div class="alert alert-warning">
                <?= session()->update; ?>
              </div>
              
            <?php endif; ?>

            <?php 
            if (session()->has('delete')): ?>
              <div class="alert alert-danger">
                <?= session()->delete; ?>
              </div>
              
            <?php endif; ?>

            <?php 
            if (session()->has('add')): ?>
              <div class="alert alert-success">
                <?= session()->add; ?>
              </div>
              
            <?php endif; ?>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product List</li>
            </ol>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <!-- Main row -->

        <div class="row">
            <div class="col-lg-12" style="background-color:darkcyan;">
            <div class="card">
              <div class="card-header" style="background-color:darkcyan;">
                <h3 class="card-title" style="color:white; font-weight:bolder; font-size:32px;">All Products</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="background-color:dimgray; color:snow">
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Details</th>
                    <th>Price</th>
                    <th>Product Image</th>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($products as $product){ ?>

                  <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['product_name']; ?></td>
                    <td><?php echo $product['product_details']; ?></td>
                    <td><?php echo $product['product_price']; ?></td>
                    <td><img src="<?= $product['product_image'];?>" style="width:100px; margin-left:15px;"/></td>
                    <td><?php echo $product['product_category']; ?></td>

                    <td>
                      <?php 
                        foreach ($category as $categoryName) : 
                          if ($categoryName['id'] == $product['product_category']) : ?>
                          <?php echo $categoryName['category_name']; ?>

                        <?php
                            endif;
                              endforeach; 
                        ?>
                    </td>
                    <td class="d-flex">
                    <!-- <a href="products/edit/<?php //echo $product['id'];?>" class="btn btn-success">Edit</a> -->
                      <!-- <a href="products/delete/<?php //echo $product['id'];?>" class="btn btn-danger">Delete</a> -->

                        <a href="<?= site_url("products/edit/" . $product['id']); ?>" class="btn btn-success">Edit</a> 
                      <a href="<?= site_url("products/delete/" . $product['id']); ?>" class="btn btn-danger">Delete</a>

                    </td>
                  </tr>
                </tbody>
                  <?php } ?>
                  <tfoot>
                  <tr style="background-color:dimgray; color:snow">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Price</th>
                    <th>Product Image</th>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
        </div>
     
        <!-- /.row (main row) -->
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

