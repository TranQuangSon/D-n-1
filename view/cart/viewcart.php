
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/giohang.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .son:hover{
        text-decoration: none; 
        
        
    }

    button{
      background-color:white;
      color:#8CC63F;
      padding: 5px;
     
    }
    button:hover{
        color:white;
        background-color:#8CC63F;
     
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
            </div>
            <form action="index.php?act=sanpham" method="POST">
      <div class="search">
        <input type="text" placeholder="Tìm Kiếm  ..." name="kyw">
        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </div>
      </form>
        </div>
        <div class="container my-5 py-3 z-depth-1 rounded">


         
            <section class="dark-grey-text">

           
                <div class="table-responsive">

                    <table class="table product-table mb-0" >

                        
                  
                        <tbody >

                            <?php
                            viewcart(1);

                            ?>

                                <td colspan="6" class="text-right">
                                    <a class="son" href="index.php?act=bill" style="color: white;">
                                    <button type="button" class="" name="tieptucdathang">tiếp tục đặt hàng</button>
                                        <a href="index.php?act=delcart"></a> 
                                    </button></a>
                                </td>
                            </tr>
                            <!-- Fourth row -->

                        </tbody>
                        <!-- /.Table body -->

                    </table>

                </div>
                <!-- /.Shopping Cart table -->

            </section>
            <!--Section: Content-->


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
        
</body>

</html>
