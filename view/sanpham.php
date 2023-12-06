<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/cuahang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
    <!--all tất cả-->
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
                <button type="sybmit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        </div>
        <!--danh mục trang-->
        <div class="danhmuc">
            <li><a href="index.php">Trang chủ </a></li>
            /
            <li><a href="index.php?act=cuahang" style="color: #8CC63F;">Cửa hàng</a></li>
        </div>
        <!--bên trái-->
        <div class="lefttrai">
            <!--danhmucsp-->
            <div class="dmsanpham">
                <h3>DANH MỤC SẢN PHẨM</h3>
                <div class="listsp">
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&iddm=" . $id;
                        echo '<li><a href="' . $linkdm . '">' . $name_dm . '</a></li>';
                    }
                    ?>
                    
                </div>
            </div>

            <!--sản phẩm bán chạy-->
            <div class="chaysp">
        <h3>SẢN PHẨM BÁN CHẠY</h3>
        <div class="listspchay">
        <?php
        foreach ($top10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img;
            echo ' <div class="sp1">
                   <a href="' . $linksp . '"> <img src="' . $img . '" alt=""></a>
                   <a href="' . $linksp . '">' . $name. '<p>'.$price.'<sup>đ</sup></p></a>
                    </div> ';
        }

        ?>
          <!--2-->
          
        </div>
      </div>
        </div>
        <!--bên phải-->
        <div class="rightphai">
            <div class="boxsanphamlke">
                <?php
                $i = 0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $hinh = $img_path . $img;
                    if (($i == 3) || ($i == 7) || ($i == 11)) {
                        //  $mr="mr"; 
                    } else {
                        $mr = "mr";
                    }
                    echo '
                    <div class="'.$mr.'">
                        <a href="'.$linksp.'">  <img src="'.$hinh.'" alt=""></a>
                           <br>
                           <a href="'.$linksp.'"   <b>'.$name.'</b></a>
                           <p>'.$price.'<sup>đ</sup></p>
                           <br>
                           <form action="index.php?act=addtocart" method="post">
                             <input type="hidden" name="id" value="' . $id . '">
                             <input type="hidden" name="name" value="' . $name . '">
                             <input type="hidden" name="img" value="' . $img . '">
                             <input type="hidden" name="price" value="' . $price . '">
                             <button type="submit" name="addtocart" value="Mua hàng">Mua hàng <i class="fa-solid fa-cart-shopping"></i></button>
                         </form>
                          
                         </div>
                         
                    ';
                    $i += 1;
                }

                ?>

            </div>
        </div>
        <!--footer-->
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
    </div>
</body>

</html>