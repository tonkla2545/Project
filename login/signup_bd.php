<?php
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['reg_user'])){
        $firstname = mysqli_real_escape_string($con,$_POST['firstname']);
        $lastname = mysqli_real_escape_string($con,$_POST['lastname']);
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

        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email'"
        
    }
?>