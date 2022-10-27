<?php 
    session_start();
    include('../Data/data.php');

    $errors = array();

    if(isset($_POST['login_user'])){
        $email = mysqli_real_escape_string($dbcon,$_POST['email']);
        $password = mysqli_real_escape_string($dbcon,$_POST['password']);

        // if(empty($email)){
        //     array_push($errors,"โปรดระบุอีเมล");
        // }

        // if(empty($password)){
        //     array_push($errors,"โปรดระบุรหัสผ่าน");
        // }

        // if(isset($_POST['login_user'])){
            $password = md5($password);
            $query = "SELECT * FROM user_account WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($dbcon,$query);

            if(mysqli_num_rows($result) == 1){
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "คุณกำลังเข้าสู่ระบบ";
                header("location: ../index.php");
            }
            else{
                array_push($errors,"อีเมล/รหัสผ่านไม่ถูกต้อง");
                $_SESSION['error'] = "อีเมลหรือรหัสผ่านไม่ถูกต้อง!";
                header("location: login.php");
            }
        // }
        // else {
        //     array_push($errors, "อีเมลหรือรหัสผ่านไม่ถูกต้อง");
        //     $_SESSION['error'] = "อีเมลหรือรหัสผ่านไม่ถูกต้อง";
        //     header("location: login.php");
        // }
    }
?>