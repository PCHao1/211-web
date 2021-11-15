<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <section class="login" style="top: 50%;position: absolute;left: 0;right:0;transform: translateY(-50%);">
        <div class="container">
            <form class="card p-5 m-5 mx-auto bg-light" id="form-register" style="width: 600px;" method="post">
                <div class="title text-center">
                    <h1>Đăng nhập</h1>
                </div>
                <div class="form-group">
                    <label for="username" style="font-weight: bold;">Địa chỉ username</label>
                    <span class="form-alert text-danger float-right"></span>
                    <input type="username" class="form-control" id="username" name="login[username]" placeholder="Tên đăng nhập" required>
                </div>
                <div class="form-group">
                    <label for="password" style="font-weight: bold;">Mật khẩu</label>
                    <span class="form-alert text-danger float-right"></span>
                    <input type="password" class="form-control" id="password" name="login[password]" placeholder="Password" required>
                </div>
                

                <div class="form-check" style="margin-top: 10px;">
                        <p class="text-danger"><b><?php echo $this->message;?></b></p>
                </div>

                <button type="submit" class="btn btn-warning mt-2" style="font-weight: bold;">Đăng nhập</button>
                <div class="form-forgot text-center mt-3">
                    <br>
                    <br>
                    <a href="/">Về trang chủ</a>
                </div>
            </form>
        </div>
    </section>
</body>
</html>