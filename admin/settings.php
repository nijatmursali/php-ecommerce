<?php

require_once 'header.php';
require_once 'sidebar.php';

?>

<div class="content-wrapper">
    <div class="card card-primary col-md-12 d-flex content-justify-center">
        <div class="card-header">
            <h3 class="card-title">Settings</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="settings/settings.php">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Website title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter description"></textarea>
                </div>
                <div class="form-group">
                    <label for="keyword">Keyword</label>
                    <input name="keyword" type="text" class="form-control" id="keyword" placeholder="Enter keyword">
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