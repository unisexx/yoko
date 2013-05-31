<section id="slider">
    <div id="mainslider" class="flexslider">
        <ul class="slides">
            <?php foreach($hilights as $hilight):?>
                <li>
                    <img src="uploads/hilight/<?php echo $hilight->image?>" alt="photo" />
                    <div class="slider-caption-right hidden-phone">
                    <h5><?php echo $hilight->title?></h5>
                        <p><?php echo $hilight->detail?></p>
                    </div>
                </li>
            <?php endforeach;?>
           </ul>
    </div>
</section>