
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

    <form action="assets/config/html_mail_config.php" method="post" class="container my-4">
        <div class="card mx-auto p-3" style="max-width: 600px;">
        <?php echo successMsg(); echo errorMsg(); ?>
            <input type="email" name="email" placeholder="Email" class="form-control mb-3">
            <input type="text" name="subject" placeholder="Subject" class="form-control mb-3">
            <textarea name="message" placeholder="Message" style="height: 250px;" class="form-control mb-3"></textarea>
    
            <button class="btn btn-success" type="submit" name="sendemail">Send</button>
        </div>
    </form>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>