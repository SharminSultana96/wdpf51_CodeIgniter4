<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Entry Form</h1>
    <?php $validation = \Config\Services::validation(); ?>
    <!-- <form action="<?//= //site_url('/users/submit'); ?>" method="post"> -->
    <form action="<?php echo site_url('/users/submit'); ?>" method="post">
        <label>Name</label>
            <input type="text" name="u_name" class="form-control"><br><br>
            <?php if($validation->getError('u_name')): ?>
                <p><?php echo $error=$validation->getError('u_name') ?></p>

            <?php endif; ?>
        <label>Email</label>
            <input type="text" name="u_email" class="form-control"><br><br>
            <?php if($validation->getError('u_email')): ?>
                <p><?php echo $error=$validation->getError('u_email') ?></p>

            <?php endif; ?>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    <br><br>
    <a href="/users">All Users</a> |
    <a href="users/add">New User</a>
</body>
</html>