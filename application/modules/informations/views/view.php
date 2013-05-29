<div class="row-fluid">
<div class="span8">

<div class="page-title clearfix">
    <h1><?php echo $information->title?></h1>
    <ul class="meta clearfix">
        <li><?php echo mysql_to_th($information->created)?></li>
        <li>By: <a href="#">ประยงด์ปาร์เก้</a></li>
        <!-- <li>Comments: <a href="#">3</a></li>
        <li>Posted in: <a href="#">News</a> | <a href="#">Business</a></li> -->
    </ul>
</div>

<article class="blog-post">
    <?php echo $information->detail?>
</article>  

<hr />

</div>
</div>
