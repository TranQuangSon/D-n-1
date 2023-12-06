
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 
  <link rel="stylesheet" href="./view/css/danhbanhanong.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
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
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
        <li><a href="index.php?act=cuahang">Cửa hàng</a></li>
        <li><a style="color:white;background-color:#8CC63F" href="index.php?act=danhbanhanong">Danh bạ nhà nông</a></li>
        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
        <li><a href="index.php?act=addtocart" ><i class="fa-solid fa-cart-shopping"style="font-size:19px"></i></a></li>
      </div>
      <?php
       if(isset($_SESSION['user'])){
        extract($_SESSION['user']);//sủ dụng nhập các biến từ 1 mảng vào trong bảng
      ?> 
      <div class="row logout1" style="padding-top: 20px; display:inline;">
      <a href="#" class="tenuser1"><i class="fa-solid fa-user" style="font-size: 15px;color:black" >   <?=$user?></i></a>   
      
    </div>
    
    <?php } ?>
    </div>


    <!--AE CODE TIẾP VỀ PHẦN CUỐI CHỜ FOOTER NHÉ-->


    <div class="content">
      <h3 style="margin-top:30px">DANH BẠ NHÀ NÔNG</h3>
      <div class="danhmuc">
        <div class="fond">
          <div class="light" style="background-image:url(./img/logo01.png);">
            <div class="mini">
              <div class="titre"><i class="fas fa-id-card-alt fa-2x"></i></div>
              <div><a class="deroul_titre"
                  href="http://mauweb.monamedia.net/vuonrau/cong-ty-tnhh-thuc-pham-tam-minh/">POSTED ON 15 THÁNG NĂM,
                  2022</a></div>
              <div><a class="deroul_soustitre"
                  href="http://mauweb.monamedia.net/vuonrau/cong-ty-tnhh-thuc-pham-tam-minh/">Thực Phẩm Tâm Minh</a>
              </div>
            </div>
          </div>
        </div>
        <div class="fond">
          <div class="light" style="background-image:url(./img/logo02.png);">
            <div class="mini">
              <div class="titre"><i class="fas fa-id-card-alt fa-2x"></i></div>
              <div><a class="deroul_titre" href="http://mauweb.monamedia.net/vuonrau/cong-ty-thien-nhien-viet/">POSTED
                  ON 15 THÁNG NĂM, 2022</a></div>
              <div><a class="deroul_soustitre" href="http://mauweb.monamedia.net/vuonrau/cong-ty-thien-nhien-viet/">Công
                  Ty Thiên Nhiên Viêt</a></div>
            </div>
          </div>
        </div>
        <div class="fond">
          <div class="light" style="background-image:url(./img/logo03.png);">
            <div class="mini">
              <div class="titre"><i class="fas fa-id-card-alt fa-2x"></i></div>
              <div><a class="deroul_titre" href="http://mauweb.monamedia.net/vuonrau/binca-viet-nam/">POSTED ON 15 THÁNG
                  NĂM, 2022</a></div>
              <div><a class="deroul_soustitre" href="http://mauweb.monamedia.net/vuonrau/binca-viet-nam/">Binca Việt
                  Nam</a></div>
            </div>
          </div>
        </div>
        <div class="fond">
          <div class="light" style="background-image:url(./img/logo04.jpg);">
            <div class="mini">
              <div class="titre"><i class="fas fa-id-card-alt fa-2x"></i></div>
              <div><a class="deroul_titre" href="http://mauweb.monamedia.net/vuonrau/antofu-viet-nam/">POSTED ON 15
                  THÁNG NĂM, 20222</a></div>
              <div><a class="deroul_soustitre" href="http://mauweb.monamedia.net/vuonrau/antofu-viet-nam/">Antofu Việt
                  Nam</a></div>
            </div>
          </div>
        </div>
        <div class="fond">
          <div class="light" style="background-image:url(./img/logo05.jpg);">
            <div class="mini">
              <div class="titre"><i class="fas fa-id-card-alt fa-2x"></i></div>
              <div><a class="deroul_titre" href="http://mauweb.monamedia.net/vuonrau/an-moc-farm/">POSTED ON 15 THÁNG
                  NĂM, 2022</a></div>
              <div><a class="deroul_soustitre" href="http://mauweb.monamedia.net/vuonrau/an-moc-farm/">An Mộc Fram</a>
              </div>
            </div>
          </div>
        </div>
        <div class="fond">
          <div class="light" style="background-image:url(./img/logo06.png);">
            <div class="mini">
              <div class="titre"><i class="fas fa-id-card-alt fa-2x"></i></div>
              <div><a class="deroul_titre" href="https://huunghi.com.vn/blogs/tin-tuc">POSTED ON 15 THÁNG NĂM, 2022</a>
              </div>
              <div><a class="deroul_soustitre" href="https://huunghi.com.vn/blogs/tin-tuc">Công ty Thực Phẩm Hữu
                  Nghị</a></div>
            </div>
          </div>
        </div>
        <!-- <div  class="fond">
                <div class="light" style="background-image:url(../logo1.png);">
                  <div class="mini">
                    <div class="titre"><i class="fas fa-id-card-alt fa-2x"></i></div>
                    <div><a  class="deroul_titre" href="http://mauweb.monamedia.net/vuonrau/cong-ty-tnhh-thuc-pham-tam-minh/">DANH BẠ NHÀ NÔNG</a></div>
                    <div ><a class="deroul_soustitre" href="">Công ty Thực Phẩm Tâm Minh</a></div>
                  </div>
                </div>            
              </div>
              <div  class="fond">
                <div class="light" style="background-image:url(../logo1.png);">
                  <div class="mini">
                    <div class="titre"><i class="fas fa-id-card-alt fa-2x"></i></div>
                    <div><a  class="deroul_titre" href="http://mauweb.monamedia.net/vuonrau/cong-ty-tnhh-thuc-pham-tam-minh/">DANH BẠ NHÀ NÔNG</a></div>
                    <div ><a class="deroul_soustitre" href="">Công ty Thực Phẩm Tâm Minh</a></div>
                  </div>
                </div>            
              </div> -->
      </div>
      <!--footer-->

      </div>
    <div>
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
  </div>
</body>

</html>