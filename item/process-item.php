<?php 
    session_start();
    include('../Data/data.php');
    

    $id =$_GET['id'];
    $query = mysqli_query($dbcon,"SELECT * FROM product WHERE Pid = $id");       
    $result = mysqli_fetch_array($query);


    if(isset($_POST['rent_goods'])){
        header("location: payment.php");

        $price = mysqli_real_escape_string($dbcon,$result['Pprice']);
        $oquantity = mysqli_real_escape_string($dbcon,$_POST['quantity']);
        $date = mysqli_real_escape_string($dbcon,.getDate());

        $sql = "INSERT INTO order_detail (Pid, Oquantity, Odate) VALUES ('$id','$oquantity','$date')";
        mysqli_query($dbcon,$sql);
        
    }

    

?>