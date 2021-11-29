
<section class="d-flex align-items-center" style="flex-direction:column; width: 90%;">
    <div class="col d-flex align-items-center" style="flex-direction:column; background-color:white;" >
        <div class="row d-flex justify-content-center" style="width:80%;" >
            <div class="col-10">
                <h1><?php echo($this->title) ?></h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center" style="width:80%;">
            <div class="col-10" >
                <?php
                    include "public/posts/".$this->content.".html";
                ?>
            </div>
        </div>
    </div>
</section>
