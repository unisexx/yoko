<div class="page-title clearfix">
    <h1>ข่าวสารและโปรโมชัน</h1>
    <span>ข่าวสารและโปรโมชัน</span>
</div>

<div class="row-fluid">
<div class="span8">
<?php foreach($informations as $information):?>
    <article class="blog-post">
        <h2 class="post-title"><a href="informations/view/<?php echo $information->id?>"><?php echo $information->title?></a></h2>
        <ul class="meta clearfix">
            <li><?php echo mysql_to_th($information->created)?></li>
            <li>โดย: <a href="#">ประยงด์ปาร์เก้</a></li>
            <!-- <li>Comments: <a href="#">3</a></li>
            <li>Posted in: <a href="#">News</a> | <a href="#">Business</a></li> -->
        </ul>
        <p style="text-indent:30px; text-align: justify; margin: 0 0 1.5em 0; line-height: 1.5em; height: 55px; overflow: hidden;"><?php echo strip_tags($information->detail) ?></p>
        <br clear="all">
        <a href="informations/view/<?php echo $information->id?>" class="read-more">อ่านต่อ &raquo;</a>
    </article>
    
    <hr />
<?php endforeach;?>
</div>
</div>
<?php echo $informations->pagination()?>
