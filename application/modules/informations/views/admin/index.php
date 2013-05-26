<div class="page-header position-relative">
    <h1>Information <small><i class="icon-double-angle-right"></i> ข่าวสารและโปรโมชัน</small></h1>
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
                    <th><a class="btn btn-mini btn-primary" href="informations/admin/informations/form"><i class="icon-pencil"></i> เพิ่มรายการ </a></th>
                </tr>
            </thead>
                                    
            <tbody>
            <?php foreach($informations as $information):?>
                <tr>
                    <td>
                        <label><input class="ace-switch ace-switch-4" type="checkbox" name="status" value="<?php echo $information->id ?>" <?php echo ($information->status=="approve")?'checked="checked"':'' ?>/><span class="lbl"></span></label>
                    </td>
                    <td><img src="uploads/information/<?php echo $information->image?>" width="150"></td>
                    <td><?php echo $information->title?></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <a href="informations/admin/informations/form/<?php echo $information->id?>" class='btn btn-mini btn-info'><i class='icon-edit'></i></a>
                            <a class='btn btn-mini btn-danger' href="informations/admin/informations/delete/<?php echo $information->id?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><i class='icon-trash'></i></a>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="informations/admin/informations/form/<?php echo $information->id?>" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="informations/admin/informations/delete/<?php echo $information->id?>" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
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
        $.post("informations/admin/informations/approve/" + this.value,jsonOptions);
    });
});
</script>