
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Tables - Ace Admin</title>
        <meta name="description" content="Static & Dynamic Tables" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <?php include'_css.php'?>

    </head>

    <body>
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
           <div class="container-fluid">


              <a class="brand" href="#"><small><i class="icon-leaf"></i> Ace Admin</small> </a>
              <ul class="nav ace-nav pull-right">
                    <li class="grey">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-tasks"></i>
                            <span class="badge">4</span>
                        </a>
                        <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                            <li class="nav-header">
                                <i class="icon-ok"></i> 4 Tasks to complete
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Software Update</span>
                                        <span class="pull-right">65%</span>
                                    </div>
                                    <div class="progress progress-mini"><div class="bar" style="width:65%"></div></div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Hardware Upgrade</span>
                                        <span class="pull-right">35%</span>
                                    </div>
                                    <div class="progress progress-mini progress-danger"><div class="bar" style="width:35%"></div></div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Unit Testing</span>
                                        <span class="pull-right">15%</span>
                                    </div>
                                    <div class="progress progress-mini progress-warning"><div class="bar" style="width:15%"></div></div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Bug Fixes</span>
                                        <span class="pull-right">90%</span>
                                    </div>
                                    <div class="progress progress-mini progress-success progress-striped active"><div class="bar" style="width:90%"></div></div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    See tasks with details
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="purple">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bell-alt icon-animated-bell icon-only"></i>
                            <span class="badge badge-important">8</span>
                        </a>
                        <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
                            <li class="nav-header">
                                <i class="icon-warning-sign"></i> 8 Notifications
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left"><i class="icon-comment btn btn-mini btn-pink"></i> New comments</span>
                                        <span class="pull-right badge badge-info">+12</span>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <i class="icon-user btn btn-mini btn-primary"></i> Bob just signed up as an editor ...
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left"><i class="icon-shopping-cart btn btn-mini btn-success"></i> New orders</span>
                                        <span class="pull-right badge badge-success">+8</span>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left"><i class="icon-twitter btn btn-mini btn-info"></i> Followers</span>
                                        <span class="pull-right badge badge-info">+4</span>
                                    </div>
                                </a>
                            </li>
                                                                
                            <li>
                                <a href="#">
                                    See all notifications
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="green">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-envelope-alt icon-animated-vertical icon-only"></i>
                            <span class="badge badge-success">5</span>
                        </a>
                        <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                            <li class="nav-header">
                                <i class="icon-envelope"></i> 5 Messages
                            </li>
                            
                            <li>
                                <a href="#">
                                    <img alt="Alex's Avatar" class="msg-photo" src="media/images/avatar.png" />
                                    <span class="msg-body">
                                        <span class="msg-title">
                                            <span class="blue">Alex:</span>
                                            Ciao sociis natoque penatibus et auctor ...
                                        </span>
                                        <span class="msg-time">
                                            <i class="icon-time"></i> <span>a moment ago</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <img alt="Susan's Avatar" class="msg-photo" src="media/images/avatar3.png" />
                                    <span class="msg-body">
                                        <span class="msg-title">
                                            <span class="blue">Susan:</span>
                                            Vestibulum id ligula porta felis euismod ...
                                        </span>
                                        <span class="msg-time">
                                            <i class="icon-time"></i> <span>20 minutes ago</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <img alt="Bob's Avatar" class="msg-photo" src="media/images/avatar4.png" />
                                    <span class="msg-body">
                                        <span class="msg-title">
                                            <span class="blue">Bob:</span>
                                            Nullam quis risus eget urna mollis ornare ...
                                        </span>
                                        <span class="msg-time">
                                            <i class="icon-time"></i> <span>3:15 pm</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    See all messages
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>                                   
    
                        </ul>
                    </li>


                    <li class="light-blue user-profile">
                        <a class="user-menu dropdown-toggle" href="#" data-toggle="dropdown">
                            <img alt="Jason's Photo" src="media/images/user.jpg" class="nav-user-photo" />
                            <span id="user_info">
                                <small>Welcome,</small> Jason
                            </span>
                            <i class="icon-caret-down"></i>
                        </a>
                        <ul id="user_menu" class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                            <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>




              </ul><!--/.ace-nav-->

           </div><!--/.container-fluid-->
          </div><!--/.navbar-inner-->
        </div><!--/.navbar-->

        <div class="container-fluid" id="main-container">
            <a href="#" id="menu-toggler"><span></span></a><!-- menu toggler -->

            <div id="sidebar">
                
                <div id="sidebar-shortcuts">
                    <div id="sidebar-shortcuts-large">
                        <button class="btn btn-small btn-success"><i class="icon-signal"></i></button>
                        <button class="btn btn-small btn-info"><i class="icon-pencil"></i></button>
                        <button class="btn btn-small btn-warning"><i class="icon-group"></i></button>
                        <button class="btn btn-small btn-danger"><i class="icon-cogs"></i></button>
                    </div>
                    <div id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>
                        <span class="btn btn-info"></span>
                        <span class="btn btn-warning"></span>
                        <span class="btn btn-danger"></span>
                    </div>
                </div><!-- #sidebar-shortcuts -->

                <ul class="nav nav-list">
                    
                    <li>
                      <a href="index.php">
                        <i class="icon-dashboard"></i>
                        <span>Dashboard</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="typography.php">
                        <i class="icon-text-width"></i>
                        <span>Typography</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="#" class="dropdown-toggle" >
                        <i class="icon-desktop"></i>
                        <span>UI Elements</span>
                        <b class="arrow icon-angle-down"></b>
                      </a>
                      <ul class="submenu">
                        <li><a href="elements.php"><i class="icon-double-angle-right"></i> Elements</a></li>
                        <li><a href="buttons.php"><i class="icon-double-angle-right"></i> Buttons & Icons</a></li>
                      </ul>
                    </li>

                    
                    <li class="active">
                      <a href="tables.php">
                        <i class="icon-list"></i>
                        <span>Tables</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="#" class="dropdown-toggle" >
                        <i class="icon-edit"></i>
                        <span>Forms</span>
                        <b class="arrow icon-angle-down"></b>
                      </a>
                      <ul class="submenu">
                        <li><a href="form-elements.php"><i class="icon-double-angle-right"></i> Form Elements</a></li>
                        <li><a href="form-wizard.php"><i class="icon-double-angle-right"></i> Wizard & Validation</a></li>
                      </ul>
                    </li>

                    
                    <li>
                      <a href="widgets.php">
                        <i class="icon-list-alt"></i>
                        <span>Widgets</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="calendar.php">
                        <i class="icon-calendar"></i>
                        <span>Calendar</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="gallery.php">
                        <i class="icon-picture"></i>
                        <span>Gallery</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="grid.php">
                        <i class="icon-th"></i>
                        <span>Grid</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="#" class="dropdown-toggle" >
                        <i class="icon-file"></i>
                        <span>Other Pages</span>
                        <b class="arrow icon-angle-down"></b>
                      </a>
                      <ul class="submenu">
                        <li><a href="pricing.php"><i class="icon-double-angle-right"></i> Pricing Tables</a></li>
                        <li><a href="invoice.php"><i class="icon-double-angle-right"></i> Invoice</a></li>
                        <li><a href="login.php"><i class="icon-double-angle-right"></i> Login & Register</a></li>
                        <li><a href="error-404.php"><i class="icon-double-angle-right"></i> Error 404</a></li>
                        <li><a href="error-500.php"><i class="icon-double-angle-right"></i> Error 500</a></li>
                        <li><a href="blank.php"><i class="icon-double-angle-right"></i> Blank Page</a></li>
                      </ul>
                    </li>

                    
                </ul><!--/.nav-list-->

                <div id="sidebar-collapse"><i class="icon-double-angle-left"></i></div>


            </div><!--/#sidebar-->

        
            <div id="main-content" class="clearfix">
                    
                    <div id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><i class="icon-home"></i> <a href="#">Home</a><span class="divider"><i class="icon-angle-right"></i></span></li>
                            <li class="active">Tables</li>
                        </ul><!--.breadcrumb-->

                        <div id="nav-search">
                            <form class="form-search">
                                    <span class="input-icon">
                                        <input autocomplete="off" id="nav-search-input" type="text" class="input-small search-query" placeholder="Search ..." />
                                        <i id="nav-search-icon" class="icon-search"></i>
                                    </span>
                            </form>
                        </div><!--#nav-search-->
                    </div><!--#breadcrumbs-->



                    <div id="page-content" class="clearfix">
                        
                        <div class="page-header position-relative">
                            <h1>Tables <small><i class="icon-double-angle-right"></i> Static & Dynamic Tables</small></h1>
                        </div><!--/page-header-->

                        

                        <div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->


