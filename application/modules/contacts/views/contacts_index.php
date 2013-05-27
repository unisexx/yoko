<div class="page-title clearfix">
    <h1>ติดต่อเรา</h1>
    <span>ติดต่อ สอบถาม</span>
</div>

<div class="row-fluid">
    <div class="span6">
        <h3>ที่อยู่บริษัท</h3>
        <table class="table">
        <tbody>
            <?php if($address->title != ''):?>
            <tr>
                <th><i class="icon-user"></i> ชื่อบริษัท</th>
                <td><?php echo $address->title?></td>
            </tr>
            <?php endif;?>
            <?php if($address->address != ''):?>
            <tr>
                <th><i class="icon-map-marker"></i> ที่อยู่</th>
                <td><?php echo $address->address?></td>
            </tr>
            <?php endif;?>
            <?php if($address->tel != ''):?>
            <tr>
                <th><i class="icon-phone"></i> เบอร์โทรศัพท์</th>
                <td><?php echo $address->tel?></td>
            </tr>
            <?php endif;?>
            <?php if($address->fax != ''):?>
            <tr>
                <th><i class="icon-print"></i> แฟกซ์</th>
                <td><?php echo $address->fax?></td>
            </tr>
            <?php endif;?>
            <?php if($address->email != ''):?>
            <tr>
                <th><i class="icon-envelope"></i> อีเมล์</th>
                <td><?php echo $address->email?></td>
            </tr>
            <?php endif;?>
            <?php if($address->facebook != '' or $address->twitter != '' or $address->google):?>
            <tr>
                <th></th>
                <td>
                    <?php echo $address->facebook?'<a href="'.$address->facebook.'" target="_blank"><i class="icon-facebook-sign icon-2x facebookIcon"></i></a>':'';?>
                    <?php echo $address->twitter?'<a href="'.$address->twitter.'" target="_blank"><i class="icon-twitter-sign icon-2x twitterIcon"></i></a>':'';?>
                    <?php echo $address->google?'<a href="'.$address->googleplus.'" target="_blank"><i class="icon-google-plus-sign icon-2x googleplusIcon"></i></a>':'';?>
            </tr>
            <?php endif;?>
        </tbody>
        </table>
    </div>
    
    <div class="span6">
        <h3>แผนที่ พิกัดบริษัท</h3>
        <style type="text/css">
            /* css กำหนดความกว้าง ความสูงของแผนที่ */
            #map_canvas { 
                width:457px;
                height:300px;
            }
            #map_frm{display:none;}
        </style>
        <div id="map_canvas"></div>
        <div id="map_frm">
            <label class="control-label" for="latitude">Latitude</label>
            <div class="controls"><input name="latitude" type="text" id="lat_value" value="<?php echo $address->latitude?>" /></div>
            <label class="control-label" for="longitude">Longitude</label>
            <div class="controls"><input name="longitude" type="text" id="lon_value" value="<?php echo $address->longitude?>" /></div>
            <label class="control-label" for="zoom">Zoom</label>
            <div class="controls"><input name="zoom" type="text" id="zoom_value" value="<?php echo $address->zoom?>" size="5" /></div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <h3>รายละเอียด</h3>
        <?php echo $address->detail?>
    </div>
</div>

<!-- <div class="contacts">
	<div style="margin:30px 0 0 0;">
		<form class="form-horizontal" method="post" action="contacts/save">
              <div class="control-group">
                <label class="control-label" for="inputEmail">ชื่อ-นามสกุล :</label>
                <div class="controls">
                  <input type="text" id="inputEmail" name="name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputEmail">อีเมล์ :</label>
                <div class="controls">
                  <input type="text" id="inputEmail" name="email">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputEmail">โทรศัพท์ :</label>
                <div class="controls">
                  <input type="text" id="inputEmail" name="telephone">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputEmail">หัวข้อ :</label>
                <div class="controls">
                  <input type="text" id="inputEmail" name="title">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputEmail">รายละเอียด :</label>
                <div class="controls">
                  <textarea name="detail" rows="5" class="input-xlarge"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputCaptcha">รหัสลับ</label>
                <div class="controls">
                  <img src="users/captcha" /><Br>
                  <input type="text" name="captcha" id="inputCaptcha" placeholder="รหัสลับ">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn btn-danger">ส่งข้อความ</button>
                </div>
              </div>
		</form>
	</div>
</div> -->

<script type="text/javascript">
var latitudes = $('#lat_value').val();
var longitude = $('#lon_value').val();
var zooom = $('#zoom_value').val();
var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้
var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น
function initialize() { // ฟังก์ชันแสดงแผนที่
    GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM
    // กำหนดจุดเริ่มต้นของแผนที่
    var my_Latlng  = new GGM.LatLng(latitudes,longitude);
    var my_mapTypeId=GGM.MapTypeId.ROADMAP; // กำหนดรูปแบบแผนที่ที่แสดง
    // กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas
    var my_DivObj=$("#map_canvas")[0]; 
    // กำหนด Option ของแผนที่
    var myOptions = {
        zoom: parseInt(zooom), // กำหนดขนาดการ zoom
        center: my_Latlng , // กำหนดจุดกึ่งกลาง
        mapTypeId:my_mapTypeId // กำหนดรูปแบบแผนที่
    };
    map = new GGM.Map(my_DivObj,myOptions);// สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map
    
    var my_Marker = new GGM.Marker({ // สร้างตัว marker
        position: my_Latlng,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง
        map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map
        draggable:true, // กำหนดให้สามารถลากตัว marker นี้ได้
        title:"คลิกลากเพื่อหาตำแหน่งจุดที่ต้องการ!" // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ
    });
    
    // กำหนด event ให้กับตัว marker เมื่อสิ้นสุดการลากตัว marker ให้ทำงานอะไร
    GGM.event.addListener(my_Marker, 'dragend', function() {
        var my_Point = my_Marker.getPosition();  // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
        map.panTo(my_Point);  // ให้แผนที่แสดงไปที่ตัว marker       
        $("#lat_value").val(my_Point.lat());  // เอาค่า latitude ตัว marker แสดงใน textbox id=lat_value
        $("#lon_value").val(my_Point.lng()); // เอาค่า longitude ตัว marker แสดงใน textbox id=lon_value 
        $("#zoom_value").val(map.getZoom()); // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_value
    });     

    // กำหนด event ให้กับตัวแผนที่ เมื่อมีการเปลี่ยนแปลงการ zoom
    GGM.event.addListener(map, 'zoom_changed', function() {
        $("#zoom_value").val(map.getZoom()); // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_value  
    });

}
$(function(){
    // โหลด สคริป google map api เมื่อเว็บโหลดเรียบร้อยแล้ว
    // ค่าตัวแปร ที่ส่งไปในไฟล์ google map api
    // v=3.2&sensor=false&language=th&callback=initialize
    //  v เวอร์ชัน่ 3.2
    //  sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false
    //  language ภาษา th ,en เป็นต้น
    //  callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize
    $("<script/>", {
      "type": "text/javascript",
      src: "http://maps.google.com/maps/api/js?v=3.2&sensor=false&language=th&callback=initialize"
    }).appendTo("body");    
});
</script>