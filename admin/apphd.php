<?php include("config/config.php") ?>
<div class="home" style = "margin-bottom: 23px;font-size: 24px; color: #000;">Chi Tiết Đơn Hàng </div>
    <div class="borderhome" style = "border: 1px solid;margin-bottom: 46px;"></div>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th>Số thứ Tự</th>
						<th>Mã Hóa Đơn</th>
						<th> Tên Mã Loại</th>
            <th>Mã Sản Phẩm</th>
						<th>Ngày Hóa Đơn</th>
						<th>Tổng Tiền</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$qry = $conn->query("SELECT * FROM CtHoadon");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
            <td><b><?php echo $row['id'] ?></b></td>
						<td><b><?php echo ($row['mahd']) ?></b></td>
						<td><b><?php echo $row['maloai'] ?></b></td>
						<td><b><?php echo $row['masp'] ?></b></td>
						<td><b><?php echo $row['ngay'] ?></b></td>
						<td><b><?php echo $row['gia'] ?></b></td>
					</tr>	
           <?php endwhile; ?>
          </tr>
				</tbody>
			</table>
		</div>
	</div>
</div>


   