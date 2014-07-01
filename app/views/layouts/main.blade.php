<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        @yield('metas')
        <title>@yield('page-title')</title>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/styles.css"/>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    </head>
    <body>
        <header class="gradient topSec">
            <section class="wrapper">
                <figure class="logo"><img src="/images/logo.png" alt="CRM Logo"></figure>
                <div class="floatRight">
                    <nav class="floatLeft">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-bell"></i>Notifications 
                                    <span class="notifaction pieClass">&nbsp;</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-cog"></i>Settings
                                </a>
                            </li>
                            <li>
                                <a href="#" id="profile-dropdown">
                                    <i class="fa fa-user fa-fw"></i>John Doe <i class="fa fa-caret-down"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <input class="innerShadow" type="text" id="search" name="search" placeholder="Search" />
                    <span class="btn">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
            </section><!-- Wrapper Clearfix End -->
        </header><!-- Header End -->

        <aside>
            <div class="sidebar-wrapper">
                <ul>
                    <li class="sideNav leftMenu" id="main_menu">
                        <a href="#" class="current">
                            <i class="fa fa-list"></i>
                        </a>
                    </li>
                    <li class="homenav current sideNav" >
                        <a href="#">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="calander sideNav">
                        <a href="#">
                            <i class="fa fa-calendar"></i>
                        </a>
                    </li>
                    <li class="users sideNav">
                        <a href="#">
                            <i class="fa fa-users"></i>
                        </a>
                    </li>
                    <li class="chart sideNav">
                        <a href="#">
                            <i class="fa fa-bar-chart-o"></i>
                        </a>
                    </li>
                    <li class="setting sideNav">
                        <a href="#">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div><!-- Side Bar Wrapper End -->
            <!-- Side Bar Menu Wrapper Start -->
            <div class="sidebar-menu-wrapper">
                <ul class="navigation" id="home" style="display:none;">
                    <li class="active"><a href="#leads">LEADS</a></li>
                    <li><a href="#upcoming">UPCOMING  EVENTS</a></li>
                    <li><a href="#daily">DAILY TASKS</a></li>
                    <li><a href="#recent">RECENT ACTIVITY</a></li>
                </ul><!-- Home Navigation End -->
                <ul class="navigation" id="calander" style="display:none;">
                    <li><a href="#calander">view calander</a></li>
                    <li><a href="#newevent">add new  EVENT</a></li>
                </ul><!-- Calander Navigation End -->
                <ul class="navigation" id="users" style="display:none;">
                    <li><a href="#invoice">invoices</a></li>
                    <li><a href="#service">services calls / fixits</a></li>
                    <li><a href="#estimate">estimates</a></li>
                    <li><a href="#notes">notes</a></li>
                    <li><a href="#payments">payments</a></li>
                    <li><a href="#removals">removals</a></li>
                    <li><a href="#contacts">known contacts</a></li>
                </ul><!-- Users Navigation End -->
                <ul class="navigation" id="chart" style="display:none;">
                    <li><a href="#">left</a></li>
                    <li><a href="#">UPCOMING  EVENTS</a></li>
                    <li><a href="#">DAILY TASKS</a></li>
                    <li><a href="#">RECENT ACTIVITY</a></li>
                </ul><!-- Chart Navigation End -->
                <ul class="navigation" id="setting" style="display:none;">
                    <li><a href="#inventory">inventory accounts</a></li>
                    <li><a href="#campaigns">Campaigns</a></li>
                    <li><a href="#ones">Zones</a></li>
                    <li><a href="#users">Users</a></li>
                    <li><a href="#employees">Employees</a></li>
                    <li><a href="#clients">Clients</a></li>
                    <li><a href="#fees">Fees</a></li>
                    <li><a href="#labor">Labors</a></li>
                    <li><a href="#roles">Roles</a></li>
                    <li><a href="#product">Products</a></li>
                    <li><a href="#categorie">Categories</a></li>
                </ul><!-- Seeting Navigation End -->
            </div><!-- Side Bar Menu Wrapper End -->
        </aside><!-- Navigation End -->

        @yield('content');

        <footer class="clearfix">
            <p class="floatLeft">CRM, All Rights Reserved, 2014</p>
            <p class="floatRight">Powered by <a href="#">Cooperative Computing</a></p>
            <script type="text/javascript" src="/js/configuration.js"></script>
            @yield('js-scripts')
        </footer>
    </body>
</html>