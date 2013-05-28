<div class="page-header position-relative">
    <h1>Weblinks <small><i class="icon-double-angle-right"></i> เว็บลิ้งค์</small></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="weblinks/admin/weblinks/save/<?php echo $weblinks->id?>" enctype="multipart/form-data">
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">ชื่อเว็บ</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="title" value="<?php echo $weblinks->title?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-3">รายละเอียด</label>
            <div class="controls">
                <input type="text" id="form-field-3" class="input-xxlarge" name="detail" value="<?php echo $weblinks->detail?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-2">URL</label>
            <div class="controls">
                <input type="text" id="form-field-2" class="input-xxlarge" name="url" value="<?php echo $weblinks->url?>">
            </div>
        </div>
        
        <div class="form-actions">
            <?php echo form_referer() ?>
            <button class="btn btn-info" type="submit"><i class="icon-ok"></i> Submit</button>
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset"><i class="icon-undo"></i> Reset</button>
        </div>
        
    </form>
<!-- PAGE CONTENT ENDS HERE -->
</div>