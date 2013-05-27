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
            <!-- <li>
                <img src="themes/yoko/media/images/slide1.jpg" alt="photo" />
                <div class="slider-caption-right hidden-phone">
                <h5>Hello, world!</h5>
                    <p> This is a simple hero unit, a simple jumbotron-style component
                        for calling extra attention to featured content or information.
                        Lorem ipsum dolor sit amet qui qunta negat omnia dat arma teneti.
                    </p>
                </div>
            </li>

            <li>
                <img src="themes/yoko/media/images/slide3.jpg" alt="photo" />
                <div class="slider-caption-right hidden-phone">
                    <h5>Contra brevita bellum!</h5>
                    <p> This is a simple hero unit, a simple jumbotron-style component
                        for calling extra attention to featured content or information.</p>
                </div>
            </li> -->
           </ul>
    </div>
</section>