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
                    <a href="/branches/new" class="btn btn-info mt-2" style="margin-top: 6px;">Add Branch</a>

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
                        <!-- <li class="breadcrumb-item">All Branches</li>
                        <li class="breadcrumb-item active">Add Branch</li> -->
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
                        <h3 class="card-title" style="color:white; font-weight:bolder; font-size:32px;">All Branch</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr style="background-color:dimgray; color:snow">
                                    <th>ID</th>
                                    <th>Branch Name</th>
                                    <th>Branch Image</th>
                                    <th>Branch Details</th>
                                    <th>Branch Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($branches as $branch) { ?>

                                    <tr>
                                        <td><?php echo $branch['id']; ?></td>
                                        <td><?php echo $branch['branch_name']; ?></td>
                                        <td>
                                            <img src="<?= site_url() . $branch['branch_image'];?>" style="width:80px; height:50px; height:70px; margin-left:7px;"/>
                                        </td>
                                        <td><?php echo $branch['branch_details']; ?></td>
                                        <td><?php echo $branch['branch_phone']; ?></td>

                                        <!-- <td>
                                            <?php 
                                                //foreach($branch as $branchName) : if($branchName['id'] == $staff['branch_id']) : ?>
                                            <?php //echo $branchName['branch_name']; ?>

                                            <?php
                                                //endif;
                                                   // endforeach;
                                            ?>
                                        </td> -->

                                        <td class="d-flex">
                                        <a href="<?= site_url("branches/edit/" . $branch['id']); ?>" class="btn btn-info">Edit</a> 
                                        <form method="post" action="<?= site_url("branches/delete/" . $branch['id']); ?>">
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</button>
                                        <?= csrf_field() ?> 

                                        </form>
                                        
                                        
                                        <!-- <a href="<?//= site_url("branches/delete/" . $branch['id']); ?>" class="btn btn-warning mx-2 delete">Delete</a> -->
                                        </td>
                                        </td>
                                    </tr>

                                    </tr>
                            </tbody>
                        <?php } ?>
                        <tfoot>
                            <tr style="background-color:dimgray; color:snow">
                            <th>ID</th>
                            <th>Branch Name</th>
                            <th>Branch Image</th>
                            <th>Branch Details</th>
                            <th>Branch Phone</th>
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