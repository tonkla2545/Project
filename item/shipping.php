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
                            <li><a class="dropdown-item" href="profile.php">บัญชีของฉัน</a></li>
                            <li><a class="dropdown-item" href="../order/order-h.php">ประวัติการเช่า</a></li>
                            <li><a class="dropdown-item" href="#">ออกจากระบบ</a></li>
                        </ul>
                    </div>
                </div>
              </div>
          </div> 
      </div>
    </header>
  <?php
    }
  ?>
    <section class="checkout-wrapper pt-50">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="checkout-steps-form-style-1 mt-50">
              <ul id="accordionExample">
                <li>
                  <h6 class="title" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    Your Personal Details
                  </h6>
                  <section class="checkout-steps-form-content collapse show" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="single-form form-default">
                          <label>User Name</label>
                          <div class="row">
                            <div class="col-md-6 form-input form">
                              <input type="text" placeholder="First Name">
                            </div>
                            <div class="col-md-6 form-input form">
                              <input type="text" placeholder="Last Name">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Email Address</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Email Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Phone Number</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Phone Number">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="single-form form-default">
                          <label>Mailing Address</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Mailing Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>City</label>
                          <div class="form-input form">
                            <input type="text" placeholder="City">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Post Code</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Post Code">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Country</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Country">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="select-elements select-style-2 mt-30">
                          <label>Region/State</label>
                          <div class="select-items select">
                            <div class="select-position">
                              <select style="padding: 0px 15px">
                                <option value="0">Select</option>
                                <option value="1">Select option 01</option>
                                <option value="2">Select option 02</option>
                                <option value="3">Select option 03</option>
                                <option value="4">Select option 04</option>
                                <option value="5">Select option 05</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="single-checkbox checkbox-style-3">
                          <input type="checkbox" id="checkbox-3">
                          <label for="checkbox-3"><span></span></label>
                          <p>My delivery and mailing addresses are the same.</p>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="single-form">
                          <button class="vjsteps_nxt main-btn primary-btn" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            next step
                          </button>
                        </div>
                      </div>
                    </div>
                  </section>
                </li>
                <li>
                  <h6 class="title collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Shipping Address
                  </h6>
                  <section class="checkout-steps-form-content collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="single-form form-default">
                          <label>User Name</label>
                          <div class="row">
                            <div class="col-md-6 form-input form">
                              <input type="text" placeholder="First Name">
                            </div>
                            <div class="col-md-6 form-input form">
                              <input type="text" placeholder="Last Name">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Email Address</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Email Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Phone Number</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Phone Number">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="single-form form-default">
                          <label>Mailing Address</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Mailing Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>City</label>
                          <div class="form-input form">
                            <input type="text" placeholder="City">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Post Code</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Post Code">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Country</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Country">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="select-elements select-style-2 mt-30">
                          <label>Region/State</label>
                          <div class="select-items select">
                            <div class="select-position">
                            <select style="padding: 0px 15px">
                              <option value="0">Select</option>
                              <option value="1">Select option 01</option>
                              <option value="2">Select option 02</option>
                              <option value="3">Select option 03</option>
                              <option value="4">Select option 04</option>
                              <option value="5">Select option 05</option>
                            </select>
                          </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="checkout-payment-option">
                          <h6 class="heading-6 font-weight-400 payment-title">
                            Select Delivery Option
                          </h6>
                          <div class="payment-option-wrapper">
                            <div class="single-payment-option">
                              <input type="radio" name="shipping" checked="" id="shipping-1">
                              <label for="shipping-1">
                                <img src="../img/kerry.png" width=150 alt="Sipping">
                                <p>Kerry Express</p>
                                <span class="price">$10.50</span>
                              </label>
                            </div>
                            <div class="single-payment-option">
                              <input type="radio" name="shipping" id="shipping-2">
                              <label for="shipping-2">
                                <img src="../img/TPost.png" width=150 alt="Sipping">
                                <p>ไปรษณีย์ไทย</p>
                                <span class="price">$10.50</span>
                              </label>
                            </div>
                            <div class="single-payment-option">
                              <input type="radio" name="shipping" id="shipping-3">
                              <label for="shipping-3">
                                <img src="../img/flash.jpg" width=150 alt="Sipping">
                                <p>Flash Express</p>
                                <span class="price">$10.50</span>
                              </label>
                            </div>
                            <div class="single-payment-option">
                              <input type="radio" name="shipping" id="shipping-4">
                              <label for="shipping-4">
                                <img src="../img/JT.jpg" width=150 alt="Sipping">
                                <p>J&T Express</p>
                                <span class="price">$10.50</span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="steps-form-btn">
                          <button class="vjsteps_prev main-btn primary-btn" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            previous
                          </button>
                          <a href="payment.php" class="main-btn primary-btn">Save &amp; Continue</a>
                        </div>
                      </div>
                    </div>
                  </section>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="checkout-sidebar pt-20">
              <div class="checkout-sidebar-coupon mt-30">
                <p>Appy Coupon to get discount!</p>
                <form action="#">
                  <div class="single-form form-default">
                    <div class="form-input form">
                      <input type="text" placeholder="Coupon Code">
                    </div>
                    <button class="main-btn primary-btn">apply</button>
                  </div>
                </form>
              </div>

              <div class="checkout-sidebar-price-table mt-30">
                <h5 class="title">Pricing Table</h5>

                <div class="sub-total-price">
                  <div class="total-price">
                    <p class="value">Subotal Price:</p>
                    <p class="price">$144.00</p>
                  </div>
                  <div class="total-price shipping">
                    <p class="value">Subotal Price:</p>
                    <p class="price">$10.50</p>
                  </div>
                  <div class="total-price discount">
                    <p class="value">Subotal Price:</p>
                    <p class="price">$10.00</p>
                  </div>
                </div>

                <div class="total-payable">
                  <div class="payable-price">
                    <p class="value">Subotal Price:</p>
                    <p class="price">$164.50</p>
                  </div>
                </div>

                <div class="price-table-btn">
                  <a href="#" class="main-btn primary-btn btn-block">Checkout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
</body> 