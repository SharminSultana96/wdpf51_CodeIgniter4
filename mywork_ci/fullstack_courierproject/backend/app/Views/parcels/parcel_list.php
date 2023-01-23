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
                    <a href="/parcels/new" class="btn btn-info" style="margin-top: 6px;">Add Parcel</a>

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
                        <li class="breadcrumb-item">All Parcels</li>
                        <li class="breadcrumb-item active">Add Parcel</li>
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
                        <h3 class="card-title" style="color:white; font-weight:bolder; font-size:32px;">All Parcel</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
					<tr style="background-color:dimgray; color:snow">
						<th class="text-center">ID</th>
						<th>Reference Number</th>
						<th>Sender Name</th>
						<th>Recipient Name</th>
                        <th>Recipient Contact</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                <?php foreach($parcels as $parcel){ ?>
					<tr>
						<td class="text-center"><?php echo $parcel['id']; ?></td>
						<td><?php echo $parcel['reference_number']; ?></td>
						<td><?php echo $parcel['sender_name']; ?></td>
						<td><?php echo $parcel['recipient_name']; ?></td>
						<td><?php echo $parcel['recipient_contact']; ?></td>
						<td class="text-center">
							<?php 
							switch ($parcel['status']) {
								case '1':
									echo "<span class='badge badge-pill badge-info'> Collected</span>";
									break;
								case '2':
									echo "<span class='badge badge-pill badge-info'> Shipped</span>";
									break;
								case '3':
									echo "<span class='badge badge-pill badge-primary'> In-Transit</span>";
									break;
								case '4':
									echo "<span class='badge badge-pill badge-primary'> Arrived At Destination</span>";
									break;
								case '5':
									echo "<span class='badge badge-pill badge-primary'> Out for Delivery</span>";
									break;
								case '6':
									echo "<span class='badge badge-pill badge-primary'> Ready to Pickup</span>";
									break;
								case '7':
									echo "<span class='badge badge-pill badge-success'>Delivered</span>";
									break;
								case '8':
									echo "<span class='badge badge-pill badge-success'> Picked-up</span>";
									break;
								case '9':
									echo "<span class='badge badge-pill badge-danger'> Unsuccessfull Delivery Attempt</span>";
									break;
								
								default:
									echo "<span class='badge badge-pill badge-info'> Item Accepted by Courier</span>";
									
									break;
							}

							?>
						</td>
						<td class="d-flex">
		                <div class="btn-group">
                      <a href="<?= site_url("parcels/show/" . $parcel['id']); ?>" class="btn btn-info">View</a>
                        <a href="<?= site_url("parcels/edit/" . $parcel['id']); ?>" class="btn btn-success mx-2">Edit</a> 

                        <form method="post" action="<?= site_url("parcels/delete/" . $parcel['id']); ?>">
                        <button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</button>
                        <?= csrf_field() ?>

                        </form>
	                      </div>
						</td>
					</tr>	
				
				</tbody>
                <?php } ?>
                    <tfoot>
                        <tr style="background-color:dimgray; color:snow">
                        <th class="text-center">ID</th>
                        <th>Reference Number</th>
                        <th>Sender Name</th>
                        <th>Recipient Name</th>
                        <th>Recipient Contact</th>
                        <th>Status</th>
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