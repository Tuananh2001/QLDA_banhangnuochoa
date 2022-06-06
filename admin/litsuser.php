<?php include("config/config.php") ?>
<div class="home" style = "margin-bottom: 23px;font-size: 24px; color: #000;">Danh sách user </div>
    <div class="borderhome" style = "border: 1px solid;margin-bottom: 46px;"></div>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=adduser" style = "width: 20%"><i class="fa fa-plus"></i> Add New User</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th>Mã KH</th>
						<th>Name</th>
						<th>Số điện thoại</th>
                        <th>Ngày sinh</th>
						<th>Giới tính</th>
						<th>Địa chỉ</th>
						<th>Email</th>
						
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$qry = $conn->query("SELECT * FROM khachhang1 ORDER BY makh ASC");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
                        <td><b><?php echo $row['makh'] ?></b></td>
						<td><b><?php echo ($row['tenkh']) ?></b></td>
						<td><b><?php echo $row['sdt'] ?></b></td>
						<td><b><?php echo $row['ngaysinh'] ?></b></td>
						<td><b><?php echo $row['gioitinh'] ?></b></td>
						<td><b><?php echo $row['diachi'] ?></b></td>
						<td><b><?php echo $row['Email'] ?></b></td>
						
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" >
		                      <a class="dropdown-item view_user" href="./index.php?page=viewuser&makh=<?php echo $row['makh'] ?>">View</a>
		                      <div class="dropdown-divider"></div>
							  <form action="./index.php?page=suauser" method = "POST">
								<input type="hidden" name="edit_makh" value = "<?php echo $row['makh'] ?>">
								<button type = "submit" name = "edit_data_btn" class="btn btn-primary btn-flat">
								<i class="fas fa-edit"></i>
							</button>
							</form>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item delete_user" href="./index.php?page=xoauser&makh=<?php echo $row['makh'] ?>">Delete</a>
		                    </div>
						</td>
					</tr>	
                    <?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

