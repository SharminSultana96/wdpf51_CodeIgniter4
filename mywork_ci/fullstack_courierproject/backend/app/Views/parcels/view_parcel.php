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
			<div class="col-lg-12">
				<div class="row">
					<div class="col-md-12">
						<div class="callout callout-info">
							<dl>
								<dt>Tracking Number:</dt>
								<dd>
									<h4><b><?php echo $parcel['reference_number']; ?></b></h4>
								</dd>
							</dl>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="callout callout-info">
							<b class="border-bottom border-primary">Sender Information</b>
							<dl>
								<dt>Name:</dt>
								<dd><?php echo $parcel['sender_name'] ?></dd>
								<dt>Address:</dt>
								<dd><?php echo $parcel['sender_address'] ?></dd>
								<dt>Contact:</dt>
								<dd><?php echo $parcel['sender_contact'] ?></dd>
							</dl>
						</div>
						<div class="callout callout-info">
							<b class="border-bottom border-primary">Recipient Information</b>
							<dl>
								<dt>Name:</dt>
								<dd><?php echo $parcel['recipient_name']?></dd>
								<dt>Address:</dt>
								<dd><?php echo $parcel['recipient_address']?></dd>
								<dt>Contact:</dt>
								<dd><?php echo $parcel['recipient_contact']?></dd>
							</dl>
						</div>
					</div>
					<div class="col-md-6">
						<div class="callout callout-info">
							<b class="border-bottom border-primary">Parcel Details</b>
							<div class="row">
								<div class="col-sm-6">
									<dl>
										<dt>Wight:</dt>
										<dd><?php echo $parcel['weight'] ?></dd>
										<dt>Height:</dt>
										<dd><?php echo $parcel['height'] ?></dd>
										<dt>Price:</dt>
										<dd><?php echo $parcel['price'] ?></dd>
									</dl>
								</div>
								<div class="col-sm-6">
									<dl>
										<dt>Width:</dt>
										<dd><?php echo $parcel['width'] ?></dd>
										<dt>length:</dt>
										<dd><?php echo $parcel['length'] ?></dd>
										<dt>Type:</dt>
										<dd><?php echo $parcel['type'] == 1 ? "<span class='badge badge-primary'>Deliver to Recipient</span>" : "<span class='badge badge-info'>Pickup</span>" ?></dd>
									</dl>
								</div>
							</div>
							<dl>
								<dt>Branch Accepted the Parcel:</dt>
								<dd><?php echo $parcel['from_branch_id'] ?></dd>
								<?php if ($parcel['type'] == 2) : ?>
									<dt>Nearest Branch to Recipient for Pickup:</dt>
									<dd><?php echo $parcel['to_branch_id'] ?></dd>
								<?php endif; ?>
								<dt>Status:</dt>
								<dd>
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
									
									<span class="btn badge badge-primary bg-gradient-primary" id='update_status'><i class="fa fa-edit"></i> Update Status</span>
								</dd>

							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer display p-0 m-0">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div>
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	
	<!-- /.content -->
</div>

<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.content-wrapper -->
<?php echo view('layouts/footer.php') ?>

<script>
	$('#update_status').click(function() {
		// alert();
		uni_modal("Update Status of: <?php echo $parcel['reference_number'] ?>", "manage_parcel_status.php?id=<?php echo $parcel['id'] ?>&cs=<?php echo $parcel['status'] ?>", "")
	})
</script>
