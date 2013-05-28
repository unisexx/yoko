<div class="title-divider">
    <h3>ลิ้งค์ที่น่าสนใจ</h3>
</div>
<ul class="features-list">
    <?php foreach($weblinks as $weblink):?>
    <li><a href="<?php echo $weblink->url?>" target="_blank"><?php echo $weblink->title?></a><span><?php echo $weblink->detail?></span></li>
    <?php endforeach;?>
    </li>
</ul>