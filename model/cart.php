<?php
    function viewcart($del){//16.4 tiến hành đặt hàng
        global $img_path;
        $tong=0;
        $i=0;
        if($del==1){
            $xoasp_th='<th></th>';
            
            $xoasp_td2='<td></td>';
        }else{
            $xoasp_th='';
            
            $xoasp_td2='';
        }
        echo '<thead class="mdb-color lighten-5" style="background-color:floralwhite;">
                <tr>
                    <th></th>
                    <th class="font-weight-bold">
                        <strong>Product</strong>
                    </th>
                    <th class="font-weight-bold">
                        <strong>Price</strong>
                    </th>
                    <th class="font-weight-bold">
                        <strong>Số lượng</strong>
                    </th>
                    <th class="font-weight-bold">
                        <strong >Thành tiền</strong>
                    </th>
                    <th>
                    '.$xoasp_th.'
                    </th>
                </tr>
            </thead>';
        foreach ($_SESSION['mycart'] as $cart){
            $hinh=$img_path.$cart[2];
            $ttien=$cart[3]*$cart[4];
            $tong+=$ttien;
            if($del==1){
                
                $xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'"><button type="button" style="background-color:red"value="X" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Remove item">X
                                    </button></a></td>';
                
            }else{
                
                $xoasp_td='';
                
            }
            echo '
                <tr> 
                    <td><img src="'.$hinh.'" alt="" height="80px"></td>
                    <td>'.$cart[1].'</td>
                    <td>'.$cart[3].'</td>
                    <td>'.$cart[4].'</td>
                    <td >'.$ttien.'</td>
                    '.$xoasp_td.'
                </tr>';
            $i+=1;
        }
        echo ' <tr>
                <td colspan="4">Tổng đơn hàng</td>
                
                <td style="color:red;font-weight:bold">'.$tong.'</td>
                '.$xoasp_td2.'
            </tr>';
    }

    

    function tongdonhang(){//16.5 tạo đơn hàng
        
        $tong=0; 
        foreach ($_SESSION['mycart'] as $cart){
            $ttien=$cart[3]*$cart[4];
            $tong+=$ttien; 
        }
        return $tong;
    }

    // function bill_chi_tiet($listbill){//16.4 tiến hành đặt hàng
    //     global $img_path;
    //     $tong=0;
    //     $i=0;
        
    //     echo '<tr>
    //             <th>Hình</th>
    //             <th>Sản phẩm</th>
    //             <th>Đơn giá</th>
    //             <th>Số lượng</th>
    //             <th>Thành tiền</th>
                
    //         </tr>';
    //     foreach ($listbill as $cart){
    //         $hinh=$img_path.$cart['img'];
            
    //         $tong+=$cart['thanhtien'];
            
    //         echo '
    //             <tr> 
    //                 <td><img src="'.$hinh.'" alt="" height="80px"></td>
    //                 <td>'.$cart['name'].'</td>
    //                 <td>'.$cart['price'].'</td>
    //                 <td>'.$cart['soluong'].'</td>
    //                 <td>'.$cart['thanhtien'].'</td>
    //             </tr>';
    //         $i+=1;
    //     }
        
    //     echo ' <tr>
    //             <td colspan="4">Tổng đơn hàng</td>
                
    //             <td>'.$tong.'</td>
                
    //         </tr>';
    // }

    function insert_bill( $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang,$namesp){ //16.5
        $sql="INSERT INTO bill( bill_name, bill_email, bill_address, bill_tel, bill_pttt, oderdate, total,namesp) VALUES('$name', '$email', '$address', '$tel', '$pttt', '$ngaydathang', '$tongdonhang','$namesp')";
        //Dùng để thực thi CSDL
        return pdo_execute_return_lastInsertId($sql);
    }

    function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $id_bill){ //16.5
        $sql="INSERT INTO cart(id_user, id_pro, img, name, price, amount, intomoney, id_bill) VALUES('$iduser', '$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$id_bill')";
        //Dùng để thực thi CSDL
        return pdo_execute($sql);
    }

    function loadone_bill($id) { //Load 1 danh mục 16.5
        $sql= "SELECT * FROM bill WHERE id=".$id;
        $bill = pdo_query_one($sql);
        return $bill;
    }

    function loadall_cart($id_bill) { //Load nhiều sản phẩm 16.5
        $sql= "SELECT * FROM cart WHERE id_bill=".$id_bill;
        $bill=pdo_query($sql);
        return $bill;
    }

    function loadall_cart_name($id_bill) { //Load nhiều sản phẩm 16.5
        $sql= "SELECT * FROM cart WHERE id_bill=".$id_bill;
        $bill=pdo_query($sql);
        return sizeof($bill);
    }

    function loadall_cart_cout($id_bill) { //Load nhiều sản phẩm 16.6
        $sql= "SELECT * FROM cart WHERE id_bill=".$id_bill;
        $bill=pdo_query($sql);
        return sizeof($bill);
    }

    function loadall_bill($kyw="", $iduser=0){ //Load nhiều sản phẩm 16.6 đơn hàng của tôi
        $sql= "SELECT * FROM bill WHERE 1";
        if($iduser>0) $sql.=" AND iduser=".$iduser;
        if($kyw!="") $sql.=" AND id LIKE'%".$kyw."%'";
        $sql.=" order by id desc";
        $listbill=pdo_query($sql);
        return $listbill;
    }
    function delete_bill($id)
{
    $sql = "DELETE FROM bill where id=" . $id;
    pdo_query($sql);
}
function update_bill($id, $bill_name, $bill_address, $bill_tel, $bill_email, $bill_pttt, $bill_status)
{
    $sql ="UPDATE bill SET bill_name='" . $bill_name . "',bill_address='" . $bill_address . "',bill_tel='" . $bill_tel. "', bill_email='" . $bill_email. "', bill_pttt='" . $bill_pttt . "', bill_status='".$bill_status."' WHERE id=" . $id;
    pdo_execute($sql);
}

    function get_ttdh($n){ //16.6 tạo đơn hàng
        switch ($n) {
            case '0':
                $tt="Đơn hàng mới";
                break;
            case '1':
                $tt="Đang xử lý";
                break;
            case '2':
                $tt="Đang giao hàng";
                break;
            case '3':
                $tt="Hoàn tất";
                break;
            default:
                $tt="Đơn hàng mới";
                break;
        }
        return $tt;
    }

    function loadall_thongke(){ //17.1 Thống kê danh mục
        $sql= "SELECT category.id as madm, category.name_dm as tendm, count(product.id) as countsp, min(product.price) as minprice, max(product.price) as maxprice, avg(product.price) as avgprice";
        $sql.=" FROM product left join category on category.id=product.iddm";
        $sql.=" group by category.id order by category.id desc";
        $listtk=pdo_query($sql);
        return $listtk;
    }
