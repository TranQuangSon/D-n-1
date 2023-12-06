<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
 <link rel="stylesheet" href="../css/sanphamchitiet.css">
 <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<style>

  .tuan li{
    list-style:none;
    padding: 10px;
  font-weight:bold;

  }
  .tuan i{
    padding: 0 5px;
    color:blue;
  }
  .muahang{
    background-color: white;
    color: #8CC63F;
    padding: 5px;
  }
.muahang:hover{
  color: #FFFFFF;
    background-color: #8CC63F; 

}
  /*footer*/
footer{
  margin-top: 30px;
  clear: both;
  background-color: rgb(40, 38, 38);  
  height: 370px;
}
footer .exitone{
  display: flex;
  justify-content: space-around;

}
footer .exitone .ketthuc p{
color: #FFFFFF;  
text-align: center;
padding: 0px;
}
footer .exitone .ketthuc p:hover{
  color: #8CC63F;
}
footer .exitone .ketthucc p{
  color: #FFFFFF;  
padding: 5px 0px;
}
footer .exitone .ketthucc p:hover{
  color: #8CC63F;
  
}
footer .exitone .ketthuc h2{
  color: #FFFFFF;
}
footer .exitone .ketthucc img{
  width: 146px;
  height: 53px;
}
footer .exitone .ketthuc{
  margin-top: 30px;
}
footer .exitone .ketthucc{
  margin-top: 30px;
}
.lienheicon{

  text-align: center;
}
.lienheicon i{
  color: #FFFFFF;
  font-size: 18px;
  padding: 30px 4px;
}
.lienheicon i:hover{
  color: #8CC63F;
}
</style>
<body>
    <div class="all">
   
    <!--Hedear and menu-->
    <div class="Hedear">
      <div class="logo">
        <img src="./img/logo1.jpg" alt="">
      </div>
      <div class="menu">
        <li><a href="index.php?act=trangchu"><i class="fa-solid fa-house"></i>Trang chủ</a></li>
        <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
        <li><a href="index.php?act=cuahang" style="color:#fff ; background:#8CC63F; border-radius:5px" ;>Cửa hàng</a>
        </li>
        <li><a href="index.php?act=danhbanhanong">Danh bạ nhà nông</a></li>
        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
        <li><a href="index.php?act=addtocart" ><i class="fa-solid fa-cart-shopping"style="font-size:19px"></i></a></li>
      </div>
      <form action="index.php?act=sanpham" method="POST">
      <div class="search">
        <input type="text" placeholder="Tìm Kiếm  ..." name="kyw">
        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </div>
      </form>
    </div>
    <div class="container my-5 py-5 z-depth-1">

<?php
extract($onesp)
?>
        <!--Section: Content-->
        <section class="text-center">
      
          <!-- Section heading -->
          <h3 class="font-weight-bold mb-5" style="margin-top:-30px">Sản phẩm chi tiết</h3>
      
          <div class="row">
      
            <div class="col-lg-6">
      
              <!--Carousel Wrapper-->
              <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
      
                <!--Slides-->
                <div class="carousel-inner text-center text-md-left" role="listbox">
                  <div class="carousel-item active">
                    <?php
                 $hinh=$img_path .$img;
                echo '  <img src="'.$hinh.'"
                      alt=""style="width:400px">'?>
                  </div>
                 
                </div>
                <!--/.Slides-->
      
                <!--Thumbnails-->
                <!-- <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a> -->
                <!--/.Thumbnails-->
      
              </div>
              <!--/.Carousel Wrapper-->
      
            </div>
      
            <div class="col-lg-5 text-center text-md-left">
      
              <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                <strong style="color: #8CC63F;"><?=$name?></strong>
              </h2>
              <!-- <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">bestseller</span> -->
              <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                <span class="red-text font-weight-bold">
                  <strong style="color:red"><?=$price?> <sup>đ</sup></strong>
                </span>
                <span class="grey-text">
                  <small>
                    <s style="color:gray">75 000 <sup>đ</sup></s>
                  </small>
                </span>
              </h3>
              <div class="tuan">
              <li><i class="fa-solid fa-chevron-down"></i> sản phẩm luôn đảm bảo về an toàn</li>
              <li><i class="fa-solid fa-chevron-down"></i>bảo hành 100% cho sản phẩm bị lỗi</li>
              <li><i class="fa-solid fa-chevron-down"></i>đảm bảo tươi ngon</li>
              <li><i class="fa-solid fa-chevron-down"></i>giao hàng trực tiếp từ vườn</li>
      </div>
              <!--Accordion wrapper-->
              <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
      
                <!-- Accordion card -->
                <div class="card">
      
                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingOne1">
                    
                
                      <h5 class="mb-0" style="color:#8CC63F ; text-decoration:none;">
                        Nội dung sản phẩm              
                      </h5>
                    
                  </div>
      
                  <!-- Card body -->
                  <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                    data-parent="#accordionEx">
                    <div class="card-body">
                      <?php
                     echo $describe;
                      ?>
                    </div>
                  </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col-md-12 text-center text-md-left text-md-right">
                      <?php
 echo '
          <form action="index.php?act=addtocart" method="post">
            <input type="hidden" name="id" value="' . $id . '">
            <input type="hidden" name="name" value="' . $name . '">
            <input type="hidden" name="img" value="' . $img . '">
            <input type="hidden" name="price" value="' . $price . '">
            <button class="muahang" type="submit" name="addtocart" value="Mua hàng">Mua hàng <i class="fa-solid fa-cart-shopping"></i></button>
        </form>
         
        </div>
   ';
?>
                      
                    </div>
                  </div>
                <!-- Accordion card -->
               
              <!--/.Accordion wrapper-->
      
              <!-- Add to Cart -->
             
                </div>
              </section>
              <!-- /.Add to Cart -->
      
            </div>
      
          </div>
      
        </section>
        <!--Section: Content-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <!--15.2 phần gửi bình luận -->
            <script>
                $(document).ready(function() {

                    $("#binhluan").load("view/binhluan/binhluanform.php", {
                        idpro: <?= $id ?>
                    });

                });
            </script>
            
            <div class="row " id="binhluan">
                <!-- <div class="boxtitle">Bình luận</div>
                <div class="row boxcontent"> -->

            </div>
      </div>
      </div>
      
    <footer>
      <div class="exitone">
        <div class="ketthucc">
          <img src="./img/logo2.jpg" alt="">
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
</body>
</html>