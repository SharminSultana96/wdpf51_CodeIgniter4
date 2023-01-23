<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>User Edit Form</h1>
    <!-- <form action="<?//= //site_url('/users/submit'); ?>" method="post"> -->
    <form action="<?php echo site_url('/users/update'); ?>" method="post">
        <label>Name</label>
            <input type="text" name="u_name" class="form-control" value="<?php echo $user['name'] ?>"><br><br>

        <label>Email</label>
            <input type="text" name="u_email" class="form-control" value="<?php echo $user['email'] ?>"><br><br>

        <input type="submit" name="update" value="UPDATE">
        <input type="hidden" name="u_id" value="<?php echo $user['id']?>">
    </form>
    <!-- <br><br>
    <a href="/users">All Users</a> |
    <a href="users/add">New User</a> -->

</body>
</html>