<?php
require "../assets/config/db_con.php";
require "../assets/includes/sessions.php";
authGuard();

$id =  $_SESSION['user'];

$sql = "SELECT * FROM users WHERE id = '$id' ";
$query  = mysqli_query($connectDB, $sql);
$row = mysqli_fetch_assoc($query);

// var_dump($row);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Room</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <section>
        <?php include_once "../assets/includes/dash-nav.php"; ?>
    </section>


    <section>
        <div class="container pt-4">
            <div class="card p-2">
                <?php echo successMsg(); echo errorMsg(); ?>
                <div class="text-end my-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Make Reservation
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="../assets/config/reservation_config.php" method="POST" class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Make Reservation</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-start">
                                    <label >Select Room</label>
                                    <select name="room" class="form-select mb-3">
                                        <?php 
                                            $sql = "SELECT * FROM room_details";
                                            $query = mysqli_query($connectDB,$sql);
                                            while($row = mysqli_fetch_assoc($query)){?> 

                                                    <option value="<?php echo $row['id'] ?>">
                                                        <?php echo $row['room_name'] ?> <?php echo "₦". number_format($row['room_price'], 2,'.',','); ?>

                                                    </option>

                                        <?php } ?>
                                     
                                    </select>
                                    <label class="room">No of Rooms</label>
                                    <input type="number" name="numroom" class="form-control" value="1" min="1" >
                                    <label >Check In Date</label>
                                    <input type="datetime-local" name="checkin" class="form-control" >
                                    <label >Check Out Date</label>
                                    <input type="datetime-local" name="checkout" class="form-control" >

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="makeReserve" class="btn btn-primary">Reserve</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="table-responsive my-3">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="row">Room Name</th>
                                <th scope="row">No Of Rooms</th>
                                <th scope="row">Check In </th>
                                <th scope="row">Check Out </th>
                                <th scope="row">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                                <tr>
                                    <td><?php echo $row['full_name'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td><?php echo $row['date_created'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>