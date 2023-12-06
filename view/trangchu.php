<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="view/css/trangchu.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <style>
    .log a{
  font-size: 19px;
  color: black;
  padding: 10px;
}
    .log a:hover{
    /* background-color: #8CC63F; */
    color: red;
    border-radius: 99px; 
}
.logout{
color: black;

}
.logout1 .logout:hover{
    color: red;
    
}
  </style>
</head>


<body>
  <!--all tất cả-->
  <div class="all">
    <!--Hedear and menu-->
    <div class="Hedear">
      <div class="logo">
        <img src="view/img/logo1.jpg" alt="">
      </div>
      <div class="menu">
        <li><a href="index.php" style="color:#fff ; background:#8CC63F; border-radius:5px" ;><i
              class="fa-solid fa-house"></i>Trang chủ</a></li>
        <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
        <li><a href="index.php?act=cuahang">Cửa hàng</a></li>
        <li><a href="index.php?act=danhbanhanong">Danh bạ nhà nông</a></li>
        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
        <li><a href="index.php?act=addtocart" ><i class="fa-solid fa-cart-shopping"style="font-size:19px"></i></a></li>
        </div>
        
        <?php
       if(isset($_SESSION['user'])){
        extract($_SESSION['user']);//sủ dụng nhập các biến từ 1 mảng vào trong bảng
      ?> 
      <div class="row logout1" style="padding-top: 20px; display:inline;">
      <a href="index.php?act=edit_taikhoan" class="tenuser1"><i class="fa-solid fa-user" style="font-size: 15px;color:black" >   <?=$user?></i></a>   
      <a href="index.php?act=dangxuat" class="logout" style="font-size:16px; font-weight:bold; text-decoration:none; font-family:Arial, Helvetica, sans-serif ;">Đăng xuất</a>
      <?php if($role==1){?>
            
                <a style="text-decoration: none;" href="admin/index.php">Đăng nhập Admin</a>
            
            <?php }?>
    </div>
    <?php
      }else{?>
        <div class="log" style="padding-left:50px;">
        <a style=" text-decoration: none;" href="index.php?act=dangnhap">Đăng nhập</a>|
        <a style=" text-decoration: none;" href="index.php?act=dangki">Đăng kí</a>
        </div>
    <?php } ?>
      
      
    </div>
    <!--slide-->
    <div class="slide">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="view/minhtuan.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="view/img/banner2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="view/img/banner3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!--check1-->
    <div class="container my-5">


      <!--Section: Content-->
      <section class="text-center dark-grey-text">

        <!-- Section heading -->
        <h3 class="font-weight-bold pb-2 mb-4">Our amazing team</h3>
        <!-- Section description -->
        <p class="text-muted w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
          eum porro a pariatur veniam.</p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-4">

            <!-- Rotating card -->
            <div class="card-wrapper">
              <div id="card-1" class="card card-rotating text-center">
                <!-- Front Side -->
                <div class="face front">
                  <!-- Image -->
                  <div class="card-up">
                    <img class="card-img-top" src="view/img/tuan2.jpg" height="250px" alt="Team member card image">
                  </div>
                  <!-- Avatar -->
                  <div class="avatar mx-auto white">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img(10).jpg" class="rounded-circle img-fluid"
                      alt="First sample avatar image">
                  </div>
                  <!-- Content -->
                  <div class="card-body">
                    <h4 class="font-weight-bold mt-1 mb-3">Maria Kate</h4>
                    <p class="font-weight-bold dark-grey-text">Xuất xưởng mona</p>
                    <!-- Triggering button -->

                  </div>
                </div>
                <!-- Front Side -->
                <!-- Back Side -->
                <div class="face back">
                  <!-- Content -->
                  <div class="card-body">
                    <!-- Content -->
                    <h4 class="font-weight-bold mt-4 mb-2">
                      <strong>About me</strong>
                    </h4>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta.
                      Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus,
                      voluptatum eum, officia laudantium quaerat?
                    </p>
                    <hr>
                    <!-- Social Icons -->
                    <ul class="list-inline list-unstyled">
                      <li class="list-inline-item">
                        <a class="p-2 fa-lg fb-ic">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="p-2 fa-lg pin-ic">
                          <i class="fab fa-pinterest"> </i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="p-2 fa-lg ins-ic">
                          <i class="fab fa-instagram"> </i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="p-2 fa-lg tw-ic">
                          <i class="fab fa-twitter"> </i>
                        </a>
                      </li>
                    </ul>
                    <!-- Triggering button -->

                  </div>
                </div>
                <!-- Back Side -->
              </div>
            </div>
            <!-- Rotating card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-4">
            <!-- Rotating card -->
            <div class="card-wrapper">
              <div id="card-2" class="card card-rotating text-center">
                <!-- Front Side -->
                <div class="face front">
                  <!-- Image -->
                  <div class="card-up">
                    <img class="card-img-top" src="view/img/tuan1.jpg" height="250px" alt="Team member card image">
                  </div>
                  <!-- Avatar -->
                  <div class="avatar mx-auto white">
                    <img src="view/img/anhabout.jpg" width="230px" class="rounded-circle"
                      alt="Second sample avatar image">
                  </div>
                  <!-- Content -->
                  <div class="card-body">
                    <h4 class="font-weight-bold mt-1 mb-3">Anh Tuấn</h4>
                    <p class="font-weight-bold dark-grey-text">Ông chủ Mona</p>
                    <!-- Triggering button -->

                  </div>
                </div>
                <!-- Front Side -->
                <!-- Back Side -->
                <div class="face back">
                  <!-- Content -->
                  <div class="card-body">
                    <!-- Content -->
                    <h4 class="font-weight-bold mt-4 mb-2">
                      <strong>About me</strong>
                    </h4>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta.
                      Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus,
                      voluptatum eum, officia laudantium quaerat?
                    </p>
                    <hr>
                    <!-- Social Icons -->
                    <ul class="list-inline list-unstyled">
                      <li class="list-inline-item">
                        <a class="p-2 fa-lg fb-ic">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="p-2 fa-lg pin-ic">
                          <i class="fab fa-pinterest"> </i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="p-2 fa-lg ins-ic">
                          <i class="fab fa-instagram"> </i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="p-2 fa-lg tw-ic">
                          <i class="fab fa-twitter"> </i>
                        </a>
                      </li>
                    </ul>
                    <!-- Triggering button -->

                  </div>
                </div>
                <!-- Back Side -->
              </div>
            </div>
            <!-- Rotating card -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-4">
            <!-- Rotating card -->
            <div class="card-wrapper">
              <div id="card-3" class="card card-rotating text-center">
                <!-- Front Side -->
                <div class="face front">
                  <!-- Image -->
                  <div class="card-up">
                    <img class="card-img-top" src="view/img/tuan3.jpg" height="250px" alt="Team member card image">
                  </div>
                  <!-- Avatar -->
                  <div class="avatar mx-auto white">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img(8).jpg" class="rounded-circle img-fluid"
                      alt="Third sample avatar image">
                  </div>
                  <!-- Content -->
                  <div class="card-body">
                    <h4 class="font-weight-bold mt-1 mb-3">John Doe</h4>
                    <p class="font-weight-bold dark-grey-text">Phân phối khách hàng</p>
                    <!-- Triggering button -->

                  </div>
                </div>
                <!-- Front Side -->
                <!-- Back Side -->
                <div class="face back">
                  <!-- Content -->
                  <div class="card-body">
                    <!-- Content -->
                    <h4 class="font-weight-bold mt-4 mb-2">
                      <strong>About me</strong>
                    </h4>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta.
                      Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus,
                      voluptatum eum, officia laudantium quaerat?
                    </p>
                    <hr>
                    <!-- Social Icons -->
                    <ul class="list-inline list-unstyled">
                      <li class="list-inline-item">
                        <a class="p-2 fa-lg fb-ic">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="p-2 fa-lg pin-ic">
                          <i class="fab fa-pinterest"> </i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="p-2 fa-lg ins-ic">
                          <i class="fab fa-instagram"> </i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="p-2 fa-lg tw-ic">
                          <i class="fab fa-twitter"> </i>
                        </a>
                      </li>
                    </ul>
                    <!-- Triggering button -->

                  </div>
                </div>
                <!-- Back Side -->
              </div>
            </div>
            <!-- Rotating card -->
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!--Section: Content-->


    </div>
    <!--ba-->
    <div class="container mt-5">


      <!--Section: Content-->
      <section class="dark-grey-text text-center">

        <!-- Section heading -->
        <h3 class="font-weight-bold mb-4 pb-2">Tin tức</h3>
        <!-- Section description -->
        <p class="grey-text w-responsive mx-auto mb-5">Những ông chủ bà chủ đang phát tiển công ty với những mặt hàng
          của mona shop, vì sản phẩM luôn đạt yêu cầu của người dùng với đạt yêu cầu về dinh dưỡng và độ an toàn</p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-3 col-md-6 mb-4">
            <!-- Collection card -->
            <div class="card collection-card z-depth-1-half">
              <!-- Card image -->
              <div class="view zoom">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/5.jpg" class="img-fluid"
                  alt="">
                <div class="stripe dark">
                  <a>
                    <p>Trousers
                      <i class="fas fa-angle-right"></i>
                    </p>
                  </a>
                </div>
              </div>
              <!-- Card image -->
            </div>
            <!-- Collection card -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-3 col-md-6 mb-4">
            <!-- Collection card -->
            <div class="card collection-card z-depth-1-half">
              <!-- Card image -->
              <div class="view zoom">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/8.jpg" class="img-fluid"
                  alt="">
                <div class="stripe light">
                  <a>
                    <p>Sweatshirt
                      <i class="fas fa-angle-right"></i>
                    </p>
                  </a>
                </div>
              </div>
              <!-- Card image -->
            </div>
            <!-- Collection card -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-3 col-md-6 mb-4">
            <!-- Collection card -->
            <div class="card collection-card z-depth-1-half">
              <!-- Card image -->
              <div class="view zoom">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/9.jpg" class="img-fluid"
                  alt="">
                <div class="stripe dark">
                  <a>
                    <p>Black hat
                      <i class="fas fa-angle-right"></i>
                    </p>
                  </a>
                </div>
              </div>
              <!-- Card image -->
            </div>
            <!-- Collection card -->
          </div>
          <!-- Grid column -->

          <!-- Fourth column -->
          <div class="col-lg-3 col-md-6 mb-4">
            <!-- Collection card -->
            <div class="card collection-card z-depth-1-half">
              <!-- Card image -->
              <div class="view zoom">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/7.jpg" class="img-fluid"
                  alt="">
                <div class="stripe light">
                  <a>
                    <p>Sweatshirt
                      <i class="fas fa-angle-right"></i>
                    </p>
                  </a>
                </div>
              </div>
              <!-- Card image -->
            </div>
            <!-- Collection card -->
          </div>
          <!-- Fourth column -->

        </div>
        <!-- Grid row -->

      </section>
      <!--Section: Content-->


    </div>
    <!--cuối cùng-->
    <div class="container my-5">


      <!--Section: Content-->
      <section class="magazine-section dark-grey-text">

        <!-- Section heading -->
        <h3 class="text-center font-weight-bold mb-4 pb-2">Công thức</h3>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit
          esse cillum dolore eu fugiat nulla sint occaecat cupidatat non proident, sunt culpa
          qui officia deserunt est laborum.</p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-6 col-md-12 mb-4">

            <!-- Featured news -->
            <div class="single-news">

              <!-- Image -->
              <div class="view overlay rounded z-depth-1-half mb-4">
                <img class="img-fluid" src="view/img/trch1.jpg" width="800px" alt="Sample image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!-- Data -->


              <!-- Excerpt -->
              <h3 class="font-weight-bold dark-grey-text mb-3"><a>Title of the news</a></h3>
              <p class="dark-grey-text">Sed ut perspiciatis unde voluptatem omnis iste natus
                error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                inventore veritatis et quasi architecto beatae vitae explicabo. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>

            </div>
            <!-- Featured news -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-6 col-md-12 mb-4">

            <!-- Small news -->
            <div class="single-news mb-4">

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-md-3">

                  <!--Image-->
                  <div class="view overlay rounded z-depth-1 mb-4">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/img%20(29).jpg"
                      alt="Sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-9">

                  <!-- Excerpt -->
                  <p class="font-weight-bold dark-grey-text">26/02/2018</p>
                  <div class="d-flex justify-content-between">
                    <div class="col-11 text-truncate pl-0 mb-3">
                      <a href="cuahang.html" style="text-decoration: none;" class="dark-grey-text">At vero eos et
                        accusamus et iusto odio dignissimos
                        ducimus qui blanditiis</a>
                    </div>
                    <a><i class="fas fa-angle-double-right"></i></a>
                  </div>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </div>
            <!-- Small news -->

            <!-- Small news -->
            <div class="single-news mb-4">

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-md-3">

                  <!--Image-->
                  <div class="view overlay rounded z-depth-1 mb-4">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                      alt="Sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-9">

                  <!-- Excerpt -->
                  <p class="font-weight-bold dark-grey-text">25/02/2018</p>
                  <div class="d-flex justify-content-between">
                    <div class="col-11 text-truncate pl-0 mb-3">
                      <a href="cuahang.html" style="text-decoration: none;" class="dark-grey-text">Itaque earum rerum
                        hic tenetur a sapiente delectus</a>
                    </div>
                    <a><i class="fas fa-angle-double-right"></i></a>
                  </div>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </div>
            <!-- Small news -->

            <!-- Small news -->
            <div class="single-news mb-4">

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-md-3">

                  <!--Image-->
                  <div class="view overlay rounded z-depth-1 mb-4">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/87.jpg"
                      alt="Sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-9">

                  <!-- Excerpt -->
                  <p class="font-weight-bold dark-grey-text">24/02/2018</p>
                  <div class="d-flex justify-content-between">
                    <div class="col-11 text-truncate pl-0 mb-3">
                      <a href="cuahang.html" style="text-decoration: none;" class="dark-grey-text">Soluta nobis est
                        eligendi optio cumque nihil impedit quo
                        minus</a>
                    </div>
                    <a><i class="fas fa-angle-double-right"></i></a>
                  </div>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </div>
            <!-- Small news -->

            <!-- Small news -->
            <div class="single-news">

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-md-3">

                  <!--Image-->
                  <div class="view overlay rounded z-depth-1 mb-md-0 mb-4">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg"
                      alt="Sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-9">

                  <!-- Excerpt -->
                  <p class="font-weight-bold dark-grey-text">23/02/2018</p>
                  <div class="d-flex justify-content-between">
                    <div class="col-11 text-truncate pl-0 mb-lg-3">
                      <a href="cuahang.html" style="text-decoration: none;" class="dark-grey-text">Duis aute irure dolor
                        in reprehenderit in voluptate</a>
                    </div>
                    <a><i class="fas fa-angle-double-right"></i></a>
                  </div>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </div>
            <!-- Small news -->

          </div>
          <!--Grid column-->

        </div>
        <!-- Grid row -->

      </section>
      <!--Section: Content-->


    </div>
    <!--nhãn hàng-->
    <div class="my-5">

      <section class="grey lighten-2 py-5">

        <div class="flex-center">

          <!--First row-->
          <div class="row">

            <!--First column-->
            <div class="col-md-3 flex-center">
              <img src="https://mdbootstrap.com/img/Photos/Template/34.png" class="img-fluid wow fadeIn"
                data-wow-delay=".2s">
            </div>
            <!--/First column-->

            <!--Second column-->
            <div class="col-md-3 flex-center">
              <img src="https://mdbootstrap.com/img/Photos/Template/35.png" class="img-fluid wow fadeIn"
                data-wow-delay=".4s">
            </div>
            <!--/Second column-->

            <!--Third column-->
            <div class="col-md-3 flex-center">
              <img src="https://mdbootstrap.com/img/Photos/Template/36.png" class="img-fluid wow fadeIn"
                data-wow-delay=".4s">
            </div>
            <!--/Third column-->

            <!--Fourth column-->
            <div class="col-md-3 flex-center">
              <img src="https://mdbootstrap.com/img/Photos/Template/37.png" class="img-fluid wow fadeIn"
                data-wow-delay=".2s">
            </div>
            <!--/Fourth column-->

          </div>
          <!--/First row-->

        </div>

      </section>

    </div>

    <!--footer-->
    <footer>
      <div class="exitone">
        <div class="ketthucc">
          <img src="view/img/logo2.jpg" alt="">
          <p><i class="fa-solid fa-location-dot"></i> Quỳnh Tam - Quỳnh Lưu - Nghệ An</p>
          <p><i class="fa-solid fa-phone"> </i> 0373 484 535</p>
          <p><i class="fa-regular fa-envelope"> </i>tuanflextech@gmail.com</p>
          <p><i class="fa-brands fa-facebook-f"> </i>Lý Anh Tuấn</p>
        </div>
        <div class="ketthuc">
          <h2>Sản Phẩm</h2>
          <p>Rau củ</p>
          <p>Hải sản</p>
          <p>Trái cây</p>
          <p>Thịt trứng</p>
          <p>Đồ uống</p>
        </div>
        <div class="ketthuc">
          <h2>Danh Mục</h2>
          <p>Trang chủ</p>
          <p>Giới thiệu</p>
          <p>Cửa hàng</p>
          <p>Danh bạ nhà nông</p>
          <p>Liên hệ</p>
        </div>
        <div class="ketthuc">
          <h2>Dịch vụ</h2>
          <p>Rau củ</p>
          <p>Hải sản</p>
          <p>Trái cây</p>
          <p>Thịt trứng</p>
          <p>Đồ uống</p>
        </div>
      </div>
      <div class="lienheicon">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-telegram"></i>
        <i class="fa-brands fa-instagram"></i>
      </div>
    </footer>
  </div>
</body>

</html>