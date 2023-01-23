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
              <li class="breadcrumb-item">All Branches</li>
              <li class="breadcrumb-item active">Edit Branch</li>
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

        <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Parcel Edit Form</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- <div class="container-fluid"> -->
        <!-- <div class="row"> -->
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Branch Edit Form</h3>
              </div>

              <?php 
                  $errors = [];
                  if(session()->has('errors')){
                    $errors = session()->errors;
                  }

              ?>

              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?= base_url('parcels/update/' . $parcel['id']); ?>" enctype="multipart/form-data">
              <?= csrf_field() ?>
              <div class="card-body">
                <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                      <label for="referance_number" class="control-label">Reference Number</label>
                      <input type="text" name="reference_number" id="reference_number" class="form-control form-control-sm" placeholder="Enter Reference Number" value="<?php echo old('reference_number') ? old('reference_number') : $parcel['reference_number'] ?>">

                      <span class="text-danger">
                      <?= 
                        isset($errors['reference_number']) ? $errors['reference_number'] : '';
                      ?>
                      </span>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <b style="background-color:coral; color:black;">Sender Information</b>
                    <hr>
                    <hr>
                    <div class="form-group">
                      <label for="name" class="control-label">Sender Name</label>
                      <input type="text" name="sender_name" id="sender_name" class="form-control form-control-sm" placeholder="Enter Sender Name" value="<?php echo old('sender_name') ? old('sender_name') : $parcel['sender_name'] ?>">

                      <span class="text-danger">
                      <?= 
                        isset($errors['sender_name']) ? $errors['sender_name'] : '';
                      ?>
                      </span>
                    </div>
                    <div class="form-group">
                      <label for="sender_address" class="control-label">Address</label>
                      <input type="text" name="sender_address" id="sender_address" class="form-control form-control-sm" placeholder="Enter Address" value="<?php echo old('sender_address') ? old('sender_address') : $parcel['sender_address'] ?>">

                      <span class="text-danger">
                      <?= 
                        isset($errors['sender_address']) ? $errors['sender_address'] : '';
                      ?>
                      </span>
                    </div>
                    <div class="form-group">
                      <label for="sender_contact" class="control-label">Contact</label>
                      <input type="text" name="sender_contact" id="sender_contact" class="form-control form-control-sm" placeholder="Enter Contact Number" value="<?php echo old('sender_contact') ? old('sender_contact') : $parcel['sender_contact'] ?>">

                      <span class="text-danger">
                      <?= 
                        isset($errors['sender_contact']) ? $errors['sender_contact'] : '';
                      ?>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <b style="background-color:coral; color:black;">Recipient Information</b>
                    <hr>
                    <hr>
                    <div class="form-group">
                      <label for="name" class="control-label">Recipient Name</label>
                      <input type="text" name="recipient_name" id="recipient_name" class="form-control form-control-sm" placeholder="Enter Recipient Name" value="<?php echo old('recipient_name') ? old('recipient_name') : $parcel['recipient_name'] ?>">

                      <span class="text-danger">
                      <?= 
                        isset($errors['recipient_name']) ? $errors['recipient_name'] : '';
                      ?>
                      </span>
                    </div>
                    <div class="form-group">
                      <label for="recipient_address" class="control-label">Address</label>
                      <input type="text" name="recipient_address" id="recipient_address" class="form-control form-control-sm" placeholder="Enter Address" value="<?php echo old('recipient_address') ? old('recipient_address') : $parcel['recipient_address'] ?>">

                      <span class="text-danger">
                      <?= 
                        isset($errors['recipient_address']) ? $errors['recipient_address'] : '';
                      ?>
                      </span>
                    </div>
                    <div class="form-group">
                      <label for="recipient_contact" class="control-label">Contact</label>
                      <input type="text" name="recipient_contact" id="recipient_contact" class="form-control form-control-sm" placeholder="Enter Contact Number" value="<?php echo old('recipient_contact') ? old('recipient_contact') : $parcel['recipient_contact'] ?>">

                      <span class="text-danger">
                      <?= 
                        isset($errors['recipient_contact']) ? $errors['recipient_contact'] : '';
                      ?>
                      </span>
                    </div>
                  </div>
                </div>
                <hr>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="dtype">Type</label>
                      <input type="checkbox" name="type" id="dtype" <?php echo isset($type) && $type == 1 ? 'checked' : '' ?> data-bootstrap-switch data-toggle="toggle" data-on="Deliver" data-off="Pickup" class="switch-toggle status_chk" data-size="xs" data-offstyle="info" data-width="5rem" value="1">

                      <label for="dtype" class="btn btn-primary btn-xs toggle-on">Deliver</label>
                      <label for="dtype" class="btn btn-info btn-xs toggle-off">Pickup</label>
                      <span class="toggle-handle btn btn-light btn-xs"></span>


                      <small>Deliver = Deliver to Recipient Address</small>
                      <small>, Pickup = Pickup to nearest Branch</small>

                    </div>
                  </div>
                  <div class="col-md-6" id="" <?php echo isset($type) && $type == 1 ? 'style="display: none"' : '' ?>>
                    <?php //if($_SESSION['login_branch_id'] <= 0): 
                    ?>
                    <div class="form-group" id="fbi-field">
                      <label for="branch" class="control-label">Branch Processed</label>
                      <select name="branch_name" id="from_branch_id" class="form-control select2">
                        <option value="" selected disabled>Select One</option>
                        <?php //foreach ($branch as $br) : ?>
                          <!-- <option value="<?//= $branch['id']; ?>"><?//= $branch['branch_name']; ?> -->
                          </option>
                        <?php //endforeach ?>

                      </select>
                    </div>

                    <div class="form-group" id="tbi-field">
                      <label for="branch" class="control-label">Pickup Branch</label>
                      <select name="branch_name" id="to_branch_id" class="form-control select2">
                        <option value="" selected disabled>Select One</option>
                        <?php //foreach ($branch as $br) : ?>
                          <!-- <option value="<?//= $br['id']; ?>"><?//= $br['branch_name']; ?> -->
                          </option>
                        <?php //endforeach ?>

                      </select>
                    </div>
                  </div>
                </div>
                <hr>

                <b>Parcel Information</b>
                <table class="table table-bordered" id="parcel-items">
                  <thead>
                    <tr>
                      <th>Weight</th>
                      <th>Height</th>
                      <th>Length</th>
                      <th>Width</th>
                      <th>Price</th>
                      <?php if (!isset($id)) : ?>
                        <th></th>
                      <?php endif; ?>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="text" name='weight[]' value="<?php echo isset($weight) ? $weight : '' ?>"></td>
                      <td><input type="text" name='height[]' value="<?php echo isset($height) ? $height : '' ?>"></td>
                      <td><input type="text" name='length[]' value="<?php echo isset($length) ? $length : '' ?>"></td>
                      <td><input type="text" name='width[]' value="<?php echo isset($width) ? $width : '' ?>"></td>
                      <td><input type="text" class="text-right number" name='price[]' value="<?php echo isset($price) ? $price : '' ?>"></td>
                      <?php if (!isset($id)) : ?>
                        <td><button class="btn btn-sm btn-danger" type="button" onclick="$(this).closest('tr').remove() && calc()"><i class="fa fa-times"></i></button></td>
                      <?php endif; ?>
                    </tr>
                  </tbody>

                  <tfoot>
                    <th colspan="4" class="text-right">Total</th>
                    <th class="text-right" id="tAmount">0.00</th>
                  </tfoot>
                </table>

                <div class="row">
                  <div class="col-md-12 d-flex justify-content-end">
                    <button class="btn btn-sm btn-primary bg-gradient-primary mt-2" type="button" id="new_parcel"><i class="fa fa-item"></i> Add Item</button>
                  </div>
                </div>

              </div>
              </div>

              <div class="card-footer border-top border-info">
                <div class="d-flex w-100 justify-content-center align-items-center">
                  <button type="submit" class="btn btn-warning">Update</button>
                  <!-- <button type="submit" class="btn btn-secondary">Cancel</button> -->
                  <!-- <a class="btn btn-flat bg-gradient-secondary mx-2">Cancel</a> -->
                </div>
              <!-- <button type="submit" class="btn btn-warning">Update</button> -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
         
        <!-- </div> -->
       
      <!-- </div> -->
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  <!-- </div> -->
     
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div id="ptr_clone" class="d-none">
  <table>
    <tr>
      <td><input type="text" name='weight[]'></td>
      <td><input type="text" name='height[]'></td>
      <td><input type="text" name='length[]'></td>
      <td><input type="text" name='width[]'></td>
      <td><input type="text" class="text-right number" name='price[]'></td>
      <td><button class="btn btn-sm btn-danger" type="button" onclick="$(this).closest('tr').remove() && calc()"><i class="fa fa-times"></i></button></td>
    </tr>
  </table>
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- ./wrapper -->
<?php echo view('layouts/footer.php') ?>