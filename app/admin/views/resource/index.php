<?php 
	include(__DIR__ .'/../header.php');
?> 
		<div class="col-sm-9 my-3 h-100 overflow-scroll" id='content'>
		<!-- CONTENT -->
			<table class="table table-hover mb-5">
				<tr>
					<th style="width: 5%">ID</th>
					<th style="width: 25%">Đường dẫn</th>
					<th style="width: 10%">Loại</th>
					<th style="width: 15%">Miêu tả</th>
					<th style="width: 25%">Lần sửa đổi gần nhất</th>
					<th>Action</th>
				</tr>
				<!-- Show list file -->
				<?php foreach ($this->lstFiles as $key => $file) {
					?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $file["link"]; ?></td>
					<td><?php echo $file["type"]; ?></td>
					<td><?php echo $file["descri"]; ?></td>
					<td><?php echo $file["time"]; ?></td>
					<td><div>
						<button class="btn btn-basic"data-bs-toggle="modal" data-bs-target="#myModal"> Chi tiết>></button>
					</div></td>
				</tr>
				<?php } ?>
				<!-- End show list -->
			</table>
			<br>
		<!-- End content -->
		</div>
	</div>
</div>
</body>
<script>
</script>
</html>