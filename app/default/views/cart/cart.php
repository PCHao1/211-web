<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./public/default/css/dao/cart.css" rel="stylesheet">
    <style>
        body {background-color: white;}

    </style>
</head>
<body style="backgroundcolor:white;">
<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
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
                    <div class='col-4'>
                        <div class='row text-muted'>".$item['name']."</div>
                        <div class='row'>".$item['name']."</div>
                    </div>
                    <div class='col-2'> <a href='#'>-</a><a href='#' class='border'>".$item['quantity']."</a><a href='#'>+</a> </div>
                    <div class='col-auto'>".$item['price']."&#8363;</div>
                    <div class='col'><span class='close'>&#10005;</span></div>
                </div>
            </div>");
            }
            ?>
            <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Summary</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">Số lượng sản phẩm <?php echo(count($this->items)) ?></div>
                <div class="col text-right">Thành tiền: <?php echo($this->totalPrice) ?> </div>
            </div>
            <form>
                <p>Vận chuyển</p> 
                <select class="form-control">
                    <option class="text-muted">Vận chuyển thông thường</option>
                    <option class="text-muted">Chuyển phát nhanh</option>
                </select>
                <p>Mã giảm giá</p> <input class="form-control" id="code" placeholder="Nhập mã giảm giá">
            </form>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">THÀNH TIỀN</div>
                <div class="col text-right"></div>
            </div> <button class="btn">THANH TOÁN</button>
        </div>
    </div>
</div>
<script>
    
</script>
</body>
</html>