<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation | sbsharma</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-usVBAd66/NpVNfBge19gws2j6JZinnca12rAe2l+d+QkLU9fiG02O1X8Q6hepIpr/EYKZvKx/I9WsnujJuOmBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="resources/assets/css/font-awesome-4.7.0/css/font-awesome.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js" integrity="sha512-a6ctI6w1kg3J4dSjknHj3aWLEbjitAXAjLDRUxo2wyYmDFRcz2RJuQr5M3Kt8O/TtUSp8n2rAyaXYy1sjoKmrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="./resources/assets/css/style.css" />
    <link rel="stylesheet" href="./resources/assets/css/search-box.css" />
    <link rel="stylesheet" href="./resources/assets/css/product.css" />
    <link rel="stylesheet" href="./resources/assets/css/footer.css" />
    <link rel="stylesheet" href="./resources/assets/css/auth.css" />
    <script src="./resources/assets/js/app.js"></script>
</head>
<body>

<?php 
    include_once 'navbar.php'; 
?>

<?php if( hasSession('error') ) { ?>
<div class="container mt-5">
    <div class="alert <?php echo hasSession('error') ? 'alert-danger' : 'alert-info'  ?> fade show" role="alert">
        <?php echo session('error') ?>
    </div>
</div>
<?php } ?>

<?php if( hasSession('success') ) { ?>
<div class="container mt-5">
    <div class="alert <?php echo hasSession('success') ? 'alert-success' : 'alert-info'  ?> fade show" role="alert">
        <?php echo session('success') ?>
    </div>
</div>
<?php } ?>

<?php
    removeSession(['error', 'success']);
?>


    
    

