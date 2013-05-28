<div class="page-header position-relative">
    <h1>Contacts <small><i class="icon-double-angle-right"></i> ติดต่อ สอบถาม</small></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->

<div class="row-fluid">
    <div class="span12">
        <table id="table_bug_report" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>ชื่อ</th>
                    <th>อีเมล์</th>
                    <th>ข้อความ</th>
                    <th></th>
                </tr>
            </thead>
                                    
            <tbody>
            <?php foreach($contacts as $contact):?>
                <tr>
                    <td><?php echo $contact->name?></td>
                    <td><a href="mailto:<?php echo $contact->email?>?Subject=ตอบคำถามครับ%20(ประยงด์ปาร์เก้)" target="_blank"><?php echo $contact->email?></a></td>
                    <td><?php echo $contact->message?></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <!-- <a href="contacts/admin/contacts/form/<?php echo $contact->id?>" class='btn btn-mini btn-info'><i class='icon-edit'></i></a> -->
                            <a class='btn btn-mini btn-danger' href="contacts/admin/contacts/delete/<?php echo $contact->id?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><i class='icon-trash'></i></a>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <!-- <li><a href="contacts/admin/contacts/form/<?php echo $contact->id?>" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li> -->
                                    <li><a href="contacts/admin/contacts/delete/<?php echo $contact->id?>" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        
        <?php echo $contacts->pagination()?>
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