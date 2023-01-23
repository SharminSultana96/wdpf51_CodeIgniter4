<?php echo view('layouts/header.php') ?>
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/assets/dist/img/AdminLTELogo.png" alt="" height="60" width="60">
</div>

<!-- Navbar -->
<?php echo view('layouts/top_navbar.php') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php echo view('layouts/left_sidebar.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color:indianred; font-weight:bolder; font-size:48px;">Dashboard</h1>
                    <a href="/products/new" class="btn btn-info" style="margin-top: 6px;">Add Product</a>

                    <?php
                        if(session()->has('add')): ?>
                        <div class="alert alert-success mt-4">
                            <?= session()->add; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                        if(session()->has('update')): ?>
                        <div class="alert alert-warning mt-4">
                            <?= session()->update; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                        if(session()->has('delete')): ?>
                        <div class="alert alert-danger mt-4">
                            <?= session()->delete; ?>
                        </div>
                    <?php endif; ?>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">All Products</li>
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
        <div class="row">
            <div class="col-lg-12" style="background-color:darkcyan;">
                <div class="card">
                    <div class="card-header" style="background-color:darkcyan;">
                        <h3 class="card-title" style="color:white; font-weight:bolder; font-size:32px;">All Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr style="background-color:dimgray; color:snow">
                                    <th>ID</th>
                                    <th>Product Category</th>
                                    <th>Product Image</th>
                                    <th>Product Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product) { ?>

                                    <tr>
                                        <td><?php echo $product['id']; ?></td>
                                        <td><?php echo $product['product_category']; ?></td>
                                        <td>
                                            <img src="<?= site_url() . $product['product_image'];?>" style="width:90px; height:80px;"/>
                                        </td>
                                        <td><?php echo $product['product_details']; ?></td>

                                        <td class="d-flex">
                                        <a href="<?= site_url("products/edit/" . $product['id']); ?>" class="btn btn-info">Edit</a> 
                                        <form method="post" action="<?= site_url("products/delete/" . $product['id']); ?>">
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</button>
                                        <?= csrf_field() ?> 

                                        </form>
                                                        
                                        
                                        <!-- <a href="<?//= site_url("products/delete/" . $product['id']); ?>" class="btn btn-warning mx-2 delete">Delete</a> -->
                                        </td>
                                        </td>
                                    </tr>

                                    </tr>
                            </tbody>
                        <?php } ?>
                        <tfoot>
                            <tr style="background-color:dimgray; color:snow">
                                <th>ID</th>
                                <th>Product Category</th>
                                <th>Product Image</th>
                                <th>Product Details</th>
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

<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.content-wrapper -->
<?php echo view('layouts/footer.php') ?>

<script>
$(function() {
$(".delete").click(function(e) {
e.preventDefault();
$.post(this.href, function() {
alert('Successfully Deleted');
location.reload();
});
});
});
</script>