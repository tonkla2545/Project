<?php

include('../server.php');

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header('location: login.php');
}

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
    <!--====== Tiny Slider CSS ======-->
    <link rel="stylesheet" href="../css/tiny-slider.css" />

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="../css/LineIcons.css" />

    <!--====== Material Design Icons CSS ======-->
    <link rel="stylesheet" href="../css/materialdesignicons.min.css" />

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

    <!--====== gLightBox CSS ======-->
    <link rel="stylesheet" href="../css/glightbox.min.css" />

    <!--====== nouiSlider CSS ======-->
    <link rel="stylesheet" href="../css/nouislider.min.css" />

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="../css/default.css" />

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="../css/style.css" />
    
</head>
<body>

<!-- <navbar"> -->
  <?php
    if(!isset($_SESSION['username'])):
  ?>
    <header class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="../index.php">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../index.php">หน้าแรก</a>
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
                    <a href="../login/login.php"><button type="button" class="btn btn-outline-dark me-2" >Login</button></a>
                    <a href="../login/signup.php"><button type="button" class="btn btn-dark">Sign-up</button></a>
                  </div>
                </div>
            </div> 
        </div>
      </div>
    </header>
  <?php
    endif
  ?>
  <?php
    if(isset($_SESSION['username'])):
  ?>
    <header class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container px-4 px-lg-5">
          <a class="navbar-brand" href="../index.php">Start Bootstrap</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../index.php">หน้าแรก</a>
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
                        <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <span id="username">username</span> 
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="../profile/profile.php">บัญชีของฉัน</a></li>
                            <li><a class="dropdown-item" href="../order/order-h.php">ประวัติการเช่า</a></li>
                            <li><a class="dropdown-item" href="../index.php?loguut='1'">ออกจากระบบ</a></li>
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
  <section class="checkout-wrapper pt-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="checkout-style-1">
              <div class="checkout-table table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="product">สินค้า</th>
                      <th class="quantity">จำนวนวัน</th>
                      <th class="quantity">ปริมาณ</th>
                      <th class="price">ราคา</th>
                      <th class="action">แอคชั่น</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    for($i=1;$i<=4;$i++){
                  ?>
                    <tr>
                      <td>
                        <div class="product-cart d-flex">
                          <div class="product-thumb">
                            <img src="assets/images/product-cart/product-1.png" alt="Product">
                          </div>
                          <div class="product-content media-body">
                            <h5 class="title"><a href="#0">Hollow Port</a></h5>
                            <span>UG 0123</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p><span class="price" id="date">0 &nbsp;</span>วัน</p>
                      </td>
                      <td>
                        <div class="product-quantity d-inline-flex">
                          <button type="button" id="sub" class="sub" onclick="decreaeNumber('textbox','idprice')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/></svg>
                          </button>
                          <input type="text" name="" class="page-link" value="0" id="textbox">
                          <button type="button" id="add" class="add" onclick="increaseNumber('textbox','idprice')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/></svg>
                          </button>
                        </div>
                      </td>
                      <td>
                        <p>$<span class="price" id="idprice">0.00</span></p>
                      </td>
                      <td>
                        <ul class="action">
                          <li>
                            <!-- <a class="delete" href="#0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a> -->
                            <button type="button" id="delete" class="delete" onclick="deletes('textbox','idprice')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></button>
                          </li>
                        </ul>
                      </td>
                    </tr>
                    <?php 
                      }
                    ?>
                  </tbody>
                </table>
              </div>
              <div class="
                  checkout-coupon-total checkout-coupon-total-2
                  d-flex
                  flex-wrap
                ">
                <div class="checkout-coupon">
                </div>
                <div class="checkout-total">
                  <div class="single-total">
                    <p class="value">ราคาสินค้า:</p>
                    <p class="price">$<span id="product_price_total">0.00</span></p>
                  </div>
                  <div class="single-total">
                    <p class="value">ค่าจัดส่ง:</p>
                    <p class="price">$<span id="shipping_charge">0.00</span></p>
                  </div>
                  <div class="single-total">
                    <p class="value">ส่วนลด:</p>
                    <p class="price">$<span id="discount">0.00</span></p>
                  </div>
                  <div class="single-total">
                    <p class="value">ราคาเช่าสินค้า(จำนวนวันที่เช่า):</p>
                    <p class="price">$<span id="price_date">0.00</span></p>
                  </div>
                  <div class="single-total total-payable">
                    <p class="value">Total Payable:</p>
                    <p class="price">$<span id="price_total">0.00</span></p>
                  </div>
                </div>
              </div>
              <div class="checkout-btn d-sm-flex justify-content-between">
                <div class="single-btn">
                  <a href="../index.php" class="main-btn primary-btn-border">continue shopping</a>
                </div>
                <div class="single-btn">
                  <a href="payment.php" class="main-btn primary-btn">Pay now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="../js/scripts.js"></script>
</body>
</html>