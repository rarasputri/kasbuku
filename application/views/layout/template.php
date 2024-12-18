<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php require_once('_css.php'); ?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
    <?php require_once('_sidebar.php'); ?>

        <!-- Content Start -->
        <div class="content">
            <?php require_once('_navbar.php'); ?>
                <div class="container-fluid pt-4 px-4">
                    <?php echo $contents; ?>
                </div>
            <?php require_once('_footer.php'); ?>
        </div>
        <!-- Content End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <?php require_once('_js.php'); ?>
    
</body>

</html>