<div class="row-fluid">
    <div class="span12">
        <table id="table_bug_report" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="center">
                        <label><input type="checkbox" /><span class="lbl"></span></label>
                    </th>
                    <th>Domain</th>
                    <th>Price</th>
                    <th class="hidden-480">Clicks</th>
                    <th class="hidden-phone"><i class="icon-time hidden-phone"></i> Update</th>
                    <th class="hidden-480">Status</th>
                    <th></th>
                </tr>
            </thead>
                                    
            <tbody>
            
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>ace.com</a></td>
                    <td>$45</td>
                    <td class='hidden-480'>3,330</td>
                    <td class='hidden-phone'>Feb 12</td>
                    <td class='hidden-480'><span class='label label-warning'>Expiring</span></td>
                    <td>
                        <div class="inline position-relative">
                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-cog icon-only"></i></button>
                            <ul class="dropdown-menu dropdown-icon-only dropdown-light pull-right dropdown-caret dropdown-close">
                                <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>base.com</a></td>
                    <td>$35</td>
                    <td class='hidden-480'>2,595</td>
                    <td class='hidden-phone'>Feb 18</td>
                    <td class='hidden-480'><span class='label label-success'>Registered</span></td>
                    <td>
                        <div class="inline position-relative">
                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-cog icon-only"></i></button>
                            <ul class="dropdown-menu dropdown-icon-only dropdown-light pull-right dropdown-caret dropdown-close">
                                <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>max.com</a></td>
                    <td>$60</td>
                    <td class='hidden-480'>4,400</td>
                    <td class='hidden-phone'>Mar 11</td>
                    <td class='hidden-480'><span class='label label-warning'>Expiring</span></td>
                    <td>
                        <div class="inline position-relative">
                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-cog icon-only"></i></button>
                            <ul class="dropdown-menu dropdown-icon-only dropdown-light pull-right dropdown-caret dropdown-close">
                                <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>best.com</a></td>
                    <td>$75</td>
                    <td class='hidden-480'>6,500</td>
                    <td class='hidden-phone'>Apr 03</td>
                    <td class='hidden-480'><span class='label label-inverse arrowed-in'>Flagged</span></td>
                    <td>
                        <div class="inline position-relative">
                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-cog icon-only"></i></button>
                            <ul class="dropdown-menu dropdown-icon-only dropdown-light pull-right dropdown-caret dropdown-close">
                                <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>pro.com</a></td>
                    <td>$55</td>
                    <td class='hidden-480'>4,250</td>
                    <td class='hidden-phone'>Jan 21</td>
                    <td class='hidden-480'><span class='label label-success'>Registered</span></td>
                    <td>
                        <div class="inline position-relative">
                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-cog icon-only"></i></button>
                            <ul class="dropdown-menu dropdown-icon-only dropdown-light pull-right dropdown-caret dropdown-close">
                                <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                
                            </tbody>
        </table>
    </div><!--/span-->
