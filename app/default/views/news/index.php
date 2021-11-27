<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="/public/admin/css/admin.css">
</head>
<body>
<?php
    include "app/default/views/component/header.php";
?>
<section class="vh-100 d-flex justify-content-center" style="background-image: url('public/images/news_background.jpg');background-attachment: relative;">
    <div style="width:70vw">
        <div class="row">
            <div class="col-6 px-0" style="background-color:white">
                <img  style="min-height:50vh;width:100%" src="public/images/image_news_1.jpg" alt="Description to news">
                <h2 style="position: absolute;bottom: 8px;left: 16px;"><strong><?php echo($this->news_1["title"]) ?></strong></h2>
            </div>
            <div class="col-6">
                <?php
                    foreach($this->news_2 as &$news){
                        echo("
                            <div class='row'>
                                <h3>".$news["title"]."</h3>
                                <p>".$news["description"]."</p>
                            </div>
                        ");
                    }
                ?>
            </div>
        </div>
        <?php
            foreach($this->news_3 as &$news){
                echo("
                    <div class='row'>
                        <h3>".$news["title"]."</h3>
                        <p>".$news["description"]."</p>
                        </div>
                ");
            }
        ?>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>