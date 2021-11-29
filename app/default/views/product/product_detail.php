<?php
    include "app/default/views/component/header.php";
?>

<section class="container mybody">
    <div class="row mt-2">
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
            <h5><?php echo $this->product['title'] ;?></h5>
            <?php if($this->product['promotion'] == 0){
                $price = $this->product['price'];
                echo '<h4 class="text-danger" >'.number_format($price)." đ" ."</h4>";
            }else{
                $price = $this->product['price'] - round($this->product['promotion'] / 100 * $this->product['price'], -3) ;
                echo 
                '<s class="text-secondary pr-3">'.'<small>'.number_format($this->product['price'])." đ".'</small>'.'</s>'.
                '<h4 class="text-danger" >'.number_format($price)." đ" ."</h4>";
            } 
            ?>
            
            <div class="form-inline">
                <input class="form-control w-25 mr-5" type="number" value="1" id="quantity">
                <button class="btn btn-primary" 
                    onclick="addToCart(<?php echo $this->product['productid']?>,'<?php echo $this->product['title'];?>',<?php echo $price;?>,<?php echo $this->info ?>)">
                    Thêm vào giỏ hàng
                </button>
            </div>
            
            <p class="mt-5"><?php echo $this->product['descri'] ;?></p>
        </div>
    </div>
    <h4 class="mt-5 ml-3">Đánh giá</h4>
    <div class="ml-3">
    <?php 
        $star = round($this->product['star']);
        for ($i = 0 ; $i <  $star; $i++){
            echo '<span class="fa fa-star checked_rating"></span>';
        }
        for ($i = 0 ; $i < 5 - $star ; $i++){
            echo '<span class="fa fa-star"></span>';
        }
    ?>
    </div>
    
    <h4 class="mt-3 ml-3">Bình luận</h4>
    <div class="comments"></div>
</section>

<script>
    $(".small-img").each(function(index){
        console.log($(this).attr('src'));
        $(this).click(function(){
            $("#main-img").attr("src",$(this).attr('src'));
        });
    });

    $.get('/payment?productid=<?php echo $this->product['productid']?>', function(data){
        $('.comments').html(data);
    })

</script>

<?php 
    $cookie = isset($_COOKIE["seen_recently"]) ? $_COOKIE["seen_recently"] : [];
    array_push($cookie,$this->product);
    //setcookie("seen_recently", $cookie, time() + (86400 * 30), "/");
    setcookie("seen_recently", $cookie, time() + 30, "/");
    echo $_COOKIE["seen_recently"] ;
?>

<?php
    include "app/default/views/component/footer.php";
?>