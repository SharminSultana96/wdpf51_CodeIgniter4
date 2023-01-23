<?php 
    echo view("includes/header");
    echo view("includes/navbar");
 ?>

<div>
    <h1>Student Entry</h1>
    <div class="row">
    <div class="col-md-9" style="padding-left: 100px; margin-left:100px">
        <form action="/student/create" method="post">
           <?php csrf_field(); ?>
        
        <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Postal Address</label>
                <textarea class="form-control" id="address" name="address" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" value="SUBMIT">SUBMIT</button>
        </form>
        </div>
        </div>
</div>



<?php echo view("includes/footer"); ?>