</div><!--/row-->



<div class="row-fluid">
    <h3 class="header smaller lighter blue">jQuery dataTables</h3>
    <div class="table-header">
        Results for "Latest Registered Domains"
    </div>
    
        <table id="table_report" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="center">
                        <label><input type="checkbox" /><span class="lbl"></span></label>
                    </th>
                    <th>Domain</th>
                    <th>Price</th>
                    <th class="hidden-480">Clicks</th>
                    <th class="hidden-phone"><i class="icon-time hidden-phone"></i> Update</th>
                    <th class="hidden-480">Status</th>
                    <th></th>
                </tr>
            </thead>
                                    
            <tbody>
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>ace.com</a></td>
                    <td>$45</td>
                    <td class='hidden-480'>3,330</td>
                    <td class='hidden-phone'>Feb 12</td>
                    <td class='hidden-480'><span class='label label-warning'>Expiring</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>base.com</a></td>
                    <td>$35</td>
                    <td class='hidden-480'>2,595</td>
                    <td class='hidden-phone'>Feb 18</td>
                    <td class='hidden-480'><span class='label label-success'>Registered</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>max.com</a></td>
                    <td>$60</td>
                    <td class='hidden-480'>4,400</td>
                    <td class='hidden-phone'>Mar 11</td>
                    <td class='hidden-480'><span class='label label-warning'>Expiring</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>best.com</a></td>
                    <td>$75</td>
                    <td class='hidden-480'>6,500</td>
                    <td class='hidden-phone'>Apr 03</td>
                    <td class='hidden-480'><span class='label label-inverse arrowed-in'>Flagged</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>pro.com</a></td>
                    <td>$55</td>
                    <td class='hidden-480'>4,250</td>
                    <td class='hidden-phone'>Jan 21</td>
                    <td class='hidden-480'><span class='label label-success'>Registered</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>team.com</a></td>
                    <td>$40</td>
                    <td class='hidden-480'>3,200</td>
                    <td class='hidden-phone'>Feb 09</td>
                    <td class='hidden-480'><span class='label label-inverse arrowed-in'>Flagged</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>up.com</a></td>
                    <td>$95</td>
                    <td class='hidden-480'>8,520</td>
                    <td class='hidden-phone'>Feb 22</td>
                    <td class='hidden-480'><span class='label label-info arrowed arrowed-right'>Sold</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>view.com</a></td>
                    <td>$45</td>
                    <td class='hidden-480'>4,100</td>
                    <td class='hidden-phone'>Mar 12</td>
                    <td class='hidden-480'><span class='label label-success'>Registered</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>nice.com</a></td>
                    <td>$38</td>
                    <td class='hidden-480'>3,940</td>
                    <td class='hidden-phone'>Feb 12</td>
                    <td class='hidden-480'><span class='label label-info arrowed arrowed-right'>Sold</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>fine.com</a></td>
                    <td>$25</td>
                    <td class='hidden-480'>2,983</td>
                    <td class='hidden-phone'>Apr 01</td>
                    <td class='hidden-480'><span class='label label-warning'>Expiring</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>good.com</a></td>
                    <td>$50</td>
                    <td class='hidden-480'>6,500</td>
                    <td class='hidden-phone'>Feb 02</td>
                    <td class='hidden-480'><span class='label label-inverse arrowed-in'>Flagged</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>great.com</a></td>
                    <td>$55</td>
                    <td class='hidden-480'>6,400</td>
                    <td class='hidden-phone'>Feb 24</td>
                    <td class='hidden-480'><span class='label label-success'>Registered</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>shine.com</a></td>
                    <td>$25</td>
                    <td class='hidden-480'>2,200</td>
                    <td class='hidden-phone'>Apr 01</td>
                    <td class='hidden-480'><span class='label label-inverse arrowed-in'>Flagged</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>rise.com</a></td>
                    <td>$42</td>
                    <td class='hidden-480'>3,900</td>
                    <td class='hidden-phone'>Feb 01</td>
                    <td class='hidden-480'><span class='label label-info arrowed arrowed-right'>Sold</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>above.com</a></td>
                    <td>$35</td>
                    <td class='hidden-480'>3,420</td>
                    <td class='hidden-phone'>Mar 12</td>
                    <td class='hidden-480'><span class='label label-warning'>Expiring</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>share.com</a></td>
                    <td>$30</td>
                    <td class='hidden-480'>3,200</td>
                    <td class='hidden-phone'>Feb 11</td>
                    <td class='hidden-480'><span class='label label-info arrowed arrowed-right'>Sold</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>fair.com</a></td>
                    <td>$35</td>
                    <td class='hidden-480'>3,900</td>
                    <td class='hidden-phone'>Mar 26</td>
                    <td class='hidden-480'><span class='label label-inverse arrowed-in'>Flagged</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>year.com</a></td>
                    <td>$48</td>
                    <td class='hidden-480'>3,990</td>
                    <td class='hidden-phone'>Feb 15</td>
                    <td class='hidden-480'><span class='label label-warning'>Expiring</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>day.com</a></td>
                    <td>$55</td>
                    <td class='hidden-480'>5,600</td>
                    <td class='hidden-phone'>Jan 29</td>
                    <td class='hidden-480'><span class='label label-info arrowed arrowed-right'>Sold</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>light.com</a></td>
                    <td>$40</td>
                    <td class='hidden-480'>3,100</td>
                    <td class='hidden-phone'>Feb 17</td>
                    <td class='hidden-480'><span class='label label-success'>Registered</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>sight.com</a></td>
                    <td>$58</td>
                    <td class='hidden-480'>6,100</td>
                    <td class='hidden-phone'>Feb 19</td>
                    <td class='hidden-480'><span class='label label-inverse arrowed-in'>Flagged</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td><a href='#'>right.com</a></td>
                    <td>$50</td>
                    <td class='hidden-480'>4,400</td>
                    <td class='hidden-phone'>Apr 01</td>
                    <td class='hidden-480'><span class='label label-warning'>Expiring</span></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <button class='btn btn-mini btn-success'><i class='icon-ok'></i></button>
                            <button class='btn btn-mini btn-info'><i class='icon-edit'></i></button>
                            <button class='btn btn-mini btn-danger'><i class='icon-trash'></i></button>
                            <button class='btn btn-mini btn-warning'><i class='icon-flag'></i></button>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                
                            </tbody>
        </table>
    
