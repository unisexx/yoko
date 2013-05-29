<div class="page-title clearfix">
    <h1>ผลงานของเรา</h1>
    <span>Portfolio</span>
</div>

<!--filter-->
        <!-- <ul id="filtrable">
            <li class="current all"><a href="#">All</a></li>
            <li class="html"><a href="#">Html</a></li>
            <li class="css"><a href="#">CSS</a></li>
            <li class="php"><a href="#">PHP</a></li>
            <li class="javascript"><a href="#">JavaScript</a></li>
        </ul>

        <div class="clear"></div> -->
        
        <section class="row-fluid da-thumbs portfolio filtrable clearfix">
            <?php foreach($portfolios as $key=>$portfolio):?>
                <article data-id="id-<?php echo $key?>" data-type="javascript html" class="span3">
                    <span>
                        <img src="uploads/portfolio/<?php echo $portfolio->image?>" alt="photo"/>
                        <div class="pd">
                            <a href="uploads/portfolio/<?php echo $portfolio->image?>" class="p-view"  data-rel="prettyPhoto"></a>
                            <a href="portfolios/view/<?php echo $portfolio->id?>" class="p-link"></a>
                        </div>
                    </span>
                    <h3><a href="portfolios/view/<?php echo $portfolio->id?>"><?php echo $portfolio->title?></a></h3>
                    <p style="height: 80px; overflow: hidden;"><?php echo strip_tags($portfolio->detail) ?></p>
                    <a href="portfolios/view/<?php echo $portfolio->id?>" class="read-more">อ่านต่อ &raquo;</a>
                </article>
            <?php endforeach;?>
        </section>

        <?php echo $portfolios->pagination()?>