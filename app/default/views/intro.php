<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title><?php  echo $this->title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./public/default/css/style.css">
</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img src="./public/images/logo.png"style="width:40px;" alt="LOGO">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Trang chủ</a></li>
                    <li class="nav-item active" ><a class="nav-link" href="/intro">Giới thiệu</a></li>
                    <li class="nav-item" ><a class="nav-link" href="/products">Sản phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="/news">Tin tức</a></li>
                </ul>
            </div>
        </div>
    </nav>

Intro

<?php
    include "app/default/views/component/footer.php";
?>