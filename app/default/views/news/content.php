
<section class="d-flex align-items-center" style="flex-direction:column;">
    <div class="row">
        <h1><?php echo($this->title) ?></h1>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-8">
        <?php
            include "public/posts/".$this->content.".html";
        ?>
        </div>
    </div>
</section>
