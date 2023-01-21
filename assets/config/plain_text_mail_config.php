<?php  
    require '../includes/sessions.php';

    if (!isset($_POST['sendemail'])) {
        header('Location: logout');
    }else{
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $to = $email;

        // The word wrap function takes three parameters 
        /*
            1. The string to wrap
            2. Number of characters per line
            3. String Breaks which is defined with \r\n

            . \r means break on the right hand side.
            . \n means go to a new line.
        */ 
        $message = wordwrap($message,150,"\r\n");

        $headers = "From: Hotel <hotel@hotel-project.com>";

        $mail = mail($to,$subject,$message,$headers);

        if ($mail) {
            $_SESSION['success_msg'] = "Mail has been sent";
            header('Location: ../../contact');
        }else{
            $_SESSION['error_msg'] = "Mail has not been sent";
            header('Location: ../../contact');
        }
    }