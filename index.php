
<?php
    session_start();
    include 'model/pdo.php';
    include 'model/danhmuc.php';
    include 'model/sanpham.php';
    include 'model/taikhoan.php';
    include 'model/cart.php';
  
    include 'global.php';
    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
    $spnew = load_sanpham_home();
    $dsdm = load_danhmuc();
    $top10= load_sanpham_top10();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        
        case 'sanpham':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                $iddm=$_GET['iddm'];
                
                
            }else{
                $iddm=0;
            }
            $dssp=loadall_sanpham($kyw,$iddm);//13.2 tìm kiếm
            $tendm=load_ten_dm($iddm);
            include 'view/sanpham.php';
            break;
        case 'sanphamct':
            
            if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                $id=$_GET['idsp'];
                $onesp=load_1st_sanpham($id);
                extract($onesp);
                $sp_cungloai=load_sanpham_cungloai($id,$iddm);
                include "view/sanphamct.php";
            }else{
                include "view/cuahang.php";
            }
            
            break;
            case 'dangki':
                if (isset($_POST['dangki']) && ($_POST['dangki'])) {
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    insert_taikhoan($email, $user, $pass, $address, $tel);
                    $thongbao = "Đã đăng kí thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng!";
                }
                include 'view/dangki.php';
                break;
                case 'dangnhap':
                    if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $checkuser = checkuser($user, $pass);
                        if (is_array($checkuser)) {
                            $_SESSION['user'] = $checkuser;
                            // $thongbao = "Bạn đã đăng nhập thành công!";
                            header('Location: index.php');
                        } else {
                            $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại!";
                        }
                    }
                    include "view/dangnhap.php";
                    break;
        case 'edit_taikhoan':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $email=$_POST['email'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $address=$_POST['address'];
                $tel=$_POST['tel'];
                $id=$_POST['id'];

                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user']=checkuser($user, $pass);
                header('Location: index.php?act=edit_taikhoan'); 
                $thongbao = "Đã cập nhật thành công!"; 
            }
            include "view/edit_taikhoan.php";
            break;if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                $email=$_POST['email'];

                $checkemail=checkemail($email);
                if(is_array($checkemail)){
                    $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
                }else{
                    $thongbao="Email này không tồn tại!";
                }   
            }
            include 'view/edit_taikhoan.php';
            break;
        
        case 'quenmk':
            if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                $email=$_POST['email'];

                $checkemail=checkemail($email);
                if(is_array($checkemail)){
                    $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
                }else{
                    $thongbao="Email này không tồn tại!";
                }   
            }
            include 'view/quenmk.php';
            break;
        case 'dangxuat':
            session_unset();
            header('Location: index.php');
            
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            include 'view/gioithieu.php';
            break;
            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=1;
                    $ttien=$soluong + $price;
                    $spadd=[$id, $name, $img, $price, $soluong, $ttien];
                    array_push($_SESSION['mycart'], $spadd);
                    
                }
                include "view/cart/viewcart.php";
                break;
            case 'delcart': //16.3 Xóa sản phẩm
                if(isset($_GET['idcart'])){
                    array_splice($_SESSION['mycart'], $_GET['idcart'],1);
                }else{
                    $_SESSION['mycart']=[];
                }
                // include "view/cart/viewcart.php";
                header('Location: index.php?act=viewcart');
                break;
        case 'viewcart':
            include 'view/cart/viewcart.php';
            break; 
        case 'bill':
            if(isset($_SESSION['user'])&&$_SESSION['user']>0){
                include 'view/cart/bill.php';
            }else{
              
                include "view/dangnhap.php";
            }
            
            break; 
        case 'viewcart':
            include 'view/cart/viewcart.php';
            break; 
            case 'billcomfirm'://tạo bill trước 16.5 tạo đơn hàng
                if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                    // if(isset($_SESSION['user'])) $iduser=$_SESSION['user']['id'];
                    // else  $id=0;
                    $name=$_POST['name'];
                    $namesp=$_POST['namesp'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $pttt=$_POST['pttt'];
                    $ngaydathang=date('h:i:sa d/m/Y');
                    $tongdonhang=tongdonhang();
                    $idbill= insert_bill( $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang,$namesp);
                    //insert into cart: lấy dữ liệu từ session['mycart'] & $idbill

                    foreach ($_SESSION['mycart'] as $cart) {
                        insert_cart($_SESSION['user']['id'],$cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5],$idbill);
                    }
                    
                    //xóa session cart
                    // $_SESSION['cart']=[]; 
                }
                $bill=loadone_bill($idbill);
                $billct=loadall_cart($idbill);
                include "view/cart/billcomfirm.php";
                break;
            // case 'mybill':
            //     $list_bill=loadall_bill($_SESSION['user']['id']);
            //     include "view/cart/mybill.php";
            //     break;

        case 'gioithieu':
            include 'view/gioithieu.php';
            break;
        case 'lienhe':
            include 'view/lienhe.php';
            break;
        case 'cuahang':
            include 'view/cuahang.php';
            break;
        case 'danhbanhanong':
            include 'view/danhbanhanong.php';
            break;
        default:
            include 'view/trangchu.php';
            break;
    }
} else {
    include 'view/trangchu.php';
}
 


?>