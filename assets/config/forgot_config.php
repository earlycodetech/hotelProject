<?php
     require "db_con.php";
     require '../includes/sessions.php';


     if (isset($_POST['forgot'])) {
        $email = $_POST['email'];

        if (!filter_var($email ,FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error_msg'] = "Invalid Email!";
            header("Location: ../../forgot");
        }
        else{
            $sql = "SELECT id FROM users WHERE email = '$email'";
            $query = mysqli_query($connectDB, $sql);

            if (mysqli_num_rows($query) < 1) {
                $_SESSION['error_msg'] = "This Email does not exist!";
                header("Location: ../../forgot");
            }else{
                $token = rand(100000,999999);

                $sql = "UPDATE users SET password_reset = '$token' WHERE email = '$email'";
                $query = mysqli_query($connectDB, $sql);

                if (!$query) {
                    $_SESSION['error_msg'] = "Oops, Something went wrong!";
                    header("Location: ../../forgot");
                }else{
                    $to = $email;
                    $subject = "Password Reset";
                    $message = "Please use the one time password (OTP): \"$token\" to reset your password";
                    $headers =  "From: Hotel <support@hotel-project.com>";

                    if (!mail($to,$subject,$message,$headers)) {
                        $_SESSION['error_msg'] = "Please try again!";
                        header("Location: ../../forgot");
                    }else{
                        $_SESSION['success_msg'] = "Please Check your email for your OTP!";
                        header("Location: ../../verify");
                    }

                }
            }

        }
     }
     else if (isset($_POST['reset'])){
        $token = $_POST['token'];
        $new = $_POST['new'];
        $confirm = $_POST['confirm'];

        $sql = "SELECT id FROM users WHERE password_reset = '$token' ";
        $query = mysqli_query($connectDB,$sql);

        $row = mysqli_fetch_assoc($query);

        // Check if the row return is less than 1, this means a row with the correct token was found
        if (mysqli_num_rows($query) < 1) {
            $_SESSION['error_msg'] = "Invalid Token!";
            header("Location: ../../verify");
        }
        elseif ($new != $confirm){
            $_SESSION['error_msg'] = "Password does not match!";
            header("Location: ../../verify");
        }
        elseif (strlen($new) < 8){
            $_SESSION['error_msg'] = "Password is too short min: 8 characters!";
            header("Location: ../../verify");
        }else{
            $new  = password_hash($new, PASSWORD_DEFAULT);
            
            $sql = "UPDATE users SET passwords = ?, password_reset = ?  WHERE id = ? ";
            $stmt = mysqli_stmt_init($connectDB);
            mysqli_stmt_prepare($stmt,$sql);
            mysqli_stmt_bind_param($stmt, 'si',$new, "SET",$row['id']);

            $execute = mysqli_stmt_execute($stmt);

            if ($execute) {
                $_SESSION['success_msg'] = "Password has been changed!";
                header("Location: ../../login");
            } else {
                $_SESSION['error_msg'] = "Oops Something Went Wrong!";
                header("Location: ../../verify");
            }
            
        }
     }