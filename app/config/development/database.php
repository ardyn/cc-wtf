<?php

return array(
    'connections' => array(
        'mysql' => array(
            'driver'    => 'mysql',
            'host'      => '127.0.0.1',
            'database'  => 'ss_crm',
            'username'  => 'root',
            'password'  => 'vagrant',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ),
        'mongodb' => array(
            'driver'   => 'mongodb',
            'host'     => 'localhost',
            'database' => 'ssmongo',
            'username' => '',
            'password' => '',
            'port'  => '27000',
        ),
    ),
);