<div class="page-header position-relative">
    <h1>Administrator <small><i class="icon-double-angle-right"></i> ผู้ดูแลระบบ</small></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="users/admin/administrators/save/<?php echo $user->id?>" enctype="multipart/form-data">
        
        <!-- <div class="control-group">
            <label class="control-label" for="id-input-file-1">ภาพประกอบข่าว</label>
            <div class="controls">
                <?php if($information->image):?>
                <img class="img" style="width:150px;" src="<?php echo (is_file('uploads/information/'.$information->image))? 'uploads/information/'.$information->image : 'media/images/dummy/656x253.gif' ?>"  /> <br><br>
                <?php endif;?>
                <div class="input-xxlarge">
                    <input type="file" id="id-input-file-1" name="image"/>
                </div>
            </div>
        </div> -->
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">ชื่อผู้ใช้</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="username" value="<?php echo $user->username?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="password">รหัสผ่าน</label>
            <div class="controls">
                <input type="password" id="password" class="input-xxlarge" name="password" value="">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-3">ยืนยันรหัสผ่าน</label>
            <div class="controls">
                <input type="password" id="form-field-3" class="input-xxlarge" name="password2" value="">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-3">รหัสลับ</label>
            <div class="controls">
                <img src="users/captcha" /><Br>
                <input type="text" name="captcha" class="input-small" id="inputCaptcha" placeholder="รหัสลับ">
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


<!-- inline scripts related to this page -->
<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
    tiny('detail');
</script>

<script type="text/javascript">
$(function() {
    
    $('#id-input-file-1').ace_file_input({
        no_file:'No File ...',
        btn_choose:'Choose',
        btn_change:'Change',
        droppable:false,
        onchange:null,
        thumbnail:false //| true | large
        //whitelist:'gif|png|jpg|jpeg'
        //blacklist:'exe|php'
        //onchange:''
        //
    });
    
    $('#validation-form').validate({
        errorElement: 'span',
        errorClass: 'help-inline',
        focusInvalid: false,
        rules: {
            username: {
                required: true
            },
            password: {
                required: true,
                minlength: 4
            },
            password2: {
                required: true,
                equalTo: "#password"
            },
            captcha:
            {
                required: true,
                remote: "users/check_captcha"
            }
        },

        messages: {
            username: {
                required: "กรุณากรอกยูสเซอร์เนม"
            },
            password: {
                required: "กรุณากรอกรหัสผ่าน",
                minlength: "รหัสผ่านควรมีอักษรอย่างต่ำ 4 ตัวอักษร"
            },
            password2:{
                required: "กรุณากรอกยืนยันรหัสผ่าน",
                equalTo: "กรุณากรอกรหัสผ่านให้ตรงกัน"
            },
            captcha:
            {
                required: "กรุณากรอกตัวอักษรตัวที่เห็นในภาพ",
                remote: "กรุณากรอกตัวอักษรให้ตรงกับภาพ"
            }
        },

        invalidHandler: function (event, validator) { //display error alert on form submit   
            $('.alert-error', $('.login-form')).show();
        },

        highlight: function (e) {
            $(e).closest('.control-group').removeClass('info').addClass('error');
        },

        success: function (e) {
            $(e).closest('.control-group').removeClass('error').addClass('info');
            $(e).remove();
        },

        errorPlacement: function (error, element) {
            if(element.is(':checkbox') || element.is(':radio')) {
                var controls = element.closest('.controls');
                if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                else error.insertAfter(element.nextAll('.lbl').eq(0));
            } 
            else if(element.is('.chzn-select')) {
                error.insertAfter(element.nextAll('[class*="chzn-container"]').eq(0));
            }
            else error.insertAfter(element);
        },

        // submitHandler: function (form) {
        // },
        // invalidHandler: function (form) {
        // }
    });
});
</script>