<!--footer-->
<footer id="footer">
    <div class="row-fluid">

        <div class="span4">
            <?php echo modules::run('abouts/inc_home'); ?>
        </div>

        <div class="span4">
            <?php echo modules::run('weblinks/inc_home'); ?>
        </div>
        <div class="span4">

            <div class="title-divider">
                <h3>ติดต่อ สอบถาม</h3>
            </div>


            <form method="post" action="contacts/save" class="form-horizontal" id="contact">
                <div class="control-group">
                    <label for="inputName" class="control-label">ชื่อ</label>

                    <div class="controls">
                        <input type="text" name="name" placeholder="ชื่อ" id="inputName">
                        <label id="fname_error" for="inputName" class="ferror" style="display: none;">กรุณากรอกชื่อ</label>
                    </div>
                </div>
                <div class="control-group">
                    <label for="inputEmail" class="control-label">อีเมล์</label>

                    <div class="controls">
                        <input type="text" name="email" placeholder="อีเมล์" id="inputEmail">
                        <label id="femail_error" for="inputEmail" class="ferror" style="display: none;">กรุณากรอกอีเมล์</label>
                    </div>
                </div>
                <div class="control-group">
                    <label for="inputMessage" class="control-label"></label>

                    <div class="controls">
                        <textarea name="message" id="inputMessage" rows="3" placeholder="ข้อความ" ></textarea>
                        <label id="fmessage_error" for="inputMessage" class="ferror" style="display: none;">กรุณากรอกข้อความ</label>
                    </div>
                </div>
                <div class="submit-div">
                    <input type="submit" value="send" class="btn pull-right footer-button">
                </div>
            </form>
    </div>
</footer>

<!--footer menu-->
<section id="footer-menu">
        <div class="row-fluid">
            <p class="span8">© 2013 Yoko. A Responsive Website template by <a style="color:#e1e1e1" href="http://dxthemes.com">DxThemes</a></p>
            <p class="span4"><span class="pull-right">Copyright 2013 - All Rights Reserved</span></p>
        </div>
</section>

</div><!-- site wrap -->