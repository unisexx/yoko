<div class="page-header position-relative">
    <h1>Portfolio <small><i class="icon-double-angle-right"></i> ผลงานของเรา</small></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->

<div class="row-fluid">
    <div class="span12">
        <table id="table_bug_report" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>สถานะ</th>
                    <th>รูป</th>
                    <th>หัวข้อ</th>
                    <th><a class="btn btn-mini btn-primary" href="portfolios/admin/portfolios/form"><i class="icon-pencil"></i> เพิ่มรายการ </a></th>
                </tr>
            </thead>
                                    
            <tbody>
            <?php foreach($portfolios as $portfolio):?>
                <tr>
                    <td>
                        <label><input class="ace-switch ace-switch-4" type="checkbox" name="status" value="<?php echo $portfolio->id ?>" <?php echo ($portfolio->status=="approve")?'checked="checked"':'' ?>/><span class="lbl"></span></label>
                    </td>
                    <td><img src="uploads/portfolio/<?php echo $portfolio->image?>" width="150"></td>
                    <td><?php echo $portfolio->title?></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <a href="portfolios/admin/portfolios/form/<?php echo $portfolio->id?>" class='btn btn-mini btn-info'><i class='icon-edit'></i></a>
                            <a class='btn btn-mini btn-danger' href="portfolios/admin/portfolios/delete/<?php echo $portfolio->id?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><i class='icon-trash'></i></a>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="portfolios/admin/portfolios/form/<?php echo $portfolio->id?>" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="portfolios/admin/portfolios/delete/<?php echo $portfolio->id?>" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        
        <?php echo $portfolios->pagination()?>
    </div><!--/span-->
</div><!--/row-->

<!-- PAGE CONTENT ENDS HERE -->
</div>

<script type="text/javascript">
$(document).ready(function(){
    $("input:checkbox").click(function(){
        var value = this.checked ? "approve" : "draft";
        var name = $(this).attr("name");
        var jsonOptions= {};
        jsonOptions[name]= value;
        $.post("portfolios/admin/portfolios/approve/" + this.value,jsonOptions);
    });
});
</script>