<div class="page-header position-relative">
    <h1>About Us <small><i class="icon-double-angle-right"></i> เกี่ยวกับเรา</small></h1>
</div><!--/page-header-->


<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="abouts/admin/abouts/save/1" enctype="multipart/form-data">
        
        <div class="control-group">
            <label class="control-label" for="form-field-9">รายละเอียด</label>
            <div class="controls">
                <textarea class="input-xxlarge" id="form-field-9" name="detail" rows="8"><?php echo $about->detail?></textarea>
            </div>
        </div>
        
        <div class="form-actions">
            <button class="btn btn-info" type="submit"><i class="icon-ok"></i> Submit</button>
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset"><i class="icon-undo"></i> Reset</button>
        </div>
        
    </form>
<!-- PAGE CONTENT ENDS HERE -->
</div>

<!-- Load TinyMCE -->
<!-- <script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
    tiny('detail');
</script> -->