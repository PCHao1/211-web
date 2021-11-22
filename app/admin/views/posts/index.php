<?php 
	include(__DIR__ .'/../header.php');
?> 
		<div class="col-sm-9 mt-3 overflow-scroll" id='content'>
		<!-- CONTENT -->
			<button id="addPost" class="btn btn-success"data-bs-toggle="modal" data-bs-target="#myModal">
				<b>+</b> Thêm bài viết
			</button>
			<table class="table table-hover">
				<tr>
					<th style="width: 5%">ID</th>
					<th style="width: 25%">Tiêu đề</th>
					<th style="width: 10%">Ngày đăng</th>
					<th style="width: 8%">Độ ưu tiên</th>
					<th style="width: 12%">Trạng thái</th>
					<th style="width: 10%">Người tạo bài</th>
					<th>Action</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Nên sài kem chống nắng thế nào cho hiệu quả?</td>
					<td>31/11/2021</td>
					<td>1</td>
					<td>Đang hiển thị</td>
					<td>Hào</td>
					<td><div>
						<button class="btn btn-warning"> Phản hồi</button>
						<button class="btn btn-basic"data-bs-toggle="modal" data-bs-target="#myModal" onclick="postDetail(1)"> Chi tiết>></button>
					</div></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Kem Chống nắng hiệu ba con sâu</td>
					<td>31/11/2021</td>
					<td>100</td>
					<td class="text-danger">Dừng hiển thị</td>
					<td>Hào</td>
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