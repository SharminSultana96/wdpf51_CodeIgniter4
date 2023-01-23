<?php echo view('layouts/header.php') ?>
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
            <li class="breadcrumb-item active">Add Parcel</li>
            <li class="breadcrumb-item">All Parcels</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <!-- <div class="content-wrapper"> -->
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Parcel Entry Form</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <?php
      if (session()->has('errors')) {
        $errors = session()->errors;
      }
      ?>

      <!-- Main content -->
      <section class="content">
        <!-- <div class="container-fluid"> -->
        <!-- <div class="row"> -->
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Add New Parcel</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="<?= base_url('parcels/create'); ?>" enctype="multipart/form-data">
              <?= csrf_field() ?>
              <div class="card-body">
                <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                      <label for="referance_number" class="control-label">Reference Number</label>
                      <input type="text" name="reference_number" id="reference_number" class="form-control form-control-sm" placeholder="Enter Reference Number" value="<?php echo old('reference_number') ?>">

                      <span class="text-danger">
                        <?php
                        if (isset($error['reference_number'])) {
                          echo $errors['reference_number'];
                        }
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
                      <input type="text" name="sender_name" id="sender_name" class="form-control form-control-sm" placeholder="Enter Sender Name" value="<?php echo old('sender_name') ?>">

                      <span class="text-danger">
                        <?php
                        if (isset($error['sender_name'])) {
                          echo $errors['sender_name'];
                        }
                        ?>
                      </span>
                    </div>
                    <div class="form-group">
                      <label for="sender_address" class="control-label">Address</label>
                      <input type="text" name="sender_address" id="sender_address" class="form-control form-control-sm" placeholder="Enter Address" value="<?php echo old('sender_address') ?>">

                      <span class="text-danger">
                        <?php
                        if (isset($error['sender_address'])) {
                          echo $errors['sender_address'];
                        }
                        ?>
                      </span>
                    </div>
                    <div class="form-group">
                      <label for="sender_contact" class="control-label">Contact</label>
                      <input type="text" name="sender_contact" id="sender_contact" class="form-control form-control-sm" placeholder="Enter Contact Number" value="<?php echo old('sender_contact') ?>">

                      <span class="text-danger">
                        <?php
                        if (isset($error['sender_contact'])) {
                          echo $errors['sender_contact'];
                        }
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
                      <input type="text" name="recipient_name" id="recipient_name" class="form-control form-control-sm" placeholder="Enter Recipient Name" value="<?php echo old('recipient_name') ?>">

                      <span class="text-danger">
                        <?php
                        if (isset($error['recipient_name'])) {
                          echo $errors['recipient_name'];
                        }
                        ?>
                      </span>
                    </div>
                    <div class="form-group">
                      <label for="recipient_address" class="control-label">Address</label>
                      <input type="text" name="recipient_address" id="recipient_address" class="form-control form-control-sm" placeholder="Enter Address" value="<?php echo old('recipient_address') ?>">

                      <span class="text-danger">
                        <?php
                        if (isset($error['recipient_address'])) {
                          echo $errors['recipient_address'];
                        }
                        ?>
                      </span>
                    </div>
                    <div class="form-group">
                      <label for="recipient_contact" class="control-label">Contact</label>
                      <input type="text" name="recipient_contact" id="recipient_contact" class="form-control form-control-sm" placeholder="Enter Contact Number" value="<?php echo old('recipient_contact') ?>">

                      <span class="text-danger">
                        <?php
                        if (isset($error['recipient_contact'])) {
                          echo $errors['recipient_contact'];
                        }
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
                        <?php foreach ($branch as $br) : ?>
                          <option value="<?= $br['id']; ?>"><?= $br['branch_name']; ?>
                          </option>
                        <?php endforeach ?>

                      </select>
                    </div>

                    <div class="form-group" id="tbi-field">
                      <label for="branch" class="control-label">Pickup Branch</label>
                      <select name="branch_name" id="to_branch_id" class="form-control select2">
                        <option value="" selected disabled>Select One</option>
                        <?php foreach ($branch as $br) : ?>
                          <option value="<?= $br['id']; ?>"><?= $br['branch_name']; ?>
                          </option>
                        <?php endforeach ?>

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
              <!-- /.card-body -->

              <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div> -->
              <div class="card-footer border-top border-info">
                <div class="d-flex w-100 justify-content-center align-items-center">
                  <button type="submit" class="btn btn-success" onclick="$('#uni_modal form').submit()">Save</button>
                  <!-- <button type="submit" class="btn btn-secondary">Cancel</button> -->
                  <a class="btn btn-flat bg-gradient-secondary mx-2">Cancel</a>
                </div>
              </div>
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

<script>
  $('#dtype').change(function() {
    if ($(this).prop('checked') == true) {
      $('#tbi-field').hide()
    } else {
      $('#tbi-field').show()
    }
  })
  $('[name="price[]"]').keyup(function() {
    calc()
  })
  $('#new_parcel').click(function() {
    var tr = $('#ptr_clone tr').clone()
    $('#parcel-items tbody').append(tr)
    $('[name="price[]"]').keyup(function() {
      calc()
    })
    $('.number').on('input keyup keypress', function() {
      var val = $(this).val()
      val = val.replace(/[^0-9]/, '');
      val = val.replace(/,/g, '');
      val = val > 0 ? parseFloat(val).toLocaleString("en-US") : 0;
      $(this).val(val)
    })

  })
  $('#manage-parcel').submit(function(e) {
    e.preventDefault()
    start_load()
    if ($('#parcel-items tbody tr').length <= 0) {
      alert_toast("Please add atleast 1 parcel information.", "error")
      end_load()
      return false;
    }
    $.ajax({
      url: 'ajax.php?action=save_parcel',
      data: new FormData($(this)[0]),
      cache: false,
      contentType: false,
      processData: false,
      method: 'POST',
      type: 'POST',
      success: function(resp) {
        // if(resp){
        //       resp = JSON.parse(resp)
        //       if(resp.status == 1){
        //         alert_toast('Data successfully saved',"success");
        //         end_load()
        //         var nw = window.open('print_pdets.php?ids='+resp.ids,"_blank","height=700,width=900")
        //       }
        // }
        if (resp == 1) {
          alert_toast('Data successfully saved', "success");
          setTimeout(function() {
            location.href = 'index.php?page=parcel_list';
          }, 2000)

        }
      }
    })
  })

  function displayImgCover(input, _this) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#cover').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  function calc() {

    var total = 0;
    $('#parcel-items [name="price[]"]').each(function() {
      var p = $(this).val();
      p = p.replace(/,/g, '')
      p = p > 0 ? p : 0;
      total = parseFloat(p) + parseFloat(total)
    })
    if ($('#tAmount').length > 0)
      $('#tAmount').text(parseFloat(total).toLocaleString('en-US', {
        style: 'decimal',
        maximumFractionDigits: 2,
        minimumFractionDigits: 2
      }))
  }
</script>