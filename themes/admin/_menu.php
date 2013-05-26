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
        <li <?php echo menu_active('demo',false,'index')?>>
          <a href="demo/admin/demo/index">
            <i class="icon-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li <?php echo menu_active('demo',false,'typography')?>>
          <a href="demo/admin/demo/typography">
            <i class="icon-text-width"></i>
            <span>Typography</span>
          </a>
        </li>

        
        <li <?php echo menu_active('demo',false,'elements')?> <?php echo menu_active('demo',false,'buttons')?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-desktop"></i>
            <span>UI Elements</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo menu_active('demo',false,'elements')?>><a href="demo/admin/demo/elements"><i class="icon-double-angle-right"></i> Elements</a></li>
            <li <?php echo menu_active('demo',false,'buttons')?>><a href="demo/admin/demo/buttons"><i class="icon-double-angle-right"></i> Buttons & Icons</a></li>
          </ul>
        </li>

        
        <li <?php echo menu_active('demo',false,'tables')?>>
          <a href="demo/admin/demo/tables">
            <i class="icon-list"></i>
            <span>Tables</span>
            
          </a>
        </li>

        
        <li <?php echo menu_active('demo',false,'form_elements','active open')?> <?php echo menu_active('demo',false,'form_wizard','active open')?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-edit"></i>
            <span>Forms</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo menu_active('demo',false,'form_elements')?>><a href="demo/admin/demo/form_elements"><i class="icon-double-angle-right"></i> Form Elements</a></li>
            <li <?php echo menu_active('demo',false,'form_wizard')?>><a href="demo/admin/demo/form_wizard"><i class="icon-double-angle-right"></i> Wizard & Validation</a></li>
          </ul>
        </li>

        
        <li <?php echo menu_active('demo',false,'widgets')?>>
          <a href="demo/admin/demo/widgets">
            <i class="icon-list-alt"></i>
            <span>Widgets</span>
            
          </a>
        </li>

        
        <li <?php echo menu_active('demo',false,'calendar')?>>
          <a href="demo/admin/demo/calendar">
            <i class="icon-calendar"></i>
            <span>Calendar</span>
            
          </a>
        </li>

        
        <li <?php echo menu_active('demo',false,'gallery')?>>
          <a href="demo/admin/demo/gallery">
            <i class="icon-picture"></i>
            <span>Gallery</span>
            
          </a>
        </li>

        
        <li <?php echo menu_active('demo',false,'grid')?>>
          <a href="demo/admin/demo/grid">
            <i class="icon-th"></i>
            <span>Grid</span>
            
          </a>
        </li>

        
        <li <?php echo menu_active('demo',false,'pricing','active open')?><?php echo menu_active('demo',false,'invoice','active open')?><?php echo menu_active('demo',false,'login','active open')?><?php echo menu_active('demo',false,'error_404','active open')?><?php echo menu_active('demo',false,'error_500','active open')?><?php echo menu_active('demo',false,'blank','active open')?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-file"></i>
            <span>Other Pages</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo menu_active('demo',false,'pricing')?>><a href="demo/admin/demo/pricing"><i class="icon-double-angle-right"></i> Pricing Tables</a></li>
            <li <?php echo menu_active('demo',false,'invoice')?>><a href="demo/admin/demo/invoice"><i class="icon-double-angle-right"></i> Invoice</a></li>
            <li <?php echo menu_active('demo',false,'login')?>><a href="themes/_admin/login.php"><i class="icon-double-angle-right"></i> Login & Register</a></li>
            <li <?php echo menu_active('demo',false,'error_404')?>><a href="demo/admin/demo/error_404"><i class="icon-double-angle-right"></i> Error 404</a></li>
            <li <?php echo menu_active('demo',false,'error_500')?>><a href="demo/admin/demo/error_500"><i class="icon-double-angle-right"></i> Error 500</a></li>
            <li <?php echo menu_active('demo',false,'blank')?>><a href="demo/admin/demo/blank"><i class="icon-double-angle-right"></i> Blank Page</a></li>
          </ul>
        </li>
        
        <li>----- END Demo -----</li>

        <li <?php echo menu_active('hilights','hilights')?>>
          <a href="hilights/admin/hilights">
            <i class="icon-th"></i>
            <span>Hilight</span>
          </a>
        </li>
        
        <li <?php echo menu_active('abouts','abouts')?>>
          <a href="abouts/admin/abouts/form">
            <i class="icon-th"></i>
            <span>About Us</span>
          </a>
        </li>
        
        <li <?php echo menu_active('addresses','addresses')?>>
          <a href="addresses/admin/addresses/form">
            <i class="icon-th"></i>
            <span>Address</span>
          </a>
        </li>
        
        <li <?php echo menu_active('informations','informations')?>>
          <a href="informations/admin/informations">
            <i class="icon-th"></i>
            <span>Informations</span>
          </a>
        </li>
        
        <li <?php echo menu_active('address','address')?>>
          <a href="addresses/admin/addresses/form">
            <i class="icon-th"></i>
            <span>Gallery</span>
          </a>
        </li>
        
        <li <?php echo menu_active('address','address')?>>
          <a href="addresses/admin/addresses/form">
            <i class="icon-th"></i>
            <span>Contect Us</span>
          </a>
        </li>
        
        <li <?php echo menu_active('address','address')?>>
          <a href="addresses/admin/addresses/form">
            <i class="icon-th"></i>
            <span>Dashboard</span>
          </a>
        </li>
        
    </ul><!--/.nav-list-->

    <div id="sidebar-collapse"><i class="icon-double-angle-left"></i></div>


</div><!--/#sidebar-->