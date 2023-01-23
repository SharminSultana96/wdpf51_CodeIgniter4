<?php 
    echo view("includes/header");
    echo view("includes/navbar");
 ?>
 <div>
<h1>Product Entry</h1>
    <form action="/product/create" method="post">
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
        <label for="details" class="form-label">Details</label>
        <textarea class="form-control" id="details" name="details" cols="30" rows="10"></textarea>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    
    
    
    <button type="submit" class="btn btn-success" value="SUBMIT">SUBMIT</button>
    </form>
</div>



<?php echo view("includes/footer"); ?>