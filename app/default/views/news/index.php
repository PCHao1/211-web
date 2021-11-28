<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
<?php
    include "app/default/views/component/header.php";
?>
<section class="vh-100 d-flex justify-content-center" id="content">
    <div style="width:70vw">
        <div class="row mt-2">
            <div class="col-6 px-0" style="background-color:white">
                <img  style="max-height:60vh;width:100%;border-radius:0;box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;" src="public/images/news1_bg.jpg" alt="Description to news">
                <h2 style="position: absolute;top: 8px;left: 16px;cursor:pointer" onclick="loadPostContent(<?php echo($this->news_1['postid']); ?>)">
                    <strong><?php echo($this->news_1["title"]); ?></strong>
                </h2>
                <p style="position: absolute;bottom: 8px;left: 16px;"><i>Ngày tạo:<?php echo($this->news_1["datecreated"]); ?></i></p>
            </div>
            <div class="col-6">
                <?php
                if($this->news_2 != null){
                if(count($this->news_2) >0){
                    foreach($this->news_2 as &$news){
                        echo("
                            <div class='row ml-2 my-2' style='box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px;'>
                                <h3 style='cursor:pointer' onclick='loadPostContent(".$news["postid"].")'>".$news["title"]."</h3>
                                <span class='text-muted'><i>Ngày tạo: ".$news["datecreated"]."</i></span>
                            </div>
                        ");
                    }
                }
                }
                ?>
            </div>
        </div>
        <?php
            if($this->news_3 !== null){
            if(count($this->news_3) >0){
                foreach($this->news_3 as &$news){
                    echo("
                        <div class='row'>
                        <h3 style='cursor:pointer' onclick='loadPostContent(".$news["postid"].")'>".$news["title"]."</h3>
                   
                        </div>
                    ");
                }
            }
        }
        ?>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function loadPostContent(post_id){
        $.get(`news?post_id=${post_id}`,function(data){
            $('#content').html(data)
        })
    }
</script>
</body>
</html>