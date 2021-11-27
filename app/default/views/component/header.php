<?php 
	
?>
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
                    <li class="nav-item"><a class="nav-link" href="/intro">Giới thiệu</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="/products">Sản phẩm</a></li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/products" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Sản phẩm</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="/products?catalog=Kẻ mày" class="dropdown-item">Kẻ mày</a>
                            <a href="/products?catalog=Kem chống nắng" class="dropdown-item">Kem chống nắng</a>
                            <a href="/products?catalog=Kem dưỡng ẩm" class="dropdown-item">Kem dưỡng ẩm</a>
                            <a href="/products?catalog=Kem lót" class="dropdown-item">Kem lót</a>
                            <a href="/products?catalog=Kem nền" class="dropdown-item">Kem nền</a>
                            <a href="/products?catalog=Kem trang điểm" class="dropdown-item">Kem trang điểm</a>
                            <a href="/products?catalog=Mascara" class="dropdown-item">Mascara</a>
                            <a href="/products?catalog=Nước tẩy trang" class="dropdown-item">Nước tẩy trang</a>
                            <a href="/products?catalog=Phấn má" class="dropdown-item">Phấn má</a>
                            <a href="/products?catalog=Phấn phủ" class="dropdown-item">Phấn phủ</a>
                            <a href="/products?catalog=Son môi" class="dropdown-item">Son môi</a>
                            <a href="/products?catalog=Sữa rửa mặt" class="dropdown-item">Sữa rửa mặt</a>
                            <a href="/products?catalog=Tẩy da chết" class="dropdown-item">Tẩy da chết</a>
                            <a href="/products?catalog=Toner" class="dropdown-item">Toner</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/news">Tin tức</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        // $('.dropdown-item').click(function(e){
        //     e.preventDefault();
        //     console.log($(this).text());
        //     $.ajax({
        //         url: './products?catalog='+$(this).text(),
        //         type: "GET",
        //         // success: function (data){
        //         //     console.log(data);
        //         // }
        //     });
        // });
        // function chooseCatalog(catalog){
        //     $.get('./products?catalog='+catalog,);
        // }
    </script>
