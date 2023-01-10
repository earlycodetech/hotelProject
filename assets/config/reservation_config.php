<?php
    require "db_con.php";
    require "../includes/sessions.php";

    date_default_timezone_set("Africa/Lagos");
    /*
        The isset function checks if a variable exist and it is not equal to null
    */ 

    //Checking if the user did not click on our submit button
   if (isset($_POST['makeReserve'])) {
     $id = $_SESSION['user'];
     $room = $_POST['room'];
     $numroom = $_POST['numroom'];
     $checkin = $_POST['checkin'];
     $checkout = $_POST['checkout'];


      if (trim($room) === "" || trim($numroom) === "" || trim($checkin) === "" || trim($checkout) === "" ) {
        $_SESSION['error_msg'] = "Fields cannot be empty!";
        header("Location: ../../services/reservations");
      }
      
      else{
        
        // Save the Data

        // Create a SQL command Statement: INSERT STATEMENT
        $sql = "INSERT INTO reservations(userid,roomid,num_rooms,checkin,checkout) VALUES(?,?,?,?,?)";

        // Initialize Connection to database
        $stmt = mysqli_stmt_init($connectDB);

        // Prepare Connection with Statement
        mysqli_stmt_prepare($stmt,$sql);

        // Bind the parameters to the placeholders
        mysqli_stmt_bind_param($stmt,"iiiss", $id,$room,$numroom,$checkin,$checkout);

        // Execute the Statement
        $execute = mysqli_stmt_execute($stmt);

        if ($execute) {
            $_SESSION['success_msg'] = "Reserved successfully!";
            header("Location: ../../services/reservations");
        }else{
          $_SESSION['error_msg'] = "Oops, something went wrong!";
          header("Location: ../../services/reservations");
        }
        // var_dump($stmt);


      }

   }

   
   else{
    header('Location: logout');
   }