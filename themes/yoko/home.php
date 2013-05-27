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
            <h1>Welcome to the <span>Yoko theme</span> - your new responsive website!</h1>

            <p>Fringilla penatibus orci est non mollit, suspendisse pulvinar egestas a donec, iaculis aenean, parturient velit elit ac viverra vestibulum, quis et nascetur rutrum nibh molestie fusce. Sapien pede libero.</p>
            <a href="#" class="read-more">read more</a>
        </div>
    </section>
    <div class="row-fluid our-blog">

        <article class="span3">
            <img alt="photo" src="themes/yoko/media/images/latest8.jpg" style="opacity: 1;">
            <p class="l-meta"><span>By <a href="#">Tom Johnson</a>  | On 05/09/2012 | In <a href="#">Music</a></span></p>
            <h6 class="title"><a href="#">Ut in lacus rhoncus elit egestas</a></h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tristique. </p>
        </article>
        <article class="span3">
            <img alt="photo" src="themes/yoko/media/images/latest7.jpg" style="opacity: 1;">
            <p class="l-meta"><span>By <a href="#">Tom Johnson</a>  | On 05/09/2012 | In <a href="#">Travel</a></span></p>
            <h6 class="title"><a href="#">Ut in lacus rhoncus elit egestas</a></h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tristique. </p>
        </article>
        <article class="span3">
            <img alt="photo" src="themes/yoko/media/images/latest6.jpg" style="opacity: 1;">
            <p class="l-meta"><span>By <a href="#">Tom Johnson</a>  | On 05/09/2012 | In <a href="#">Girls</a></span></p>
            <h6 class="title"><a href="#">Ut in lacus rhoncus elit egestas</a></h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tristique. </p>
        </article>
        <article class="span3">
            <img alt="photo" src="themes/yoko/media/images/latest5.jpg" style="opacity: 1;">
            <p class="l-meta"><span>By <a href="#">Tom Johnson</a>  | On 05/09/2012 | In <a href="#">City</a></span></p>
            <h6 class="title"><a href="#">Ut in lacus rhoncus elit egestas</a></h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tristique. </p>
        </article>
    </div>
    <hr class="invisible">

    <div class="row-fluid services">
        <div class="span4">
            <article class="divider-blok">

                <h3 class="title">
                <img src="themes/yoko/media/images/resp.png"><a href="#">Fully Responsive Theme</a>
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consec tetuer adipi scing elit, sed diam nonu mmy nibh eui smod tincidunt ut laoreet dolore magna aliq uam erat volutpat ad minim veniam
                </p>
            </article>
        </div>
        <div class="span4">
            <article class="divider-blok">

                <h3 class="title">
                    <img src="themes/yoko/media/images/seo.png">   <a href="#">Search Engine Optimization</a>
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consec tetuer adipi scing elit, sed diam nonu mmy nibh eui smod tincidunt ut laoreet dolore magna aliq uam erat volutpat ad minim veniam
                </p>
            </article>
        </div>
        <div class="span4">
            <article class="divider-blok">

                <h3 class="title">
                    <img src="themes/yoko/media/images/friendly.png">    <a href="#">Human Friendly Code</a>
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consec tetuer adipi scing elit, sed diam nonu mmy nibh eui smod tincidunt ut laoreet dolore magna aliq uam erat volutpat ad minim veniam
                </p>
            </article>
        </div>
    </div>
    <div class="row-fluid services">
        <div class="span4">
            <article class="divider-blok">

                <h3 class="title">
                    <img src="themes/yoko/media/images/star.png"><a href="#">Fully Responsive Theme</a>
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consec tetuer adipi scing elit, sed diam nonu mmy nibh eui smod tincidunt ut laoreet dolore magna aliq uam erat volutpat ad minim veniam
                </p>
            </article>
        </div>
        <div class="span4">
            <article class="divider-blok">

                <h3 class="title">
                    <img src="themes/yoko/media/images/secure.png">   <a href="#">Search Engine Optimization</a>
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consec tetuer adipi scing elit, sed diam nonu mmy nibh eui smod tincidunt ut laoreet dolore magna aliq uam erat volutpat ad minim veniam
                </p>
            </article>
        </div>
        <div class="span4">
            <article class="divider-blok">

                <h3 class="title">
                    <img src="themes/yoko/media/images/envelope.png">    <a href="#">Human Friendly Code</a>
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consec tetuer adipi scing elit, sed diam nonu mmy nibh eui smod tincidunt ut laoreet dolore magna aliq uam erat volutpat ad minim veniam
                </p>
            </article>
        </div>
    </div>
    <hr class="invisible">

</section>

<?php include "_footer.php"?>

</body>
</html>