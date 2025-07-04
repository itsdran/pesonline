<?php

    $db = mysqli_connect ("localhost", "root", "", "pesonline");

    if(isset($_POST['login'])){

        $atm    = $_POST['atmNumber'];  
        $pass   = $_POST['password'];  

        $atm = stripcslashes($atm);
        $pass = stripcslashes($pass);
        
        $atm = mysqli_real_escape_string ($db, $atm); 
        $pass = mysqli_real_escape_string ($db, $pass); 

        $query  = " SELECT userID, atmNumber, password, fName 
                    FROM users 
                    WHERE atmNumber = '$atm' and password = '$pass'";
        $result = mysqli_query($db, $query);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        $id = $row['userID'];
        if($count == 1){  
            session_start();
            $_SESSION ['atmNumber']      = $atm;
            $_SESSION ['userID']         = $id;
            
            echo "<script>alert('You are successfully logged in!');</script>";
            echo "<script>location.href='../../dashboard.php';</script>";
            exit();            
        }  else{  
            echo '<script>alert("Login failed.")</script>';  
            echo "<script>location.href='../../index.php';</script>";
            exit();
        }
    }

    if (isset ($_POST['forgotpassword'])) {
        $atm            = $_POST['atmNumber'];
        $recoveryQues   = $_POST['recoveryQuestion'];
        $recoveryAns    = $_POST['recoveryAnswer'];

        $sql = "SELECT * FROM users WHERE atmNumber='$atm'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);

        //Check if account exists
        if($count == 1){
            $query  = "SELECT * FROM users WHERE atmNumber = '$atm'";
            $result = mysqli_query($db, $sql);
            $row    = mysqli_fetch_array($result, MYSQLI_ASSOC);

            if ($recoveryQues == $row['recoveryQuestion'] && $recoveryAns == $row['recoveryAnswer']) {
                echo '<script>alert("ATM Number: '.$row['atmNumber'].' \tPassword: '.$row['password'].'")</script>'; 
                echo "<script>location.href='../../index.php';</script>";
                exit();
            } else {
                echo '<script>alert("Invalid information!")</script>'; 
                echo "<script>location.href='../../forgot-password.php#login';</script>";
                exit();
            }
        } else {
            echo '<script>alert("Account does not exist!")</script>'; 
            echo "<script>location.href='../../forgot-password.php#login';</script>";
            exit();
        }
    }
?>