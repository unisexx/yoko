
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;" />
    <link rel="icon" href="media/images/favicon.png" type="image/png">
    <link rel="shortcut icon" href="media/images/favicon.png" type="image/png" />
    <title>Home Page</title>
    <link href="media/css/bootstrap.css" type="text/css" rel="stylesheet"/>
    <link href="media/css/bootstrap-custom-grid.css" type="text/css" rel="stylesheet"/>
    <link href="media/css/style.css" type="text/css" rel="stylesheet"/>
    <link href="media/css/prettyPhoto.css" type="text/css" rel="stylesheet"/>
    <link href="media/css/supersized.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="media/js/jquery.min.js"></script>
    <script type="text/javascript" src="media/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="media/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="media/js/jquery.quicksand.js"></script>
    <script type="text/javascript" src="media/js/superfish.js"></script>
    <script type="text/javascript" src="media/js/hoverIntent.js"></script>
    <script type="text/javascript" src="media/js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="media/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="media/js/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="media/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="media/js/jquery.elastislide.js"></script>
    <script type="text/javascript" src="media/js/jquery.tweet.js"></script>
    <script type="text/javascript" src="media/js/smoothscroll.js"></script>
    <script type="text/javascript" src="media/js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="media/js/main.js"></script>
    <script type="text/javascript" src="media/js/ajax-mail.js"></script>
    <script type="text/javascript" src="media/js/accordion.settings.js"></script>
    <script type="text/javascript" src="media/js/supersized.3.2.7.min.js"></script>
    <!--le Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,800,700' rel='stylesheet' type='text/css'>

</head>

<body>
<div class="message-top">
    <button data-dismiss="alert" class="close" type="button">×</button>
    <div class="container">
        <strong>Warning!</strong> This is a standard notification, may be used for marketing needs.
    </div>
</div>
<div class="container wrap">

<section id="top-menu">
    <div class="row-fluid">
        <div class="span6 ">
            <a class="logo" href="./index.html"><img src="media/images/logo.png" alt="logo"/></a>
            <span class="slogan">your new responsive website</span>
        </div>
        <div class="span6 search hidden-phone">
            <div id="contact-details">
                <ul>
                    <li><i class="icon-envelope"></i>
                        email@domain.name</li>
                    <li><i class="icon-bell"></i>+1 800 CALL US</li>
                </ul>
            </div>
            <form id="search">
                <p>
                    <input type="text" name="search site" value="Search..." onfocus="if(this.value=='Search...') this.value=''" onblur="if(this.value=='') this.value='Search...'"/>
                </p>
                <p><input type="submit" name="submit" value="" class="search-bt"/></p>
            </form>
        </div>
    </div>
</section>

<header id="header">
    <nav id="menu" class="clearfix">
        <ul>
            <li><a href="./index.html">Home</a></li>
            <li><a href="./portfolio4.html" >Portfolio</a>
                <ul>
                            <li><a href="./portfolio4.html">Portfolio 4 Columns</a></li>
                            <li class="last"><a href="./portfolio4ex.html">Portfolio 4 Columns Extended</a></li>
                </ul>
            </li>
            <li><a href="./blog.html">Blog</a>
                <ul>
                    <li><a href="./blog.html">Blog</a></li>
                    <li class="last"><a href="./blog-single.html">Blog Single</a></li>
                </ul>
            </li>
            <li><a href="./about.html">About Us</a></li>
            <li class="last"><a href="./services.html" >Our Services</a></li>
            <li><a href="./contact.html" >Contact</a></li>
        </ul>
    </nav>
   </header>

<section id="slider">
    <div id="mainslider" class="flexslider">
        <ul class="slides">
            <li>
                <img src="media/images/slide1.jpg" alt="photo" />
                <div class="slider-caption-right hidden-phone">
                <h5>Hello, world!</h5>
                    <p> This is a simple hero unit, a simple jumbotron-style component
                        for calling extra attention to featured content or information.
                        Lorem ipsum dolor sit amet qui qunta negat omnia dat arma teneti.
                    </p>
                </div>
            </li>

            <li>
                <img src="media/images/slide3.jpg" alt="photo" />
                <div class="slider-caption-right hidden-phone">
                    <h5>Contra brevita bellum!</h5>
                    <p> This is a simple hero unit, a simple jumbotron-style component
                        for calling extra attention to featured content or information.</p>
                </div>
            </li>
           </ul>
    </div>
