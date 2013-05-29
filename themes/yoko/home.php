<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->

<head>
    <base href="<?php echo base_url(); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;" />
    <link rel="icon" href="themes/yoko/media/images/favicon.png" type="image/png">
    <link rel="shortcut icon" href="themes/yoko/media/images/favicon.png" type="image/png" />
    <title><?php echo $template['title'] ?></title>
    <?php echo $template['metadata'] ?>
    <?php include "_css.php";?>
    <?php include "_script.php";?>
    
    <!--le Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,800,700' rel='stylesheet' type='text/css'>

</head>

<body>
    <?php include "_header.php";?>
    
    <?php echo modules::run('hilights/inc_home'); ?>

<section id="container" class="clearfix">
    <section id="welcome">
        <div class="hero-unit">
            <h1>ยินดีต้อนรับเข้าสู่ <span>ประยงด์ปาร์เก้</span> - your new responsive website!</h1>

            <p>Fringilla penatibus orci est non mollit, suspendisse pulvinar egestas a donec, iaculis aenean, parturient velit elit ac viverra vestibulum, quis et nascetur rutrum nibh molestie fusce. Sapien pede libero.</p>
            <a href="services" class="read-more">อ่านต่อ</a>
        </div>
    </section>
    
    <?php echo modules::run('portfolios/inc_home'); ?>
    
    <hr class="invisible">

    <?php echo modules::run('informations/inc_home'); ?>
    
    <hr class="invisible">

</section>

<?php include "_footer.php"?>

</body>
</html>