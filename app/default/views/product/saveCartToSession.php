<?php
// $_SESSION["cart"][index of product in cart] = [   //index bắt đầu từ 1
//     "product_id" => id của sản phẩm trong db,
//     "product_title" => tên sản phẩm,
//     "quantity" => số lượng,
//     "price" => giá 1 sản phẩm (đã trừ promotion nếu có)
// ]


// hàm kiểm tra sản phẩm này đã có trong giỏ hàng chưa
function isInCart($product_id){
    foreach($_SESSION["cart"] as $index => $product){
        if ($product["product_id"] == $product_id){
            return $index;
        }
    }
    return 0;
}

if(isset($GET["product"])){
    $product = $GET["product"];

    if( isset($_SESSION["cart"]) && isset($_SESSION["numOfProducts"])){
        $index = isInCart($product["product_id"]);
        if($index == 0){
            
        }else{
            $_SESSION["cart"][$index]["quantity"] +=1 ;
        }
    }else{

    }
}
?>