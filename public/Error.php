<?php include_once "../private/main_header.php"; ?>

<div class="container py-5 home-intro">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center text-danger font-weight-bold">
            <?php 
            echo isset($_SESSION['msge']) ? $_SESSION['msge']:'';
            $_SESSION['msge'] = null; 
            ?>
            </h3>
        </div>
    </div>
</div>
<?php include_once "../private/main_footer.php"; ?>
