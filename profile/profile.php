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
    <link href="../css/styles.css" rel="stylesheet" />
</head>
<body>

<!-- <header class="p-3 text-bg-info"> -->
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
                            <li><a class="dropdown-item" href="profile.php">บัญชีของฉัน</a></li>
                            <li><a class="dropdown-item" href="../order/order-h.php">ประวัติการเช่า</a></li>
                            <li><a class="dropdown-item" href="../index.php?logout='1'">ออกจากระบบ</a></li>
                        </ul>
                    </div>
                </div>
              </div>
          </div> 
      </div>
    </div>
  </header>
  <?php
    endif
  ?>
  <!-- Profile -->
  <div class="container mt-4">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-3 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                    </div>
                    <div class="mt-3">
                      <h5>
                        Member:<span id="member"></span>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a href="#">ประวัติ</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-9">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row mt-4">
                    <div class="col-sm-3">
                      <h6 class="mb-0">ชื่อ</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Kenneth Valdez
                    </div>
                  </div>
                  <hr>
                  <div class="row mt-4">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      fip@jukmuh.al
                    </div>
                  </div>
                  <hr>
                  <div class="row mt-4">
                    <div class="col-sm-3">
                      <h6 class="mb-0">เบอร์โทรศัพท์</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      012-3456789
                    </div>
                  </div>
                  <hr>
                  <div class="row mt-4">
                    <div class="col-sm-3">
                      <h6 class="mb-0">เพศ</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        เพศชาย,เพศหญิง,อื่นๆ
                    </div>
                  </div>
                  <hr>
                  <div class="row mt-4">
                    <div class="col-sm-3">
                      <h6 class="mb-0">วัน/เดือน/ปีเกิด</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        1 มกราคม 2000
                    </div>
                  </div>
                  <hr>
                  <div class="row mt-4">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="profile-edit.php">แก้ไขข้อมูล</a>
                    </div>
                  </div>
                </div>
              </div>




            </div>
          </div>

        </div>
    </div>

</body>
