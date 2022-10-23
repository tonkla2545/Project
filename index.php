<?php

include('server.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BorrowTime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr .net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>

<!-- <header class="p-3 text-bg-info"> -->
  <?php
    if($login==0){
  ?>
    <header class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">เกี่ยวกับ</a>
                </li>
              </ul>

                <section class="w-50 p-1 pb-1 d-flex justify-content-center align-items-center flex-column me-lg-auto mb-2 justify-content-center mb-md-0">
                <!-- <form class="nav col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 me-lg-auto mb-2 justify-content-center mb-md-0" role="search"> -->
                    <form class="input-group " role="search">
                    <input type="search" class="form-control form-control-white text-bg-white " placeholder="Search..." aria-label="Search">
                    <button type="button" class="btn btn-primary">
                        <svg height="19" viewBox="0 0 19 19" width="19" class="">
                        <g fill-rule="evenodd" stroke="none" stroke-width="1">
                            <g transform="translate(-1016 -32)">
                            <g>
                                <g transform="translate(405 21)">
                                <g transform="translate(611 11)">
                                    <path d="m8 16c4.418278 0 8-3.581722 8-8s-3.581722-8-8-8-8 3.581722-8 8 3.581722 8 8 8zm0-2c-3.3137085 0-6-2.6862915-6-6s2.6862915-6 6-6 6 2.6862915 6 6-2.6862915 6-6 6z">
                                    </path>
                                    <path d="m12.2972351 13.7114222 4.9799555 4.919354c.3929077.3881263 1.0260608.3842503 1.4141871-.0086574.3881263-.3929076.3842503-1.0260607-.0086574-1.414187l-4.9799554-4.919354c-.3929077-.3881263-1.0260608-.3842503-1.4141871.0086573-.3881263.3929077-.3842503 1.0260608.0086573 1.4141871z">
                                    </path>
                                </g>
                                </g>
                            </g>
                            </g>
                        </g>
                        </svg>
                    </button>
                    </form>
                </section>

                <div class="d-grid gap-2 d-md-flex">
                  <div class="text-end">
                    <a href="login/login.php"><button type="button" class="btn btn-outline-dark me-2" >Login</button></a>
                    <a href="login/signup.php"><button type="button" class="btn btn-dark">Sign-up</button></a>
                  </div>
                </div>
            </div> 
        </div>
      </div>
    </header>
  <?php
    }
  ?>
  <?php
    if($login==1){
  ?>
    <header class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container px-4 px-lg-5">
          <a class="navbar-brand" href="index.php">Start Bootstrap</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">เกี่ยวกับ</a>
                </li>
              </ul>

              <section class="w-50 p-1 pb-1 d-flex justify-content-center align-items-center flex-column me-lg-auto mb-2 justify-content-center mb-md-0">

                  <form class="input-group " role="search">
                  <input type="search" class="form-control form-control-white text-bg-white " placeholder="Search..." aria-label="Search">
                  <button type="button" class="btn btn-primary">
                      <svg height="19" viewBox="0 0 19 19" width="19" class="">
                      <g fill-rule="evenodd" stroke="none" stroke-width="1">
                          <g transform="translate(-1016 -32)">
                          <g>
                              <g transform="translate(405 21)">
                              <g transform="translate(611 11)">
                                  <path d="m8 16c4.418278 0 8-3.581722 8-8s-3.581722-8-8-8-8 3.581722-8 8 3.581722 8 8 8zm0-2c-3.3137085 0-6-2.6862915-6-6s2.6862915-6 6-6 6 2.6862915 6 6-2.6862915 6-6 6z">
                                  </path>
                                  <path d="m12.2972351 13.7114222 4.9799555 4.919354c.3929077.3881263 1.0260608.3842503 1.4141871-.0086574.3881263-.3929076.3842503-1.0260607-.0086574-1.414187l-4.9799554-4.919354c-.3929077-.3881263-1.0260608-.3842503-1.4141871.0086573-.3881263.3929077-.3842503 1.0260608.0086573 1.4141871z">
                                  </path>
                              </g>
                              </g>
                          </g>
                          </g>
                      </g>
                      </svg>
                  </button>
                  </form>
              </section>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <div class="text-end">
                    <div class="dropdown">
                        <button class="btn btn-outline-dark dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            username
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="profile/profile.php">บัญชีของฉัน</a></li>
                            <li><a class="dropdown-item" href="profile/profile.php">ประวัติการเช่า</a></li>
                            <li><a class="dropdown-item" href="index.php">ออกจากระบบ</a></li>
                        </ul>
                    </div>
                </div>
              </div>
          </div> 
      </div>
    </div>
  </header>
  <?php
    }
  ?>

<!-- ตะกร้า -->
  <div class="container px-4 px-lg-5 mt-5 ">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="item/order-h.php">
          <button class="btn btn-outline-dark" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>Cart
            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
          </button>
        </a>
      </div>
  </div>
  <!-- หน้าสินค้า -->
  <section class="py-5">
      <div class="container px-4 px-lg-5 mt-1">
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content">
              <?php 
                for($i=1;$i<=16;$i++){
              ?>
              <div class="col mb-5">
                  <div class="card h-100">
                      <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                      <!-- Product image-->
                        <a href="item/shop-item.php"><img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." /></a>
                      <!-- Product details-->
                      <div class="card-body p-4">
                          <div class="text-center">
                              <!-- Product name-->
                              <h5 class="fw-bolder">Special Item</h5>
                              <!-- Product price-->
                              <span class="text-muted text-decoration-line-through">$20.00</span>
                              $18.00
                          </div>
                      </div>
                      <!-- Product actions-->
                      <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                          <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="item/shop-item.php">ดูสินค้า</a></div>
                      </div>
                  </div>
              </div>
              <?php
              }
              ?>
          </div>
    
          <div class="btn-toolbar text-right" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group me-2 ms-auto" role="group" aria-label="First group">
                  <button type="button" class="btn btn-primary">1</button>
                  <button type="button" class="btn btn-primary">2</button>
                  <button type="button" class="btn btn-primary">3</button>
                  <button type="button" class="btn btn-primary">4</button>
              </div>
          </div>
      </div>
  </section>


  <!-- หมวดหมู่ -->
  <div class="container">
    <!-- <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"> -->
    <div class="col-md-4 d-flex align-items-center">
      <h4>หมวดหมู่</h4>
    </div>
      
    <!-- หมวดหมู่  -->
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-2 my-2">
      <div class="col mb-3">
        <h5>เสื้อผ้าผู้ชาย</h5>
        <ul class="nav flex">
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">เสื้อยืด</a></div>
          <span>&nbsp;|&nbsp;</span>
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">เสื้อเชิ้ต</a></div>
          <span>&nbsp;|&nbsp;</span>
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">เสื้อโปโล</a></div>
          <span>&nbsp;|&nbsp;</span>
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">กางเก่งขาสั้น</a></div>
          <span>&nbsp;|&nbsp;</span>
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">กางเก่งขายาว</a></div>
          <span>&nbsp;|&nbsp;</span>
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">ชุดชั้นในชาย</a></div>
          <span>&nbsp;|&nbsp;</span>
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">แจ็คเก็ตและเสื้อโค้ท</a></div>
          <span>&nbsp;|&nbsp;</span>
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">อื่นๆ</a></div>
          <span>&nbsp;|&nbsp;</span>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>เสื้อผ้าผู้หญิง</h5>
        <ul class="nav flex">
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">เสื้อยืด</a></div>
          <span>&nbsp;|&nbsp;</span>
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">เสื้อเชิ้ต</a></div>
          <span>&nbsp;|&nbsp;</span>
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">เสื้อโปโล</a></div>
          <span>&nbsp;|&nbsp;</span>
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">กางเก่ง</a></div>
          <span>&nbsp;|&nbsp;</span>
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">เดรส</a></div>
          <span>&nbsp;|&nbsp;</span>
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">กระโปรง</a></div>
          <span>&nbsp;|&nbsp;</span>
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">ชุดชั้นใน</a></div>
          <span>&nbsp;|&nbsp;</span>
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">แจ็คเก็ตและเสื้อโค้ท</a></div>
          <span>&nbsp;|&nbsp;</span>.
          <div class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted-outline">อื่นๆ</a></div>
          <span>&nbsp;|&nbsp;</span>
        </ul>
      </div>

    </footer>

  </div>
</body>
</html>