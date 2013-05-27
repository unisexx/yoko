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
    <!--container-->
    <section id="container" class="clearfix">
        <div class="row-fluid">
            <section id="page" class="span12">
                <?php echo $template['body'] ?>
            </section>
        </div>
    </section>
    <?php include "_footer.php"?>
</body>
</html>