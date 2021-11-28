<section class="container my-2">
    <div class="row mt-5">
        <div class="col-lg-5 col-md-12 col-12">
            <img class="img-fluid w-100 pb-1" id="main-img" src="./public/images/products/<?php echo $this->product['picture'][0] ?>">
            
            
            <div class="d-flex flex-row">
                <?php
                    foreach ($this->product['picture'] as $pic) {
                ?>
                    <div class="mr-1 pe-auto">
                        <img class="small-img" src="./public/images/products/<?php echo $pic ?>" width="100%" height="100px" alt="">
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-12">
            <h5 id="product_title"><?php echo $this->product['title'] ;?></h5>
            <?php if($this->product['promotion'] == 0){
                echo '<h4 class="text-danger" id="product_price">'.$this->product['price']." đ" ."</h4>";
            }else{
                $price_of_promotion = $this->product['price'] - round($this->product['promotion'] / 100 * $this->product['price'], -3) ;
                echo 
                '<s class="text-secondary pr-3">'.'<small>'.$this->product['price']." đ".'</small>'.'</s>'.
                '<h4 class="text-danger" id="product_price">'.$price_of_promotion." đ" ."</h4>";
            } 
            ?>
            
            <div class="form-inline">
                <input class="form-control w-25 mr-5" type="number" value="1" id="quantity">
                <button class="btn btn-primary" 
                    onclick="addToCart(<?php echo $this->product['productid']?>)">
                    Thêm vào giỏ hàng
                </button>
            </div>
            
            <p class="mt-5"><?php echo $this->product['descri'] ;?></p>
        </div>
    </div>
    <h4>Đánh giá</h4>
    <span class="fa fa-star checked_rating"></span>
    <span class="fa fa-star checked_rating"></span>
    <span class="fa fa-star checked_rating"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <h4>Bình luận</h4>
</section>

<script>
    $(".small-img").each(function(index){
        console.log($(this).attr('src'));
        $(this).click(function(){
            $("#main-img").attr("src",$(this).attr('src'));
        });
    });

    function addToCart(productid){
        var data = [];
        data["product_id"] = productid;
        data["product_title"] = $('#product_title').text();
        data["quantity"] = $('#quantity').val();
        data["price"] = Number( $('#product_price').text().slice(0,-2) );
        
        $.post('/cart',{product:data,addProduct:true},function(data){
            alert("Đã thêm vào giỏ hàng");
        });
    }
</script>
