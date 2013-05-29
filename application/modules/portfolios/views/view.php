<div class="row-fluid">
<div class="span8">

<div class="page-title clearfix">
    <h1><?php echo $portfolio->title?></h1>
    <ul class="meta clearfix">
        <li><?php echo mysql_to_th($portfolio->created)?></li>
        <li>โดย: <a href="#">ประยงด์ปาร์เก้</a></li>
        <!-- <li>Comments: <a href="#">3</a></li>
        <li>Posted in: <a href="#">News</a> | <a href="#">Business</a></li> -->
    </ul>
</div>

<article class="blog-post">
    <image src="uploads/portfolio/<?php echo $portfolio->image?>">
    <?php echo $portfolio->detail?>
</article>  

<hr />

</div>
</div>
