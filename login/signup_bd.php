<?php
    session_start();
    include('Data/data.php');

    $errors = array();

    if(isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $c_password = mysqli_real_escape_string($con,$_POST['c_password']);

        if(empty($username)){
            array_push($errors,"โปรดระบุชื่อผู้ใช้");
        }
        if(empty($email)){
            array_push($errors,"โปรดระบุอีเมล");
        }
        if(empty($password)){
            array_push($errors,"โปรดระบุชื่อรหัสผ่าน");
        }
        if(empty($c_password != $password){
            array_push($errors,"รหัสผ่านทั้งสองไม่ตรงกัน");
        }

        $user_check_query = "SELECT * FROM user WHERE email = '$email'"
        $query = mysqli_query($dbcon, $user_check_query);
        $result = memory_fetch_assoc($query);

        if($result){
            if($result['username'] == $username){
                array_push($error,"ชื่อผู้ใช้นี้ถูกใช้ไปแล้ว")
            }
            if($result['email'] == $email){
                array_push($error,"อีเมลนี้ถูกใช้ไปแล้ว")
            }
        }

        if(count($error)==0){
            $password = md5($password);

            $sql = "INSERT INTO user (username, email, password) VALUES ('$username','$email','$password')";
            mysqli_query($dbcon,$sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "คุณสมัครสมาชิกเสร็จสิ้น";
            header('location: index.php');
        }
        else{
            array_push($errors,"ชื่อผู้ใช้หรืออีเมลถูกใช้งานแล้ว");
            $_SESSION['error'] = "ชื่อผู้ใช้หรืออีเมลถูกใช้งานแล้ว!"
            header("location: signup.php");
            }
        }

    }
?>