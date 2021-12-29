<?php
    // <!-- $username = $_POST['user_name'];

    // $password = $_POST['user_password'];

    // // if (empty($username)) {
    // //     $name_error = 'Please insert your username';
    // // }

    // // if (empty($password)) {
    // //     $password_error = 'please insert your password';
    // // }

    // if (empty($username ) && empty($password)) {
    //     $error_name = 'please fill in your username';
    //     $error_password = 'please fill in your password';
    //     // header('location: index.php');
    //     // exit();
    // }
    // if ($username < 7) {
    //     $error_length = 'Your username should not be less than 7 or more than 14';
    // }
    // if ($password < 7) {
    //     $error_pass_length = 'Your password should not be less than 7 characters or more than 14';
    // }
    // if (!empty($username) && !empty($password)) {
    //     header('location: second.php');
    //     exit();
    // }
    //using header and exit will do the same as redirecting using the location -->
    ?>
    
    <?php
      // phpinfo();
        $username = $_POST['user_name'];
        $password = $_POST['user_password'];
        $password2 = $_POST['user_password2'];

        // if (!$username || !$password) {
        //     $global_error = "please fill in all fields";
        // }
        

        if(empty($username)) {
            $error_name = 'Please fill in your username';
        }
        // }elseif(strlen($username) < 6) {
        //     $username_length = 'username should not be minimum of 6 characters';
        // }

        if(empty($password2)) {
            $error_password2 = 'please confirm your password';
        }
        
        if(empty($password)) {
            $error_password = 'please fill in your password';
        }
        elseif(strlen($password) < 6 || strlen($password) > 12) {
            $password_length = 'password should not be less than 6 or more than 12 characters';
        }
        
        if($password2 !== $password) {
            $password_match_err = 'password does not match';
        }
        
        elseif(!empty($username) && !empty($password) && !empty($password2)) {
            header('location: second.php');
            exit();
        }
        include('index.php');
?>

