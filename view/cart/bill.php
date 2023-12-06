<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="view/css/bill.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  td {
    padding: 10px 50px;

  }

  th {
    height: 35px;
    text-align: center;
  }

  .row button:hover {
    background-color: white;
    color: #8CC63F;
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
      <div class="search">
        <input type="" placeholder="Tìm Kiếm  ...">
        <button type="sybmit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </div>
    </div>
    <div class="tong">
      <div class="boxtrai ">
        <form action="index.php?act=billcomfirm" method="post">
          <div class="container">
            <div class="row three">
              <div class="boxtitle" style="padding:0 80px;color:#8CC63F;font-weight:bold;font-size:22px">
                Thông tin giỏ hàng
              </div>
              <div class="row formdanhsach cart">
                <table>

                  <?php
                  viewcart(0);
                  ?>
                </table>
              </div>
            </div>

            <br>
            <div class="row two">

              <div class="anh">
                <div class="container my-5 p-5 z-depth-1">


                  <!--Section: Content-->
                  <section class="dark-grey-text">

                    <!-- Section heading -->
                    <h2 class="text-center font-weight-bold mb-4 pb-2" style="color:#8CC63F">Phương thức thanh toán</h2>
                    <!-- Section description -->
                    <p class="text-center lead grey-text mx-auto mb-5" style="color:red">Để đảm bảo cho việc khách hàng từ chối nhận hàng (shop yêu cầu thanh toán trước khi nhận hàng). </p>

                    <!-- Grid row -->
                    <div class="row">

                      <!-- Grid column -->
                      <div class="col-lg-5 text-center text-lg-left">
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/screens-section.jpg" alt="Sample image">
                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-lg-7">

                        <!-- Grid row -->
                        <div class="row mb-3">

                          <!-- Grid column -->
                          <div class="col-1">
                            <i class="fas fa-share fa-lg indigo-text"></i>
                          </div>
                          <!-- Grid column -->

                          <!-- Grid column -->
                          <div class="col-xl-10 col-md-11 col-10">
                            
                            <h5 class="font-weight-bold mb-3" style="color: deeppink;"><input type="radio" name="pttt" value="1" checked>momo</h5>
                            <p class="grey-text">số điện thoại người nhận: 0384798433(người thụ hưởng: Lý Anh Tuấn)
                              <br>

                            </p>
                          </div>
                          <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row mb-3">

                          <!-- Grid column -->
                          <div class="col-1">
                            <i class="fas fa-share fa-lg indigo-text"></i>
                          </div>
                          <!-- Grid column -->

                          <!-- Grid column -->
                          <div class="col-xl-10 col-md-11 col-10">
                            
                            <h5 class="font-weight-bold mb-3" style="color:maroon"><input type="radio" name="pttt" value="2">Agribank </h5>
                            <p class="grey-text">số tài khoản: 0483434022725 (người thụ hưởng: Lý Anh Tuấn)</p>
                          </div>
                          <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!--Grid row-->
                        <div class="row">

                          <!-- Grid column -->
                          <div class="col-1">
                            <i class="fas fa-share fa-lg indigo-text"></i>
                          </div>
                          <!-- Grid column -->

                          <!-- Grid column -->
                          <div class="col-xl-10 col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3" style="color:red"><input type="radio" name="pttt" value="3">Teckcombank</h5>
                            <p class="grey-text mb-0" >số tài khoản: 42424582822 (người thụ hưởng: Lý Anh Tuấn)</p>
                          </div>
                          <!-- Grid column -->

                        </div>
                        <!--Grid row-->

                      </div>
                      <!--Grid column-->

                    </div>
                    <!-- Grid row -->

                  </section>
                  <!--Section: Content-->


                </div>

              </div>

            </div>


            <div class="billform">
              <table>
                <?php
                if (isset($_SESSION['user'])) {
              
                  $name = $_SESSION['user']['user'];
                  $address = $_SESSION['user']['address'];
                  $email = $_SESSION['user']['email'];
                  $tel = $_SESSION['user']['tel'];
                } else {
                  $name = "";
                  $address = "";
                  $email = "";
                  $tel = "";
                }
                ?>
                <div class="container z-depth-1 my-5 p-5">

                  <!-- Section -->
                  <section style="margin-top:-140px">

                    <h3 class="font-weight-normal text-center dark-grey-text my-4 pb-2" style="color:#8CC63F">Điền thông tin mua hàng</h3>

                    <!--First row-->
                    <div class="row d-flex justify-content-center">

                      <div class="col-md-6 col-lg-3 mb-4">

                        <!-- Material outline input -->
                        <div class="md-form md-outline form-lg">
                          <label for="form1">Người đặt hàng</label>
                          <input type="text" id="form1" name="name" value="<?= $name ?>" class="form-control form-control-lg">

                        </div>

                      </div>

                      

                      <div class="col-md-6 col-lg-3 mb-4">

                        <!-- Material outline input -->
                        <div class="md-form md-outline form-lg">
                          <label for="form2">Số điện thoại</label>
                          <input type="text" id="form2" name="tel" value="<?= $tel ?>" class="form-control form-control-lg">

                        </div>

                      </div>

                      <div class="col-md-6 col-lg-3 mb-4">

                        <!-- Material outline input -->
                        <div class="md-form md-outline form-lg">
                          <label for="form3">Địa chỉ</label>
                          <input type="text" id="form3" name="address" value="<?= $address ?>" class="form-control form-control-lg">

                        </div>

                      </div>

                      <div class="col-md-6 col-lg-3 mb-4">

                        <!-- Material outline input -->
                        <div class="md-form md-outline form-lg">
                          <label for="form4">Email</label>
                          <input type="text" id="form4" name="email" value="<?= $email ?>" class="form-control form-control-lg">

                        </div>

                      </div>
  


                      <div class="col-md-6 col-lg-3 mb-4">

<!-- Material outline input -->
<div class="md-form md-outline form-lg">
 
  
  <input type="hidden" id="form4" name="namesp" value=" <?php foreach ($_SESSION['mycart'] as $cart){
    echo $cart[1].';';
  }
  
  ?>" class="form-control form-control-lg">

</div>

</div>
                      <!-- <div class="col-md-6 col-lg-3 mb-4">
      
      <button class="btn btn-block btn-primary my-4">Hoàn thành</button>
      
    </div> -->

                    </div>
                    <!--First row-->

                  </section>
                  <!-- Section -->

                </div>

              </table>
            </div>

            <br>




            <div class="row" style="margin-top:-90px; margin-left:500px">
                
              <button type="submit" style="background-color: #8CC63F;color:white;padding:0 4px;" name="dongydathang" value="Đồng ý đặt hàng">Đồng ý đặt hàng

              </button>
            </div>
          </div>
        </form >
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
    </div>




</body>

</html>