</div>


 
 
<!-- PAGE CONTENT ENDS HERE -->
                         </div><!--/row-->
    
                    </div><!--/#page-content-->
                      

                    <div id="ace-settings-container">
                        <div class="btn btn-app btn-mini btn-warning" id="ace-settings-btn">
                            <i class="icon-cog"></i>
                        </div>
                        <div id="ace-settings-box">
                            <div>
                                <div class="pull-left">
                                    <select id="skin-colorpicker" class="hidden">
                                        <option data-class="default" value="#438EB9">#438EB9</option>
                                        <option data-class="skin-1" value="#222A2D">#222A2D</option>
                                        <option data-class="skin-2" value="#C6487E">#C6487E</option>
                                        <option data-class="skin-3" value="#D0D0D0">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>
                            <div><input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" /><label class="lbl" for="ace-settings-header"> Fixed Header</label></div>
                            <div><input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" /><label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label></div>
                        </div>
                    </div><!--/#ace-settings-container-->


            </div><!-- #main-content -->


        </div><!--/.fluid-container#main-container-->




        <a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
            <i class="icon-double-angle-up icon-only"></i>
        </a>


        <?php include"_script.php"?>


        <!-- inline scripts related to this page -->
        
        <script type="text/javascript">
        $(function() {


    var oTable1 = $('#table_report').dataTable( {
    "aoColumns": [
      { "bSortable": false },
      null, null,null, null, null,
      { "bSortable": false }
    ] } );
    
    
    $('table th input:checkbox').on('click' , function(){
        var that = this;
        $(this).closest('table').find('tr > td:first-child input:checkbox')
        .each(function(){
            this.checked = that.checked;
            $(this).closest('tr').toggleClass('selected');
        });
            
    });

    $('[data-rel=tooltip]').tooltip();
})

        </script>

    </body>
</html>
