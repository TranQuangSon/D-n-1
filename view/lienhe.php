<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/lienhe.css">
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
                <li><a href="index.php"><i class="fa-solid fa-house"></i>Trang chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <li><a href="index.php?act=cuahang">Cửa hàng</a></li>
                <li><a href="index.php?act=danhbanhanong">Danh bạ nhà nông</a></li>
                <li><a href="index.php?act=lienhe" style="color:#fff ; background:#8CC63F; border-radius:5px" ;>Liên hệ</a></li>
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

        <!--danh mục trang-->
        <div class="banner">
            <h1>LIÊN HỆ</h1>
            <div class="a"><a href="index.php">Trang chủ</a> / Liên hệ</div>
        </div>
        <div class="content1">
            <div class="map"> <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2661367939495!2d106.65438007184817!3d10.790917095014736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed189fa855d%3A0xf63e15bfce46baef!2sC%C3%B4ng%20ty%20TNHH%20-%20MONA%20MEDIA!5e0!3m2!1svi!2s!4v1667566077153!5m2!1svi!2s"
                    width="592" height="580" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="form">
                <div class="text">
                    <div class="img"><img src="./img/logo-mona.png" alt="" width="132px" height="107px"></div>
                    <div class="text1">
                        <p><i class="fa-solid fa-map-location-dot"></i> Quỳnh Tam - Quỳnh Lưu - Nghệ An</p><br>
                        <i class="fa-solid fa-phone"></i><a href="">0373 484 535</a><br>
                        <i class="fa-solid fa-envelope-circle-check"></i><a href="">tuanflextech@gmail.com</a><br>
                        <i class="fa-brands fa-facebook"></i><a href="">Lý Anh Tuấn</a><br>
                    </div>
                </div>
                <h2>Liên hệ với chúng tôi</h2>

                <div class="form">
                    <input type="text" placeholder="Họ và tên">
                    <input type="text" placeholder="Email"><br>
                    <input type="text" placeholder="SĐT">
                    <input type="text" placeholder="ĐỊA CHỈ">
                    <textarea name="" id="" cols="44" rows="8" placeholder="Lời nhắn"></textarea><br>
                    <input type="submit" value="Gửi">
                </div>
            </div>
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
    </div>
</body>

</html>