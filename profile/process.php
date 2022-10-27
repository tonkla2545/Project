<?php 
    session_start();
    include('../Data/data.php');

    // print_r($_POST);
    if(isset($_POST['saveChange'])){
        // $email = mysqli_real_escape_string($dbcon,$_POST['email']);
        // $id = $_POST['id'];
        // $aid = $_POST['aid'];
        $username = $_POST['username'];
        $tel = $_POST['tel'];
        // $gender = $_POST['gender'];
        $datebirthday = $_POST['datebirthday'];

        $user_check_query = "SELECT id FROM user_account Uc, user_detail Ud  WHERE Uc.id = Ud.Aid";
        $query = mysqli_query($dbcon, $user_check_query);
        $result = mysqli_fetch_assoc($query);
        print_r($result);

        mysqli_query($dbcon,"INSERT INTO user_detail (Aid) VALUES ('$tel')"); 

        // if($result){
            if(empty($result['Utel'])){
                mysqli_query($dbcon,"INSERT INTO user_detail (Utel) VALUES ('$tel')");                     
            }
            else{
                mysqli_query($dbcon,"UPDATE user_detail SET Utel = ('$tel')");
            }

        // }

    }

    
?>