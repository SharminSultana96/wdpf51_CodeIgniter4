<?php 
    echo view("includes/header");
    echo view("includes/navbar");
 ?>
<div class="container">
    <h1>Students List</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-dark">
            
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                <?php foreach($students as $student){ ?>
                <tr>
                    <td><?php echo $student['id']; ?></td>
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['phone']; ?></td>
                    <td><?php echo $student['email']; ?></td>
                    <td><?php echo $student['address']; ?></td>
                    <td>
                        <a href="student/edit/<?= $student['id'] ?>" class="btn btn-info">Edit</a>
                        <a href="student/delete/<?= $student['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php  } ?>
            </table>
        </div>
    </div>

    <a href="/student/new" class="btn btn-primary">New Student</a>
</div>

<?php echo view("includes/footer"); ?>