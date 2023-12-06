<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container" style="width:85%;float:right">
<script src="./deletes.js"></script> 
  <div class="row">
    <div class="col-lg-12">
      <div class="main-box clearfix">
        <div class="table-responsive">
        <div class="">
        <!-- <a href="index.php?act=addsp"><input type="submit" name="themmoi" class="btn btn-primary" value="Thêm mới"></a>
                    <a href="index.php?act=listdm"><input type="reset" class="btn btn-primary" value="Nhập lại"></a>
                    <a href="index.php?act=listdm"><input type="button" class="btn btn-primary" value="Danh sách"></a> 
                </div> -->
          <table class="table user-list">
            <thead>
              <tr>
                <th><span>Id</span></th>
                <th><span>Tên tài khoản</span></th>
                <th class="text-center"><span>mật khẩu</span></th>
                <th><span>Email</span></th>
                <th><span>Địa chỉ</span></th>
                <th><span>Điện thoại</span></th>

              </tr>
            </thead>
            <?php
            foreach ($listtaikhoan as $taikhoan) {
              //dùng để show tên biến ra
              extract($taikhoan);
              $suatk = "index.php?act=suatk&id=" . $id;
              $xoatk = "index.php?act=xoatk&id=" . $id;
              
              echo '
              <tbody>
              <tr>
                <td>
                  '.$id.'
               
                </td>
                <td>
                  '.$user.'
                </td>
                <td class="text-center">
					<span class="label label-default">'.$pass.'</span>
					</td>
                <td>
                  <a href="#">'.$email.'</a>
                </td>
				<td>
                  <a href="#">'.$address.'</a>
                </td>
				<td>
                  <a href="#">'.$tel.'</a>
                </td>
				<td>
                  <a href="#">'.$role.'</a>
                </td>
                <td style="width: 20%;">

                  <a href="' . $suatk . '" class="table-link">
                    <span class="fa-stack">
                      <i class="fa fa-square fa-stack-2x"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                  <a href="' . $xoatk . '" class="table-link danger">
                    <span class="fa-stack">
                      <i class="fa fa-square fa-stack-2x"></i>
                      <i class="fa fa-trash-o fa-stack-1x fa-inverse" onclick="xoa()"></i>
                    </span>
                  </a>
                </td>
              </tr>


            </tbody>
              ';
            }?>
           
                        
            
            <!-- <tbody>
              <tr>
                <td>
                  <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                  <a href="#" class="user-link">Mila Kunis</a>
                  <span class="user-subhead">Admin</span>
                </td>
                <td>
                  2013/08/08
                </td>
                <td class="text-center">
                  <span class="label label-default">Inactive</span>
                </td>
                <td>
                  <a href="#">mila@kunis.com</a>
                </td>
                <td>
                  <a href="#">mila@kunis.com</a>
                </td>
                <td style="width: 20%;">

                  <a href="#" class="table-link">
                    <span class="fa-stack">
                      <i class="fa fa-square fa-stack-2x"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                  <a href="#" class="table-link danger">
                    <span class="fa-stack">
                      <i class="fa fa-square fa-stack-2x"></i>
                      <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </td>
              </tr>


            </tbody> -->
          </table>
        </div>

      </div>
      
    </div>
  </div>
</div>
