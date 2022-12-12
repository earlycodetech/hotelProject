<?php
    require "../includes/sessions.php";
    /*
        The isset function checks if a variable exist and it is not equal to null
    */ 

    //Checking if the user did not click on our submit button
   if (!isset($_POST['register'])) {
       $_SESSION['error_msg'] = "Please create an account to continue!";
       header("Location: ../../register");
   }else{
       if ($_POST['full_name'] === '') {
        $_SESSION['error_msg'] = "Full Name Required!";
       header("Location: ../../register");
       }else{
        $_SESSION['success_msg'] = "Account Created Successfull!";
        header("Location: ../../register");
       }
   }

   