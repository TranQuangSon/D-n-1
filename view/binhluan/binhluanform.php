<?php
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
session_start();
// $iduser=$_SESSION['user']['id'];
$dsbl = loadall_binhluan($idpro);
?>
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
      border-radius: 10px;
      padding: 10px 20px;
      width: 230px;
      height: 35px;
      color: #8CC63F;
      background-color: floralwhite;

    }

    .search button {
      height: 35px;
      width: 60px;
      border-radius: 10px;
      color: #FFFFFF;
      background-color: #8CC63F;
    }

    .search button:hover {
      color: #FFFFFF;
      background-color: #8CC63F;
    }

    textarea {
      font-size: 1rem;
      letter-spacing: 1px;
      padding: 10px;
      max-width: 100%;
      line-height: 1.5;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-shadow: 1px 1px 1px #999;
    }

    .post {
      background-color: white;
    color: #8CC63F;
    padding: 5px;
      /* background-color: #8CC63F;
      border: 0; */
      border-radius: 10px;
      padding: 10px;
    }
    .post:hover{
      color: #FFFFFF;
    background-color: #8CC63F; 
    }
    .binhluan {
      display: flex;
      justify-content: center;
      margin: 8px;
    }

    .cmt {
      overflow: auto;
      margin: 20px 10px;
      padding: 10px;
      border-radius: 10px;
      border: 1px solid #ccc;
      width: 600px;
      height: 200px;
      box-shadow: 1px 1px 1px #999;
    
    }
    
    .guibinhluan{
      margin: 300px 10px 0 0  ;
    }
    p{
      word-wrap: break-word;
    }
   
  </style>
</head>

<body>
  <div class="binhluan">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group shadow-textarea" style="margin-top:20px">
        <input type="hidden" name="idpro" value="<?= $idpro ?>">
        <textarea class="" rows="7" cols="80" placeholder="comment here..." name="noidung"></textarea> <br> 
        <input class="post" type="submit" value="Gửi bình luận" name="guibinhluan">
      </div>
    </form>
    <div class="cmt">
     

        <?php
        foreach ($dsbl as $bl) {
          extract($bl);

          echo '<p>'.$bl['content'].'</p>';
          echo '<p>'.$bl['commentdate'].'</p> <hr>'; 
          
        }
        ?>
      
      
    </div>
  </div>
  <?php
  if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
    $noidung = $_POST['noidung'];
    $idpro = $_POST['idpro'];
    if (isset($_SESSION['user']['id']) && ($_SESSION['user']['id'] > 0)) {
      $iduser = $_SESSION['user']['id'];
    } else {
      $iduser = 0;
    }
    // $iduser = $_SESSION['user']['id'];
    $ngaybinhluan = date('h:i:sa d/m/Y');
    insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
    header("Location: " . $_SERVER['HTTP_REFERER']);
  }

  ?>

</body>

</html>