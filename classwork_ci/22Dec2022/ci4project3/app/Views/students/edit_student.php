<?php 
    echo view("includes/header");
    echo view("includes/navbar");
 ?>
 <div>
<h1>Edit Student</h1>
    <form action="/student/update/<?= $student['id']?>" method="post">
        <?php csrf_field(); ?>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $student['name']; ?>">
    
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $student['phone']; ?>">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $student['email']; ?>">
    </div>
    
    <div class="mb-3">
        <label for="address" class="form-label">Postal Address</label>
        <textarea class="form-control" id="address" name="address" cols="30" rows="10"><?php echo $student['address']; ?></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary" value="UPDATE">Update</button>
    </form>
</div>

<?php echo view("includes/footer"); ?>