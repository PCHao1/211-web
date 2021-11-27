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
<div class="col-sm-9 mt-3 overflow-scroll" id='content'>
		<!-- CONTENT -->
			<table class="table table-hover">
				<tr>
					<th style="width: 5%">ID</th>
					<th style="width: 20%">Sản phẩm</th>
					<th style="width: 10%">ID sản phẩm</th>
					<th style="width: 10%">Username</th>
					<th style="width: 30%">Nội dung</th>
					<th style="width: 7%">Star</th>
					<th>Action</th>
				</tr>
				<!-- List feedback -->
				<?php foreach ($this->lstfb as $feedback){ ?>
					
				<tr>
					<td><?php echo $feedback['feedbackid']; ?></td>
					<td><?php echo $feedback['productname']; ?></td>
					<td><?php echo $feedback['productid']; ?></td>
					<td><?php echo $feedback['username']; ?></td>
					<td><?php echo $feedback['comment']; ?></td>
					<td><?php echo $feedback['star']; ?></td>
					<td><div>
						<button class="btn btn-basic"data-bs-toggle="modal" data-bs-target="#myModal" onclick="feedbackDetail(<?php echo $feedback['feedbackid']; ?>)"> Chi tiết>></button>
					</div></td>
				</tr>
				<?php } ?>
				<!-- End List feedback -->
			</table>
		<!-- End content -->
		</div>
	</div>
</div>
</body>
<script src="/public/admin/js/onload.js"></script>
</html>
</body>
</html>