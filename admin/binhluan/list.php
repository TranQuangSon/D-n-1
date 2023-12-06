<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container" style="width:84%;float:right">
<script src="./deletes.js"></script>
	<div class="row">
		<div class="col-lg-12">
			<div class="main-box clearfix">
				<div class="table-responsive">
				<div class="">
				<a href="index.php?act=adddm"><input type="submit" name="themmoi" class="btn btn-primary" value="Thêm mới"></a>
                    <!-- <a href="index.php?act=listdm"><input type="reset" class="btn btn-primary" value="Nhập lại"></a>
                    <a href="index.php?act=listdm"><input type="button" class="btn btn-primary" value="Danh sách"></a> -->
                </div>
					<table class="table user-list">
						<thead>
							<tr>
								<th><span>ID</span></th>
								<th><span>Nội dung bình luận</span></th>
								<th><span>ID User</span></th>
								<th><span>ID Pro</span></th>
								<th><span>Ngày bình luận</span></th>
								<th class="text-center"><span>Điều khiển</span></th>


							</tr>
						</thead>
						<?php
						foreach ($listbinhluan as $binhluan) {
							extract($binhluan);
							$suabl="index.php?act=suabl&id=".$id;
							$xoabl="index.php?act=xoabl&id=".$id;
							echo '
							<tbody>
						<tr>
							<td>
								
								<a href="#" class="user-link">'.$id.'</a>
								
							</td>
							<td>
							'.$content.'
						  </td>
						  <td>
							'.$iduser.'
						  </td>
						  <td>
							'.$idpro.'
						  </td>
						  
							<td style="width: 20%;">
								'.$commentdate.'
							</td>
							
							
							<td style="width: 15%;">
								
								<a href="'.$xoabl.'" class="table-link danger">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse" onclick="xoa()"></i>
									</span>
								</a>
							</td>
						</tr>
					</tbody>
							';
						}
						?>
						
					</table>
				</div>

			</div>
			
		</div>
	</div>
</div>