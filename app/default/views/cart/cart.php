<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./public/default/css/style.css">
    <link rel="stylesheet" href="./public/default/css/dao/sidebar.css">
    <script src="./public/default/js/jquery-3.6.0.js"></script>
</head>
<body>
<?php
    include "app/default/views/component/header.php";
?>
<div class="row">
<div class="col-2">
<?php
        include "app/default/views/component/usersidebar.php";
    ?>
</div>
<div class="col-9">
    <div class="row">
        <div class="col-md-8">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Giỏ hàng</b></h4>
                    </div>
                </div>
            </div>
            <?php
            foreach($this->items as &$item){
            echo("<div class='row border-top border-bottom'>
                <div class='row main align-items-center'>
                    <div class='col-2'><img class='img-fluid' src='https://i.imgur.com/1GrakTl.jpg'></div>
                    <div class='col-3'>
                        <div class='row text-muted'>".$item['name']."</div>
                        <div class='row'>".$item['name']."</div>
                    </div>
                    <div class='col-2'><input style='width:100%' type='number' value='3' ></div>
                    <div class='col-2'>".$item['price']."&#8363;</div>
                    <div class='col-3'><button class='btn btn-danger' onclick='removeItem(".$item['id'].")'>Xóa</button></div>
                </div>
            </div>");
            }
            ?>
           
        </div>
        <div class="col-md-4" style="background-color:#ffb9e1">
            <div>
                <h5><b>Summary</b></h5>
            </div>

            <div class="row">
                <div class="col">Số lượng sản phẩm <?php echo(count($this->items)) ?></div>
                <div class="col text-right">Thành tiền: <?php echo($this->totalPrice) ?> </div>
            </div>
            <form>
                <p>Vận chuyển</p> 
                <select class="form-control">
                    <option class="text-muted" value="<">Vận chuyển thông thường</option>
                    <option class="text-muted">Chuyển phát nhanh</option>
                </select>
                <p>Mã giảm giá</p> <input class="form-control" id="code" placeholder="Nhập mã giảm giá">
            </form>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">THÀNH TIỀN: <?php echo($this->totalPrice) ?></div>
                <div class="col text-right"></div>
            </div> 
            <div class="row d-flex justify-content-center">
                <button class="btn btn-secondary">THANH TOÁN</button>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    function removeItem($id){
        $.post('/cart',
        {
            remove: true,
            id: $id,
        },function(data){
            $('body').html(data);
        })
    }
    function render($data){

    }
</script>
</body>
</html>