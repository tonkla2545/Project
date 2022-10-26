<?php 
    session_start();
    include('Data/data.php')

    $errors = array();

    if(isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($dbcon,$_POST['username']);
        $password = mysqli_real_escape_string($dbcon,$_POST['password']);

        if(empty($username)){
            array_push($errors,"โปรดระบุชื่อผู้ใช้");
        }

        if(empty($password)){
            array_push($errors,"โปรดระบุรหัสผ่าน");
        }

        if(count($errors == 0)){
            $password = md5($password);
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($dbcon,$query);

            if(mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username
                $_SESSION['success'] = "คุณกำลังเข้าสู่ระบบ"
                header("location: index.php");
            }
            else{
                array_push($errors,"ชื่อผู้ใช้/รหัสผ่านไม่ถูกต้อง");
                $_SESSION['error'] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง!"
                header("location: login.php");
            }
        }
    }
?>