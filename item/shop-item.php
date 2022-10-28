<?php

    session_start();
    include('../Data/data.php');

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        header('location: login.php');
    }

    $id =$_GET['id'];
    $query = mysqli_query($dbcon,"SELECT * FROM product WHERE Pid = $id");       
    $result = mysqli_fetch_array($query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เช่าสูทผู้ชาย</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr .net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>

<!-- <navbar"> -->
  <?php
    if(!isset($_SESSION['email'])):
  ?>
    <header class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="../index.php">เช่าสูทผู้ชาย</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../index.php">หน้าแรก</a>
                </li>
              </ul>

                

                <div class="d-grid gap-2 d-md-flex">
                    <div class="text-end">
                        <a href="../login/login.php"><button type="button" class="btn btn-outline-dark me-2" >Login</button></a>
                        <a href="../login/signup.php"><button type="button" class="btn btn-dark">Sign-up</button></a>
                    </div>
                </div>
            </div> 
        </div>
    </header>
  <?php
    endif
  ?>
  <?php
    if(isset($_SESSION['email'])):
  ?>
    <header class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="../index.php">เช่าสูทผู้ชาย</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">หน้าแรก</a>
                    </li>
                </ul>

                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <div class="text-end">
                        <div class="dropdown">
                            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <span id="username"><?php echo $_SESSION['email']?></span> 
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="../order/order-h.php">ประวัติการเช่า</a></li>
                                <li><a class="dropdown-item" href="../index.php?logout='1'">ออกจากระบบ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </header>
    <?php
    endif
    ?>
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?=$result['Pimage']?>" alt="..." /></div>
                <div class="col-md-6">
                    <form action="process-item.php" method="post">
                        <h1 class="fw-bolder"><?=$result['Pname']?></h1>
                        <div class="fs-5 mb-5">
                            <span><?=$result['Pprice']?>บาท</span>
                        </div>
                        <p class="lead"><?=$result['Pdescription']?></p>
                        <div class="d-flex mt-3 ">
                            <div class="col-md-3 col-lg-3 col-xl-3 d-flex ">
                                <p class="mt-2 mb-auto">จำนวน</p>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3 d-flex">
                                <input type="text" name="quantity" class="form-control form-control-lg" id="quantity">
                                <!-- <button class="btn btn-link px-2" onclick="decreaeNumber2('quantity')" style="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                </svg>
                                </button> -->

                                <!-- <input id="quantity" min="0" name="quantity" value="0" type="number" class="form-control form-control-sm">

                                <button class="btn btn-link px-2" onclick="increaseNumber2('quantity')" style="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                                </button> -->
                            </div>
                        </div>
                        <div class="d-flex mt-5">
                            <button class="btn btn-outline-dark flex-shrink-0" type="button" name="rent_goods">เช่าสินค้า</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <script src="../js/scripts.js"></script>
</body>
</html>

