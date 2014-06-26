<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @yield('metas')
        <title>Welcome to CRM</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/styles.css"/>
        <!--<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
    </head>
    <body class="login">
        {{ Form::open() }}
        <div>
            <div class="logo">
                <img src="/images/login_logo.png">
            </div>

            <div class="login_area">
                <div>
                    <span>
                        {{ Form::input('text', 'username', '', ['placeholder' => 'Username']) }}
                        <label for="username">
                            <img src="/images/user_icon.png" alt="Username" />
                        </label>
                    </span>
                    <span class="user_thumb">
                        <span>. . .</span>
                        <img src="/images/user_thumbnail.png">
                        <span>. . .</span>
                    </span>
                    <span>
                        {{ Form::input('password', 'password', '', ['placeholder' => 'Password']) }}
                        <label for="password">
                            <img src="/images/pass_icon.png" alt="Password" />
                        </label>
                    </span>
                </div>
                <div>
                    {{ Form::submit('ENTER') }}
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </body>
</html>
