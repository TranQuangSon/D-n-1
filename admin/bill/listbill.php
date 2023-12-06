<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container" style="width:85%;float:right">
<!-- <script src="./deletes.js"></script> -->
  <div class="row">
    <div class="col-lg-12">
      <div class="main-box clearfix">
        <div class="table-responsive">
        <!-- <div class="">
        <a href="index.php?act=addsp"><input type="submit" name="themmoi" class="btn btn-primary" value="Thêm mới"></a> -->
                    <!-- <a href="index.php?act=listdm"><input type="reset" class="btn btn-primary" value="Nhập lại"></a>
                    <a href="index.php?act=listdm"><input type="button" class="btn btn-primary" value="Danh sách"></a> -->
                </div>
          <table class="table user-list">
            <thead>
              <tr>
                <th><span></span></th>
                <th><span>Mã đơn hàng </span></th>
                <th><span>Khách hàng</span></th>
                <th class="text-center"><span>Số lượng hàng</span></th>
                <th><span>Sản phẩm mua</span></th>
                <th><span>Giá trị đơn hàng</span></th>
                <th><span>Tình trạng đơn hàng</span></th>
                <th><span>Ngày đặt hàng</span></th>
                <th><span>Thao tác</span></th>
                
              </tr>
            </thead>
            <?php
            foreach ($listbill as $bill) {
              //dùng để show tên biến ra
              extract($bill);
              $suabill = "index.php?act=suabill&id=" . $id;
              // $xoabill = "index.php?act=xoabill&id=" . $id;
              $kh=$bill["bill_name"].' 
              <br> '.$bill["bill_email"].'
              <br> '.$bill["bill_address"].'
              <br> '.$bill["bill_tel"];
              $coutsp=loadall_cart_cout($bill["id"]);
              $ttdh=get_ttdh($bill["bill_status"]);
              echo '
              <tbody>
              <tr>
              <td><input type="checkbox" name="" id=""></td>
                <td>
                DAM-'.$bill['id'].'
               
                </td>
                <td>
                  '.$kh.'
                </td>
                <td class="text-center">
                  <span class="label label-default">'.$coutsp.'</span>
                </td>
                <td class="text-center">
                <span class="label label-default">'.$bill['namesp'].'</span>
              </td>
                <td>
                  <a href="#">'.$bill["total"].'</a>
                </td>
                <td>
                  <a href="#">'.$ttdh.'</a>
                </td>
                <td>
                  <a href="#">'.$bill["oderdate"].'</a>
                </td>
                <td style="width: 20%;">

                  <a href="' . $suabill . '" class="table-link">
                    <span class="fa-stack">
                      <i class="fa fa-square fa-stack-2x"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                
                </td>
              </tr>


            </tbody>
              ';
            }?>
           
                        
            
            
          </table>
        </div>

      </div>
      
    </div>
  </div>
</div>