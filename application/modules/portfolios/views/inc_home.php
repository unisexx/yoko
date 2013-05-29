<div class="row-fluid our-blog">
    <?php foreach($portfolios as $portfolio):?>
        <article class="span3">
            <img alt="photo" src="uploads/portfolio/<?php echo $portfolio->image?>" style="opacity: 1;">
            <p class="l-meta"><span><a href="portfolios/view/<?php echo $portfolio->id?>"><?php echo $portfolio->title?></a> | โดย <a href="#">ประยงด์ปาร์เก้</a>  | เมื่อ <?php echo mysql_to_th($portfolio->created)?></span></p>
            <h6 class="title"><a href="portfolios/view/<?php echo $portfolio->id?>"><?php echo $portfolio->title?></a></h6>
            <p style="overflow: hidden; height: 40px;"><?php echo strip_tags($portfolio->detail) ?></p>
        </article>
    <?php endforeach;?>
</div>