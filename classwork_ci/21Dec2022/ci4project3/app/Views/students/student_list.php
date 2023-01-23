<?php 
    echo view("includes/header");
    echo view("includes/navbar");
 ?>
<div class="container">
    <h1>Students List</h1>

<table border="1">
    <thead>
    <tr row="">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
    </tr>
    </thead>
    <tbody>
    <tr row="">
    <?php foreach($students as $student){ ?>
        <td><?php echo $student['id']; ?></td>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['email']; ?></td>
        <td><?php echo $student['address']; ?></td>
    </tr>
   <?php  } ?>
   </tbody> 
</table>

</div>
    <!-- echo $student['name']; -->

</body>
</html>

<?php echo view("includes/footer"); ?>