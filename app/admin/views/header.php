<?php 
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php  echo $this->title; ?></title>
	<link rel="stylesheet" type="text/css" href="/public/admin/css/admin.css">
</head>
<body>
<div class="x-left full-screen">
	<div id="left-page" class="y-top">
		<div style="height: 10%;background-color: blue">
			LOGO
		</div>
		<div class="y-top big-text light-text">
			<div>
				<a href="admin"><p>DASHBOARD</p></a>
			</div>
			<div>
				<a href="admin/orders"><p>Quản lý đơn hàng</p></a>
			</div>
			<div>
				<a href="/products"><p>Quản lý sản phẩm</p></a>
			</div>
			<div>
				<a href="/"><p>Quản lý thành viên</p></a>
			</div>
			<div>
				<a href="/"><p>Quản lý feedback</p></a>
			</div>
			<div>
				<a href="/"><p>Quản lý bài viết</p></a>
			</div>
			<div>
				<a href="/"><p>Quản lý tài nguyên</p></a>
			</div>
		</div>
	</div>
	<div id="right-page" class="y-top">
		<div style="height: 10%;background-color: var(--color2)" class="x-right x-y-center">
			<div style="margin-right:30%; "><h1><?php  echo $this->title; ?></h1></div>
			<div>
				Xin chào,<br>
				Hào
			</div>
			<img src="/public/admin/user-icon.png" alt="" width="50px">
		</div>
		<div>
			