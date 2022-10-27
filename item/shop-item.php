<?php

    session_start();
  include('../Data/data.php');

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: login.php');
  }

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
                                <li><a class="dropdown-item" href="../profile/profile.php">บัญชีของฉัน</a></li>
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
    <div class="container px-4 px-lg-5 mt-5 ">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="cart.php">
                <button class="btn btn-outline-dark" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>ตะกร้า
                <span class="badge bg-dark text-white ms-1 rounded-pill" id="quantityCart">0</span>
                </button>
            </a>
        </div>
    </div>
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">Shop item template</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through">$45.00</span>
                        <span>$40.00</span>
                    </div>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                    <div class="d-flex">
                        <div class="col-md-3 col-lg-3 col-xl-3 d-flex ">
                            <p class="mt-2 mb-auto">ตัวเลื่อกเพิ่มเติม</p>
                        </div>
                        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content">
                            <?php
                                for($i=1;$i<=6;$i++){
                            ?>
                                <div class="col form-check me-2 mb-3">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="AddOn">
                                    <label class="form-check-label" for="flexRadioDefault1">ไซต์ 38</label>
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="d-flex mt-3 ">
                        <div class="col-md-3 col-lg-3 col-xl-3 d-flex ">
                            <p class="mt-2 mb-auto">จำนวน</p>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3 d-flex">
                            <button class="btn btn-link px-2" onclick="decreaeNumber2('quantity')" style="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                            </svg>
                            </button>

                            <input id="quantity" min="0" name="quantity" value="0" type="number" class="form-control form-control-sm">

                            <button class="btn btn-link px-2" onclick="increaseNumber2('quantity')" style="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            </button>
                        </div>
                    </div>
                    <div class="d-flex mt-5">
                        <button class="btn btn-outline-dark flex-shrink-0" type="button" onclick="addCard('quantity','quantityCart')">
                            <i class="bi-cart-fill me-1"></i>
                            เพิ่มในตะกร้า
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">สินค้าที่เกี่ยวข้อง</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 ">
                <?php
                    for($i=1;$i<=4;$i++){
                ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="shop-item.php">ดูสินค้า</a></div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <script src="../js/scripts.js"></script>
</body>
</html>