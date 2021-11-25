<?php 
	include(__DIR__ .'/../header.php');
?> 
		<div class="col-sm-9 mt-3 h-100 overflow-scroll" id='content'>
		<!-- CONTENT -->
			<button id='addProduct' class="btn btn-success"data-bs-toggle="modal" data-bs-target="#myModal">
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
						<th><Act>Action</th>
					</tr>
					<!-- Show list product -->
					<?php
						foreach ($this->lstProducts as $product) {
					 ?>
					<tr>
						<td><?php echo $product['productid']; ?></td>
						<td><?php echo $product['title']; ?></td>
						<td><?php echo $product['price']; ?> đ</td>
						<td>
							<?php 
							if ($product['quantity']==0)
								echo '<span class="text-danger">Hết hàng</span>';
							else echo '<span >Còn hàng</span>';
							?>
						</td>
						<td><?php echo $product['promotion']; ?></td>
						<td><?php echo $product['quantity']; ?></td>
						<td><div>
							<button class="btn btn-basic"data-bs-toggle="modal" data-bs-target="#myModal" onclick="productDetail(<?php echo $product['productid']; ?>)"> Chi tiết>></button>
						</div></td>
					</tr>
					<?php } ?>
					<!-- End show list user -->
				</table>
			<!-- End content -->
		</div>
	</div>
</div>
</body>
<script type="text/javascript">
	<?php
		foreach ($this->lstCatalogs as $row) {
		$catalog=$row["catalogname"];
		echo "addProductHTML2+=`<option value='".$catalog."'>".$catalog."</option>`;\n";
		}
		echo "addProductHTML2+=`</select></div>`;";
	 ?>
	 addProductHTML=addProductHTML1+addProductHTML2+addProductHTML3;
</script>
<script src="/public/admin/js/onload.js"></script>
</html>