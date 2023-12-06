<?php
if (isset($_POST["guiemail"])) {
  $err = [];
  // $checkuser= "/^[A-Z,a-z0-9_]{6,32}$/";
  if (empty($_POST["email"])) {
      $err["email"] = "Không được để trống email";
  } else {
      $user = $_POST["email"];
  }}
?>
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
  <link rel="stylesheet" href="view/css/formlaymk.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<style>
  span{
    color:red;
  }
</style>
<body>
  <div class="container my-5 z-depth-1">


    <!--Section: Content-->
    <section class="dark-grey-text p-5">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-5 mb-4 mb-md-0">

          <div class="view">
            <img src="https://mdbootstrap.com/img/illustrations/undraw_Group_chat_unwm.svg" class="img-fluid"
              alt="smaple image">
          </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-7 mb-lg-0 mb-4">

          <!-- Form -->
          <form class="" action="index.php?act=quenmk" method="post">

            <!-- Section heading -->
            <h3 class="font-weight-bold my-3">Quên mật khẩu</h3>

            <p class="text-muted mb-4 pb-2">nhập email mà khách hàng đã đăng kí !</p>

            <div class="input-group">
              <input type="email" name="email" class="form-control" placeholder="Enter your email address"
                aria-label="Enter your email address" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button name="guiemail" value="Gửi" class="btn btn-md btn-primary rounded-right m-0 px-3 py-2 z-depth-0 waves-effect" type="submit"
                  id="button-addon2">Gửi</button>
              </div>
            </div>
            <span><?php if (!empty($err["email"])) echo $err["email"] ?></span><br>
            <small class="form-text black-text"><strong>* Leave your email addres to be notified first.</strong></small>
            <button class="btn btn-info my-4 btn-block" type="submit"><a style="text-decoration: none; color:black;"
                href="index.php?act=dangnhap">
                Quay lại đăng nhập</a></button>
          </form>
          <!-- Form -->
          <?php
                            if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            }
                        ?>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </section>
    <!--Section: Content-->


  </div>
</body>

</html>