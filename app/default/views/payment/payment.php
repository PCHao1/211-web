<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./public/default/fontawesome5/css/fontawesome.css" rel="stylesheet">
    <link href="./public/default/fontawesome5/css/solid.css" rel="stylesheet">
</head>
<body>
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
</body>
</html>