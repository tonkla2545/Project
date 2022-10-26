<?php

include('../server.php');

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

<!-- <header class="p-3 text-bg-info"> -->
  <?php
    if($login==0){
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
                    <a href="../login/login.php"><button type="button" class="btn btn-outline-dark me-2" >Login</button></a>
                    <a href="../login/signup.php"><button type="button" class="btn btn-dark">Sign-up</button></a>
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
          <a class="navbar-brand" href="../index.php">Start Bootstrap</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../index.php">หน้าแรก</a>
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
                        <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            username
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="../profilr/profile.php">บัญชีของฉัน</a></li>
                            <li><a class="dropdown-item" href="#">ประวัติการเช่า</a></li>
                            <li><a class="dropdown-item" href="#">ออกจากระบบ</a></li>
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
  <section class="order-id-wrapper pt-100 pb-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="order-id-content">
              <h4 class="order-id">Order ID: 1234567890</h4>
              <ul class="order-meta">
                <li><a class="product" href="#0">4 Product</a></li>
              </ul>
              <div class="single-progress-bar-horizontal shipped">
                <div class="progress-text">
                  <p>Shipped</p>
                </div>
                <div class="progress-bar-inner">
                  <div class="bar-inner bar-inner-2">
                    <div class="progress-horizontal">
                      <i class="mdi mdi-package"></i>
                    </div>
                  </div>
                </div>
                <div class="progress-track">
                  <p>Track Order</p>
                </div>
              </div>
              <span class="order-price">$144.50</span>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="row">
              <div class="col-md-7">
                <div class="order-product mt-30">
                  <div class="order-title bg-info">
                    <h5 class="title ">Ordered Products</h5>
                  </div>
                  <div class="order-product-table table-responsive">
                    <table class="table">
                      <tbody>
                      <?php
                        for($i=1;$i<=4;$i++){
                        ?>
                        <tr>
                          <td class="product">
                            <div class="order-product-item d-flex">
                              <div class="product-thumb">
                                <img src="assets/images/product-cart/product-1.png" alt="product">
                              </div>
                              <div class="product-content media-body">
                                <h5 class="title">
                                  <a href="#0">Hollow Port</a>
                                </h5>
                                <ul>
                                  <li><span>Brown</span></li>
                                  <li><span>XL</span></li>
                                  <li><span>1 X 36.00</span></li>
                                </ul>
                              </div>
                            </div>
                          </td>
                          <td class="price">
                            <p class="product-price">$36.00</p>
                          </td>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="order-product-total">
                    <div class="sub-total">
                      <p class="value">Subotal Price:</p>
                      <p class="price">$144.00</p>
                    </div>
                    <div class="sub-total">
                      <p class="value">Shipping Cost (+):</p>
                      <p class="price">$10.50</p>
                    </div>
                    <div class="sub-total">
                      <p class="value">Discount (-):</p>
                      <p class="price">$10.00</p>
                    </div>
                  </div>
                  <div class="payable-total">
                    <p class="value">Total Payable:</p>
                    <p class="price">$10.00</p>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="single-order-details mt-30">
                  <div class="order-title bg-info">
                    <h5 class="title">Ordered Products</h5>
                  </div>
                  <div class="order-details-content">
                    <div class="single-details-item d-flex flex-wrap">
                      <div class="details-title">
                        <h6 class="title">Order ID:</h6>
                      </div>
                      <div class="details-content">
                        <p>2352962A</p>
                      </div>
                    </div>
                    <div class="single-details-item d-flex flex-wrap">
                      <div class="details-title">
                        <h6 class="title">Date &amp; Time:</h6>
                      </div>
                      <div class="details-content">
                        <p>02/23/2020, 5:00PM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="single-order-details mt-25">
                  <div class="order-title bg-info">
                    <h5 class="title">Pesonal Details</h5>
                  </div>
                  <div class="order-details-content">
                    <div class="single-details-item d-flex flex-wrap">
                      <div class="details-title">
                        <h6 class="title">Name:</h6>
                      </div>
                      <div class="details-content">
                        <p>Jhone Doe</p>
                      </div>
                    </div>
                    <div class="single-details-item d-flex flex-wrap">
                      <div class="details-title">
                        <h6 class="title">Email:</h6>
                      </div>
                      <div class="details-content">
                        <p>doejhon@email.com</p>
                      </div>
                    </div>
                    <div class="single-details-item d-flex flex-wrap">
                      <div class="details-title">
                        <h6 class="title">Phone:</h6>
                      </div>
                      <div class="details-content">
                        <p>+123 456 789 0234</p>
                      </div>
                    </div>
                    <div class="single-details-item d-flex flex-wrap">
                      <div class="details-title">
                        <h6 class="title">Mailing Address:</h6>
                      </div>
                      <div class="details-content">
                        <p>
                          Company Inc., 8901 Marmora Road, Glasgow, D04 89GR.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="single-order-details mt-25">
                  <div class="order-title bg-info">
                    <h5 class="title">Shipping Address</h5>
                  </div>
                  <div class="order-details-content">
                    <div class="single-details-item d-flex flex-wrap">
                      <div class="details-title">
                        <h6 class="title">Name:</h6>
                      </div>
                      <div class="details-content">
                        <p>Jhone Doe</p>
                      </div>
                    </div>
                    <div class="single-details-item d-flex flex-wrap">
                      <div class="details-title">
                        <h6 class="title">Email:</h6>
                      </div>
                      <div class="details-content">
                        <p>doejhon@email.com</p>
                      </div>
                    </div>
                    <div class="single-details-item d-flex flex-wrap">
                      <div class="details-title">
                        <h6 class="title">Phone:</h6>
                      </div>
                      <div class="details-content">
                        <p>+123 456 789 0234</p>
                      </div>
                    </div>
                    <div class="single-details-item d-flex flex-wrap">
                      <div class="details-title">
                        <h6 class="title">Mailing Address:</h6>
                      </div>
                      <div class="details-content">
                        <p>
                          Company Inc., 8901 Marmora Road, Glasgow, D04 89GR.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="order-policy mt-30">
                  <div class="order-title">
                    <h5 class="title">Cancellation Policy</h5>
                  </div>
                  <div class="policy-content">
                    <p>Cancellation Policy goes here.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="order-btn pt-20">
                  <a href="#0" class="main-btn primary-btn-text">Write a Review</a>
                  <a href="#0" class="main-btn primary-btn-text">Buy again</a>
                  <a href="#0" class="main-btn error-btn-text">Cancel order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>