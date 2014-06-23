<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @yield('metas')
        <title>@yield('page-title')</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/styles.css"/>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    </head>
    <body>
        <div class="wraper">
            <header class="header">
                <div class="header_nav">
                    <div class="logo">
                        <img src="/images/logo.png">
                    </div>
                    <div class="nav">
                        <ul>
                            <li>
                                <i class="fa fa-user fa-fw"></i> <a href="javascript:void(0);">Jon Doe</a>
                            </li>
                            <li>
                                <i class="fa fa-cog"></i> <a href="javascript:void(0);">Settings</a>
                            </li>
                            <li>
                                <i class="fa fa-bell"></i> <a href="javascript:void(0);">Notifications</a>
                            </li>
                        </ul>
                    </div>
                    <div class="search">
                        {{ Form::text('search', '', ['placeholder' => 'Search']) }}
                    </div>
                </div>
            </header>
        </div>

        <footer>
        @yield('js-scripts')
        </footer>
    </body>
</html>