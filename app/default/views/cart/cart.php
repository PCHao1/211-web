<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./public/default/css/style.css">
    <link rel="stylesheet" href="./public/default/css/dao/sidebar.css">
   
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
                        <div class='row text-muted'>".$item['title']."</div>
                        <div class='row'>".$item['title']."</div>
                    </div>
                    <div class='col-2'><input style='width:100%' id='quantity-".$item['productid']."' type='number' value='".$item['quantity']."' onchange='updateItem(".$item['productid'].")'></div>
                    <div class='col-2'>".$item['price']."&#8363;</div>
                    <div class='col-3'><button class='btn btn-danger' onclick='removeItem(".$item['productid'].")'>Xóa</button></div>
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
                <div class="col text-right">Thành tiền: <span id="total_item"><?php echo($this->totalPrice) ?></span> </div>
            </div>
            <form>
                <p>Vận chuyển</p> 
                <select class="form-control" id="shipfee">
                    <option class="text-muted" value="<?php echo($this->priceOptions["normal"]); ?>">Vận chuyển thông thường - <?php echo($this->priceOptions["normal"]); ?>&#8363;</option>
                    <option class="text-muted" value="<?php echo($this->priceOptions["fast"]); ?>">Chuyển phát nhanh - <?php echo($this->priceOptions["fast"]); ?>&#8363;</option>
                </select>
                <p>Địa chỉ</p> <input class="form-control" id="delivery_address" placeholder="Nhập địa chỉ giao hàng">
            </form>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
             
            </div> 
            <div class="row d-flex justify-content-center">
                <button class="btn btn-secondary" onclick="onOrder()">THANH TOÁN</button>
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
            if(data == "Xóa thành công"){
                alert(data);
                setTimeout(()=>{
                    window.location.reload();
                },1000);
            }else{
                alert(data)
            }
            
        })
    }

    function updateItem(id){
        const quantity = $(`#quantity-${id}`).val();
        if(quantity == 0){
            alert("Vui lòng nhập số khác 0");
        }else{
            $.post('/cart',
            {
                updateQuantity: true,
                id: id,
                quantity: quantity,
            },function(data){
                if(data != "Cập nhật thất bại"){      
                    $("#total_item").text(data); 
                }else{
                    alert(data)
                }
            })
        }
        
    }

    function onOrder(){
        const address = $("#delivery_address").val().trim();
        const shipfee = $("#shipfee").val();
        if(address == ""){
            alert("Vui lòng nhập địa chỉ");
        }else{
            if(window.confirm("Bạn có chắc mình muốn đặt hàng?")){
                $.post('/cart',
            {
                makeOrder: true,
                address: address,
                shipfee: shipfee,
            },function(data){
                alert(data);
                setTimeout(()=>{
                    window.location.reload();
                },1000);
            })
            }
        }
    }

</script>
    <script src="./public/default/js/jquery-3.6.0.js"></script>
</body>
</html>