<?php 
    echo view("includes/header");
    echo view("includes/navbar");
 ?>
<div class="container">
    <h1>Products List</h1>

<table border="1">
    <thead>
    <tr row="">
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Details</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>
    <tr row="">
    <?php foreach($products as $product){ ?>
        <td><?php echo $product['id']; ?></td>
        <td><?php echo $product['name']; ?></td>
        <td><?php echo $product['Phone']; ?></td>
        <td><?php echo $product['details']; ?></td>
        <td><?php echo $product['price']; ?></td>
    </tr>
   <?php  } ?>
   </tbody> 
</table>

</div>








<?php echo view("includes/footer"); ?>