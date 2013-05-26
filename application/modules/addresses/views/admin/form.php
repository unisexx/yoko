<div class="page-header position-relative">
    <h1>Address <small><i class="icon-double-angle-right"></i> ที่อยู่บริษัท</small></h1>
</div><!--/page-header-->


<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="addresses/admin/addresses/save/1" enctype="multipart/form-data">
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">ชื่อบริษัท</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="title" value="<?php echo $address->title?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-2">ที่อยู่</label>
            <div class="controls">
                <input type="text" id="form-field-2" class="input-xxlarge" name="address" value="<?php echo $address->address?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-3">โทร</label>
            <div class="controls">
                <input type="text" id="form-field-3" class="input-xxlarge" name="tel" value="<?php echo $address->tel?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-4">แฟกซ์</label>
            <div class="controls">
                <input type="text" id="form-field-4" class="input-xxlarge" name="fax" value="<?php echo $address->fax?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-5">อีเมล์</label>
            <div class="controls">
                <input type="text" id="form-field-5" class="input-xxlarge" name="email" value="<?php echo $address->email?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-7">facebook</label>
            <div class="controls">
                <input type="text" id="form-field-7" class="input-xxlarge" name="facebook" value="<?php echo $address->facebook?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-8">twitter</label>
            <div class="controls">
                <input type="text" id="form-field-8" class="input-xxlarge" name="twitter" value="<?php echo $address->twitter?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-9">google+</label>
            <div class="controls">
                <input type="text" id="form-field-9" class="input-xxlarge" name="google" value="<?php echo $address->google?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-6">พิกัด</label>
            <div class="controls">
                <style type="text/css">
                    /* css กำหนดความกว้าง ความสูงของแผนที่ */
                    #map_canvas { 
                        width:544px;
                        height:300px;
                    }
                    #map_frm{margin-top:5px;}
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
        
        <div class="control-group">
            <label class="control-label" for="form-field-9">รายละเอียด</label>
            <div class="controls">
                <textarea class="input-xxlarge" id="form-field-9" name="detail"><?php echo $address->detail?></textarea>
            </div>
        </div>
        
        <div class="form-actions">
            <button class="btn btn-info" type="submit"><i class="icon-ok"></i> Submit</button>
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset"><i class="icon-undo"></i> Reset</button>
        </div>
        
<!-- PAGE CONTENT ENDS HERE -->
</div>

<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
    tiny('detail');
</script>

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