<?php 
    echo view("includes/header");
    echo view("includes/navbar");
 ?>
<div class="container">
    <h1>Products List</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-danger">
                
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Details</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <?php foreach($products as $product){ ?>
                <tr>
            
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['phone']; ?></td>
                    <td><?php echo $product['details']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td>
                        <a href="product/edit/<?php echo $product['id'];?>" class="btn btn-success">Edit</a>
                        <a href="product/delete/<?php echo $product['id'];?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php  } ?>
            </table>
        </div>
    </div> 
    
    <a href="/product/new" class="btn btn-success">New Product</a>
</div>








<?php echo view("includes/footer"); ?>