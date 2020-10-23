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
                <?php
                // if ($_GET['update'] == "successful") {
                //     echo "Update is successful.";
                // } elseif ($_GET['update'] == "not-successful") {
                //     echo "Could not update.";
                // }

                ?>

            </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="settings/settings.php">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Website title</label>
                    <input value="<?php echo $row['title'] ?>" name="title" type="text" class="form-control" id="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter description"><?php echo $row['description'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="keyword">Keyword</label>
                    <input value="<?php echo $row['keyword'] ?>" name="keyword" type="text" class="form-control" id="keyword" placeholder="Enter keyword">
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input value="<?php echo $row['logo'] ?>" name="logo" type="text" class="form-control" id="logo" placeholder="Enter logo">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <input value="<?php echo $row['message'] ?>" name="message" type="text" class="form-control" id="message" placeholder="Enter message">
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