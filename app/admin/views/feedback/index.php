<?php 
	include(__DIR__ .'/../header.php');
?> 
		<div class="col-sm-9 mt-3 overflow-scroll" id='content'>
		<!-- CONTENT -->
			<table class="table table-hover">
				<tr>
					<th style="width: 5%">ID</th>
					<th style="width: 20%">Sản phẩm</th>
					<th style="width: 10%">ID sản phẩm</th>
					<th style="width: 10%">Username</th>
					<th style="width: 30%">Nội dung</th>
					<th>Action</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Kem Chống nắng hiệu ba con sâu</td>
					<td>2</td>
					<td>hao</td>
					<td>Sản phẩm như cái củ chuối</td>
					<td><div>
						<button class="btn btn-warning"> Phản hồi</button>
						<button class="btn btn-basic"data-bs-toggle="modal" data-bs-target="#myModal" onclick="feedbackDetail(1)"> Chi tiết>></button>
					</div></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Kem Chống nắng hiệu ba con sâu</td>
					<td>2</td>
					<td>hao</td>
					<td>Sài rất ngon, chủ shop nên tăng giá lên</td>
					<td><div>
						<button class="btn btn-warning"> Phản hồi</button>
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