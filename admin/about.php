<?php
require_once 'connection/connection.php';
require_once 'header.php';
require_once 'sidebar.php';

?>

<div class="content-wrapper">
    <div class="card card-primary col-md-12 d-flex content-justify-center">
        <div class="card-header">
            <h3 class="card-title">Settings
            </h3>
            <br>
            <br>
            <h3 class="card-title">
            </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="settings/about.php">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input value="<?php echo $row['title'] ?>" name="title" type="text" class="form-control" id="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="bigtitle">Big title</label>
                    <input value="<?php echo $row['title'] ?>" name="bigtitle" type="text" class="form-control" id="bigtitle" placeholder="Enter big title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter description"><?php echo $row['description'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input value="<?php echo $row['logo'] ?>" name="logo" type="text" class="form-control" id="logo" placeholder="Enter logo">
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