
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  .all {
    max-width: 100%;
    margin: 0 auto;
    padding: 0 auto;
    font-family: 'Poor Story', cursive;
    cursor: grab;
  }
  
  /*header*/
  .Hedear {
    display: flex;
    justify-content: space-around;
    background-color: floralwhite;
    margin-bottom: 20px;
  }
  
  /*logo*/
  .logo img {
    margin-left: 50px;
    width: 160px;
    height: 100px;
  }
  
  /*menu*/
  .menu {
  
    display: flex;
    justify-content: space-between;
  }
  
  .menu li {
    list-style: none;
  
    margin: 60px 30px;
  }
  
  .menu li a {
    padding: 10px;
    text-decoration: none;
    font-size: 17px;
    color: #666666D9;
  }
  
  .menu li:hover a:hover {
    background-color: #8CC63F;
    border-radius: 5px;
  }
  
  .menu li a:hover {
    color: #FFFFFF;
  }
  
  /*search*/
  .search {
    padding: 50px 20px;
  }
  
  .search input {
    border-radius: 20px;
    width: 230px;
    height: 35px;
    color: #8CC63F;
    background-color:floralwhite ;

  }
  
  .search button {
    height: 35px;
    width: 60px;
    border-radius: 20px;
  }
  
  .search button:hover {
    color: #FFFFFF;
    background-color: #8CC63F;
  
  }
  
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
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
      <div class="search">
        <input type="" placeholder="Tìm Kiếm  ...">
        <button type="sybmit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </div>
    </div>
    <div class="container pt-5 my-5 z-depth-1">
      <section class="p-md-3 mx-md-5">
        <div class="row d-flex justify-content-center">
          <div class="col-md-6 text-center pink-text">
            <h2 class="font-weight-bold pb-4" style="color: #8CC63F">Đặt hàng thành công!</h2>

            <i class="far fa-gem fa-6x mb-2"></i>
            <p class="grey-text pt-4">
              Cảm ơn đã tin tưởng shop và mua sản phẩm. bạn chờ trong ít phút để shop duyệt hoá đơn
            </p>
          </div>
        </div>
        <hr class="mx-5">
        <div class="row text-center">
          <div class="col-md-6 mb-5">
            <div class="mt-3">
              <h4 class="font-weight-bold mb-3" style="color: #8CC63F">Thông tin</h4>
              <p class="text-muted mb-0">
              <table>
                <tr>
                  <td style="font-weight: bold;">Người đặt hàng:</td>
                  <td><?= $bill['bill_name']; ?></td>
                </tr>

                <tr>
                  <td style="font-weight: bold;">Địa chỉ:</td>
                  <td><?= $bill['bill_address']; ?></td>
                </tr>

                <tr>
                  <td style="font-weight: bold;">Email:</td>
                  <td><?= $bill['bill_email']; ?></td>
                </tr>

                <tr>
                  <td style="font-weight: bold;">Điện thoại:</td>
                  <td><?= $bill['bill_tel']; ?></td>
                </tr>
              </table>
              </p>
            </div>
          </div>
          <?php
          if (isset($bill) && (is_array($bill))) {
            extract($bill);
          }
          ?>
          <div class="col-md-6 mb-5">
            <div class="mt-3">
              <h4 class="font-weight-bold mb-3" style="color: #8CC63F">Hoá đơn</h4>
              <p class="text-muted mb-lg-0">
              <div class="row boxcontent" style="text-align:center">
                <li>- Mã đơn hàng: DAM-<?= $bill['id']; ?></li>
                <li>- Ngày đặt hàng:<?= $bill['oderdate']; ?></li>
                <li>- Tổng đơn hàng:<?= $bill['total']; ?></li>
                <li>- Phương thức thanh toán:<?= $bill['bill_pttt']; ?></li>
              </div>
              </p>
            </div>
          </div>
        </div>

      </section>
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