</section>

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
            <img alt="photo" src="media/images/latest8.jpg" style="opacity: 1;">
            <p class="l-meta"><span>By <a href="#">Tom Johnson</a>  | On 05/09/2012 | In <a href="#">Music</a></span></p>
            <h6 class="title"><a href="#">Ut in lacus rhoncus elit egestas</a></h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tristique. </p>
        </article>
        <article class="span3">
            <img alt="photo" src="media/images/latest7.jpg" style="opacity: 1;">
            <p class="l-meta"><span>By <a href="#">Tom Johnson</a>  | On 05/09/2012 | In <a href="#">Travel</a></span></p>
            <h6 class="title"><a href="#">Ut in lacus rhoncus elit egestas</a></h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tristique. </p>
        </article>
        <article class="span3">
            <img alt="photo" src="media/images/latest6.jpg" style="opacity: 1;">
            <p class="l-meta"><span>By <a href="#">Tom Johnson</a>  | On 05/09/2012 | In <a href="#">Girls</a></span></p>
            <h6 class="title"><a href="#">Ut in lacus rhoncus elit egestas</a></h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tristique. </p>
        </article>
        <article class="span3">
            <img alt="photo" src="media/images/latest5.jpg" style="opacity: 1;">
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
                <img src="media/images/resp.png"><a href="#">Fully Responsive Theme</a>
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consec tetuer adipi scing elit, sed diam nonu mmy nibh eui smod tincidunt ut laoreet dolore magna aliq uam erat volutpat ad minim veniam
                </p>
            </article>
        </div>
        <div class="span4">
            <article class="divider-blok">

                <h3 class="title">
                    <img src="media/images/seo.png">   <a href="#">Search Engine Optimization</a>
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consec tetuer adipi scing elit, sed diam nonu mmy nibh eui smod tincidunt ut laoreet dolore magna aliq uam erat volutpat ad minim veniam
                </p>
            </article>
        </div>
        <div class="span4">
            <article class="divider-blok">

                <h3 class="title">
                    <img src="media/images/friendly.png">    <a href="#">Human Friendly Code</a>
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
                    <img src="media/images/star.png"><a href="#">Fully Responsive Theme</a>
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consec tetuer adipi scing elit, sed diam nonu mmy nibh eui smod tincidunt ut laoreet dolore magna aliq uam erat volutpat ad minim veniam
                </p>
            </article>
        </div>
        <div class="span4">
            <article class="divider-blok">

                <h3 class="title">
                    <img src="media/images/secure.png">   <a href="#">Search Engine Optimization</a>
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consec tetuer adipi scing elit, sed diam nonu mmy nibh eui smod tincidunt ut laoreet dolore magna aliq uam erat volutpat ad minim veniam
                </p>
            </article>
        </div>
        <div class="span4">
            <article class="divider-blok">

                <h3 class="title">
                    <img src="media/images/envelope.png">    <a href="#">Human Friendly Code</a>
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consec tetuer adipi scing elit, sed diam nonu mmy nibh eui smod tincidunt ut laoreet dolore magna aliq uam erat volutpat ad minim veniam
                </p>
            </article>
        </div>
    </div>
    <hr class="invisible">

</section>

<!--footer-->
<footer id="footer">
    <div class="row-fluid">

        <div class="span4">
            <div class="title-divider">
                <h3>About yoko theme</h3>
            </div>
            <div>
                <p>Curabitur turpis diam, lacinia vitae convas facilisis, vulputate in ipsum. Aliquam dignissim diasagittis elit iaculis consequat.

                    Curabitur turpis diam, lacinia vitae convallis facilisis, vulputate in ipsum. </p>
                <div class="top-social">
                    <a href="#" class="facebook" data-placement="top" rel="tooltip" data-original-title="Facebook"></a>

                    <a href="#" class="twitter2" data-placement="top" rel="tooltip" data-original-title="Twitter"></a>

                    <a href="#" class="digg" data-placement="top" rel="tooltip" data-original-title="Digg"></a>

                    <a href="#" class="gplus" data-placement="top" rel="tooltip" data-original-title="DeviantArt"></a>

                    <a href="#" class="vimeo" data-placement="top" rel="tooltip" data-original-title="Market"></a>
                </div>
                <h4> Curabitur turpis diam, lacinia vitae
                    Aliquam dignissim diam sagittis
                    Vestibulum ante ipsum primis in</h4>

            </div>
        </div>

        <div class="span4">
            <div class="title-divider">
                <h3>cool Links</h3>
            </div>
            <ul class="features-list">
                <li><a href="#">Pellentesque vel augue sit</a><span>Senectus et netus et malesuada fames</span>
                </li>
                <li><a href="#">Pellentesque vel augue sit</a><span>Senectus et netus et malesuada fames</span>
                </li>
                <li><a href="#">Pellentesque vel augue sit</a><span>Senectus et netus et malesuada fames</span>
                </li>
                <li><a href="#">Pellentesque vel augue sit</a><span>Senectus et netus et malesuada fames</span>
                </li>
                <li><a href="#">Pellentesque vel augue sit</a><span>Senectus et netus et malesuada fames</span>
                </li>
            </ul>
        </div>
        <div class="span4">

            <div class="title-divider">
                <h3>Contact Us</h3>
            </div>


            <form method="post" class="form-horizontal" id="contact">
                <div class="control-group">
                    <label for="inputName" class="control-label">Name</label>

                    <div class="controls">
                        <input type="text" name="inputName" placeholder="Name" id="inputName">
                        <label id="fname_error" for="inputName" class="ferror" style="display: none;">Name is required.</label>
                    </div>
                </div>
                <div class="control-group">
                    <label for="inputEmail" class="control-label">Email</label>

                    <div class="controls">
                        <input type="text" name="inputEmail" placeholder="Email" id="inputEmail">
                        <label id="femail_error" for="inputEmail" class="ferror" style="display: none;">Email is required.</label>
                    </div>
                </div>
                <div class="control-group">
                    <label for="inputMessage" class="control-label"></label>

                    <div class="controls">
                        <textarea name="inputMessage" id="inputMessage" rows="3" placeholder="Message" ></textarea>
                        <label id="fmessage_error" for="inputMessage" class="ferror" style="display: none;">Message is required.</label>
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
            <p class="span8">© 2012 Yoko. A Responsive Website template by <a style="color:#e1e1e1" href="http://dxthemes.com">DxThemes</a></p>
            <p class="span4"><span class="pull-right">Copyright 2012 - All Rights Reserved</span></p>
        </div>
</section>

</div><!-- site wrap -->

</body>
</html>