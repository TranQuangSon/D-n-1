<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- <form method="post" action=""> -->
	<div class="container" style="width:85%;float:right">
		<div class="row">
			<div class="col-lg-12">
				<div class="main-box clearfix">
					<div class="table-responsive">
						<table class="table user-list">
							<thead>
								<tr>
									<th><span>Mã danh mục</span></th>
									<th><span>Tên danh mục</span></th>
									<th><span>Số lượng</span></th>
									<th><span>Giá cao nhất</span></th>
									<th><span>Giá thấp nhất</span></th>
									<th><span>Giá trung bình</span></th>
								</tr>
								<?php
								foreach ($listthongke as $thongke) {
									extract($thongke);
									echo ' 
                             <tr>
                            <th>' . $madm . '</th>
                            <th>' . $tendm . '</th>
                            <th>' . $countsp . '</th>
                            <th>' . $maxprice . '</th>
                            <th>' . $minprice . '</th>
                            <th>' . $avgprice . '</th>
                             </tr>';
								}
								?>
						</table>
						</thead>
						<!-- <div class="btn btn-primary" style="margin-left: 20px;">
            <a href="index.php?act=bieudo"> <input type="button" value="Xem biểu đồ"></a> -->
						<a href="index.php?act=bieudo" style="margin-left: 20px;"><input type="submit" name="themmoi" class="btn btn-primary" value="Xem biểu đồ"></a>


					</div>
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
							<td style="width: 20%;">
								<a href="#" class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
									</span>
								</a>
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
						
							<td>
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
								<a href="#" class="user-link">Robert Downey Jr.</a>
								<span class="user-subhead">Admin</span>
							</td>
							<td>
								2013/12/31
							</td>
							<td class="text-center">
								<span class="label label-success">Active</span>
							</td>
							<td>
								<a href="#">spencer@tracy</a>
							</td>
							<td style="width: 20%;">
								<a href="#" class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
									</span>
								</a>
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

				</div>

			</div>
		</div>
	</div>
	</div>
</form>