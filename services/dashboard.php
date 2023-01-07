<?php
    require "../assets/config/db_con.php";
    require "../assets/includes/sessions.php";
    authGuard();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <section>
        <?php include_once "../assets/includes/dash-nav.php"; ?>
    </section>
   

    <section>
        <div class="container pt-4">
            <div class="card">
                <div class="card-body"></div>
            </div>
        </div>
    </section>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>