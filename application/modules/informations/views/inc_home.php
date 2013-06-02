<?php foreach($informations as $information):?>
        <?php echo alternator('<div class="row-fluid services">','','');?>
        <div class="span4">
            <article class="divider-blok">
                <h3 class="title">
                <a href="informations/view/<?php echo $information->id?>"><?php echo $information->title?></a>
                </h3>
                <p style="height: 80px; overflow: hidden;"><?php echo strip_tags($information->detail) ?></p>
            </article>
        </div>
    <?php echo alternator('','','</div>');?>
<?php endforeach;?>
