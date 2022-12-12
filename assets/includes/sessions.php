<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
    session_start();


    function errorMsg(){
        if (isset($_SESSION['error_msg'])) {
            // $output = " <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
            //     <strong>";
    
            // $output .= htmlentities($_SESSION['error_msg']);
            // $output .= "</strong> 
            //     <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            // </div>";
    
            $output = " <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                <strong>". htmlentities($_SESSION['error_msg']) . "</strong> 
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>";
    
            $_SESSION['error_msg'] = null;
             return $output;

        }
    }
    function successMsg(){
        if (isset($_SESSION['success_msg'])) {
            // $output = " <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
            //     <strong>";
    
            // $output .= htmlentities($_SESSION['success_msg']);
            // $output .= "</strong> 
            //     <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            // </div>";
    
            $output = " <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                <strong>". htmlentities($_SESSION['success_msg']) . "</strong> 
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>";
    
            $_SESSION['success_msg'] = null;
             return $output;

        }
    }