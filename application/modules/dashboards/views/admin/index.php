<div class="page-header position-relative">
    <h1>Dashboards <small><i class="icon-double-angle-right"></i> สถิติเว็บไซต์</small></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <div class="row-fluid">
        <div class="span12">
            <h3 class="header smaller lighter blue">ภาพรวมของผู้เข้าชม</h3>
<!-- <div class="search">
    <form method="get" action="dashboards/admin/dashboards">
            แสดงรายการย้อนหลัง 30 วันนับถอยหลังจาก 
        <div class="control-group">
            <div class="row-fluid input-append date">
                <input class="span3 date-picker" id="id-date-picker-1" type="text" name="date" data-date-format="dd/mm/yyyy" value="<?php echo @$_GET['date'] ?>" />
                <span class="add-on"><i class="icon-calendar"></i></span>
            </div>
        </div>
    <input type="submit" value="ตกลง" />
    </form>
</div> -->
<img src="http://chart.apis.google.com/chart?
chs=1000x200
&amp;chg=22,30&amp;chd=t:<?
$i=0;
$max=0;
$min=100000;
foreach($visits as $v){
    if($i>0)echo ",";
    if($v['ga:visits']>$max)$max=$v['ga:visits'];
    if($v['ga:visits']<$min)$min=$v['ga:visits'];
    echo $v['ga:visits'];
    $i++;
}
$max=$max+5;
$min=$min-5;
?>
&amp;chl=<?
$i=0;
foreach($visits as $v){
    if($i>0)echo "|";
    $tmp=null;
    $tmp[]=substr($v['ga:date'], -2);
    $tmp[]=substr($v['ga:date'], -4,2);
    //echo $v['ga:date'];
    echo "$tmp[0]/$tmp[1]";
    $i++;
}
?>
&amp;chxr=1,<?= $min ?>,<?= $max ?>
&amp;chds=<?= $min ?>,<?= $max ?>
&amp;chm=o,0066FF,0,-1.0,6|N,0066FF,0,-1.0,11
&amp;chxt=x,y
&amp;cht=lc
" />
<div class="clear"></div>


<div class="row-fluid">
    <div class="span6">
        <h3 class="header smaller lighter blue">การใช้งานไซต์</h3>
        <table class="table table-bordered table-striped">
            <tr><th>visits</th><td><?= $summery['ga:visits'] ?></td></tr>
            <tr><th>unique visitors</th><td><?= $summery['ga:visitors'] ?></td></tr>
            <tr><th>pageviews</th><td><?= $summery['ga:pageviews'] ?></td></tr>
            <tr><th>time on site</th><td><?= floor(($summery['ga:timeOnSite']/$summery['ga:visits'])/60) . ":" . ($summery['ga:timeOnSite']/$summery['ga:visits']) % 60 ?></td></tr>
            <tr><th>new visits</th><td><?= ceil(($summery['ga:newVisits']/$summery['ga:visits'])*100) ?> %</td></tr>
            <tr><th>bounce rate</th><td><?= ceil(($summery['ga:bounces']/$summery['ga:entrances'])*100)?> %</td></tr>
        </table>
    </div>
    
    <div class="span6">
        <h3 class="header smaller lighter blue">สถิติผู้เข้าชมทั้งหมด</h3>
        <table class="table table-bordered table-striped">
            <tr><th>visits</th><td><?= $allTimeSummery['ga:visits'] ?></td></tr>
            <tr><th>pageviews</th><td><?= $allTimeSummery['ga:pageviews'] ?></td></tr>
            </table>
        </table>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <h3 class="header smaller lighter blue">ประเทศที่เข้าชมสูงสุด 10 อันดับ</h3>
        <table class="table table-bordered table-striped">
            <? foreach($topCountries as $country){ ?>
            <tr><th><?= $country['ga:country'] ?></th><td><?= $country['ga:visits'] ?></td></tr>
            <? } ?>
        </table>
    </div>
    
    <div class="span6">
        <h3 class="header smaller lighter blue">คำค้นยอดนิยม</h3>
        <table class="table table-bordered table-striped">
            <? foreach($topKeywords as $keyword){ ?>
            <tr><th><?= $keyword['ga:keyword'] ?></th><td><?= $keyword['ga:visits'] ?></td></tr>
            <? } ?>
        </table>
    </div>
</div>


<div class="row-fluid">
    <div class="span6">
        <h3 class="header smaller lighter blue">เนื้อหายอดนิยม</h3>
        <table class="table table-bordered table-striped">
            <? foreach($topPages as $page){ ?>
            <tr><th><div><?= $page['ga:pagePath'] ?></div></th><td><?= $page['ga:visits'] ?></td></tr>
            <? } ?>
        </table>
    </div>
    
    <div class="span6">
        <h3 class="header smaller lighter blue">OS ยอดนิยม</h3>
        <img src="http://chart.apis.google.com/chart?
chs=370x160
&amp;chd=t:<?
$i=0;
foreach($topOs as $os){
    if($i>0)echo ",";
    echo $os['ga:visits'];
    $i++;
}
?>
&amp;chl=<?
$i=0;
foreach($topOs as $os){
    if($i>0)echo "|";
    echo $os['ga:operatingSystem'];
    $i++;
}
?>
&amp;cht=p3
" />
    </div>
</div>
            
            
        </div>
    </div>
<!-- PAGE CONTENT ENDS HERE -->
</div>

<script>
$(document).ready(function(){
    $('.date-picker').datepicker();
});
</script>