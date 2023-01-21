<?php 
    require "assets/includes/sessions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Project</title>

    <link rel="icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <?php include_once "assets/includes/nav.php" ?>


    <div class="container mt-5">
        <form action="assets/config/forgot_config.php" method="post" class="card mx-auto p-1" style="max-width: 600px;">
            <?php echo errorMsg(); echo successMsg(); ?>
            <h3 class="card-header text-center">Forgot Password</h3>
            <div class="card-body">
                <input placeholder="OTP" name="token" type="text" autocomplete="off" class="form-control mb-3 shadow">
                <input placeholder="New Password" name="new" type="password" autocomplete="off" class="form-control mb-3 shadow">
                <input placeholder="Confirm Password" name="confirm" type="password" autocomplete="off" class="form-control mb-3 shadow">


                <button class="btn btn-primary" name="reset" type="submit">Reset Password</button>
                <a href="login" class="d-block text-dark my-3">Go to Login</a>
            </div>
        </form>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>