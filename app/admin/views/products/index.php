<?php 
	include(__DIR__ .'/../header.php');
?> 
		<div class="col-sm-9 mt-3 overflow-scroll" id='content'>
		<!-- CONTENT -->
			<button class="btn btn-success"data-bs-toggle="modal" data-bs-target="#myModal">
				<b>+</b> Thêm sản phẩm
			</button>
			<br>
			<table class="table table-hover">
				<tr>
					<th style="width: 5%">ID</th>
					<th style="width: 30%">Tên sản phẩm</th>
					<th style="width: 10%">Giá</th>
					<th style="width: 10%">Trạng thái</th>
					<th style="width: 12%">Khuyến mãi</th>
					<th style="width: 10%">Số lượng</th>
					<th><Act></Act>ion</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Kem dưỡng da</td>
					<td>200.000 đ</td>
					<td>Còn hàng</td>
					<td>0</td>
					<td>50</td>
					<td><div>
						<button class="btn btn-basic"data-bs-toggle="modal" data-bs-target="#myModal"> Chi tiết>></button>
					</div></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Kem Chống nắng hiệu ba con sâu</td>
					<td>200.000 đ</td>
					<td class="text-danger">Hết hàng</td>
					<td>10%</td>
					<td>0</td>
					<td><div>
						<button class="btn btn-basic"data-bs-toggle="modal" data-bs-target="#myModal"> Chi tiết>></button>
					</div></td>
				</tr>
			</table>
		<!-- End content -->
		</div>
	</div>
</div>
</body>
<script>
</script>
</html>