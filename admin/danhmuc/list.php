
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="./deletes.js"></script>
<style>
  .rom {
    display: flex;
    justify-content: flex-start;
  }

  .rounded {
    width: 50%;
    margin-left: 30px;
    /* float: right; */
  }

  .mb-3 {
    width: 100%;
    margin-top: 20px;
  }


  input[type='submit'] {
    margin: 20px;
    background-color: red;
  }
  input[type='text'] {
    margin: 20px 0px;
    margin-left: 300px;
  }

  .select {
    display: flex;
  }
</style>
<div class="container" style="width:84%;float:right">
	<div class="row">
		<div class="col-lg-12">
			<div class="main-box clearfix">
				<div class="table-responsive">
				<div class="">
				<div class="rom">
            <a href="index.php?act=adddm"><input type="submit" name="themmoi" class="btn btn-primary" value="Thêm mới" style="background-color: blue;"></a>
            <form action="index.php?act=listsp" method="post" class="select">
              <select class="form-select mb-3" name="iddm" aria-label="Default select example">
              <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdm as $danhmuc) {
                  extract($danhmuc);
                  echo '<option value="' . $id . '">' . $name_dm . '</option>';
                }
                ?>
              </select>
              <input type="submit" name="listok" class="btn btn-primary" value="Tìm kiếm">
              <input autocomplete="off" type="text" class="form-control rounded" placeholder='Tìm kiếm ' style="min-width: 225px" name="kyw"/>
              <input type="submit" name="listok" class="btn btn-primary" value="Tìm kiếm">
            </form>
          </div>
					<table class="table user-list">
						<thead>
							<tr>
								<th><span>Tên loại</span></th>
								<th><span>Mã loại</span></th>
								<th class="text-center"><span>Điều khiển</span></th>


							</tr>
						</thead>
						<?php
						foreach ($listdm as $danhmuc) {
							extract($danhmuc);
							$update = "index.php?act=update&id=" . $id;
							$xoadm = "index.php?act=xoadm&id=" . $id;
							echo '
							<tbody>
						<tr>
							<td>
								
								<a href="#" class="user-link">'.$name_dm.'</a>
								
							</td>
							<td style="width: 20%;">
								'.$id.'
							</td>
							
							<td style="width: 15%;">
								
								<a href="'.$update	.'" class="table-link">
									<span class="fa-stack">
									&nbsp;<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
									</span>
								</a>
								<a href="'.$xoadm.'" class="table-link danger">
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