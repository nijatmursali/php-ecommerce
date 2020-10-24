<?php

require_once "header.php";

$sql = "SELECT * FROM aboutus";
$result = mysqli_query($cnn, $sql);

$row = mysqli_fetch_assoc($result);

?>

<div class="about-us-wrapper pt-60 pb-40">
    <div class="container">
        <div class="row">
            <!-- About Text Start -->
            <div class="col-lg-6 order-last order-lg-first">
                <div class="about-text-wrap">
                    <h2><span><?php echo $row['title'] ?></span></span><?php echo $row['title_big'] ?></span></h2>
                    <p><?php echo $row['description'] ?></span></p>
                </div>
            </div>
            <!-- About Text End -->
            <!-- About Image Start -->
            <div class="col-lg-5 col-md-10">
                <div class="about-image-wrap">
                    <img class="img-full" src="images/product/large-size/13.jpg" alt="About Us" />
                </div>
            </div>
            <!-- About Image End -->
        </div>
    </div>
</div>

<?php

require_once "footer.php";

?>