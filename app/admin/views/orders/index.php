<?php 
	include(__DIR__ .'/../header.php');
?> 
		<div class="col-sm-9 mt-3" id='content'>
		<!-- CONTENT -->
			<table class="table table-hover">
				<tr>
					<th style="width: 5%">ID</th>
					<th style="width: 10%">Username</th>
					<th style="width: 15%">Giá trị</th>
					<th style="width: 15%">Trạng thái</th>
					<th>Action</th>
				</tr>
				<tr>
					<td>1</td>
					<td>hao</td>
					<td>1.200.000 đ</td>
					<td>Chờ nhận đơn</td>
					<td><div>
						<button class="btn btn-warning"> Xác nhận</button>
						<button class="btn btn-danger"> Hủy</button>
						<button class="btn btn-basic"data-bs-toggle="modal" data-bs-target="#myModal" onclick="orderDetail(1)"> Chi tiết>></button>
					</div></td>
				</tr>
				<tr>
					<td>1</td>
					<td>hao</td>
					<td>1.200.000 đ</td>
					<td class="text-success">Đang vận chuyển</td>
					<td><div>
						<button class="btn btn-warning"> Hoàn thành</button>
						<button class="btn btn-danger"> Hủy</button>
						<button class="btn btn-basic"data-bs-toggle="modal" data-bs-target="#myModal"> Chi tiết>></button>
					</div></td>
				</tr>
			</table>
		<!-- End content -->
		</div>
	</div>
</div>
</body>
<script src="/public/admin/js/onload.js"></script>
</html>