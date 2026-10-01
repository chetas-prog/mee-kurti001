<?php
defined('BASEPATH') or exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'        => '',
    'hostname'   => 'mainline.proxy.rlwy.net:13860',
    'username'   => getenv('MYSQLUSER'),
    'password'   => getenv('MYSQLPASSWORD'),
    'database'   => 'railway',
    'dbdriver'   => 'mysqli',
    'dbprefix'   => '',
    'pconnect'   => FALSE,
    'db_debug'   => (ENVIRONMENT !== 'production'),
    'cache_on'   => FALSE,
    'cachedir'   => '',
    'char_set'   => 'utf8mb4',
    'dbcollat'   => 'utf8mb4_unicode_ci',
    'swap_pre'   => '',
    'encrypt'    => FALSE,
    'compress'   => FALSE,
    'stricton'   => FALSE,
    'failover'   => array(),
    'save_queries' => TRUE
);
