<?php
require_once 'connection/connection.php';
require_once 'header.php';
require_once 'sidebar.php';

?>

<div class="content-wrapper">
    <div class="card card-primary col-md-12 d-flex content-justify-center">
        <div class="card-header">
            <h3 class="card-title">User Settings
            </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="settings/user-settings.php">
            <div class="card-body">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input value="<?php echo $row['username'] ?>" name="username" type="text" class="form-control" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input value="<?php echo $row['password'] ?>" name="password" type="password" class="form-control" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input value="<?php echo $row['phone'] ?>" name="phone" type="text" class="form-control" placeholder="Enter phone">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input value="<?php echo $row['email'] ?>" name="email" type="email" class="form-control" placeholder="Enter email">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>


<?php

require_once 'footer.php';

?>