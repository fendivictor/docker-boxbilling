<?php 
return array (
  'debug' => false,
  'salt' => 'd0f6c4a31d384daf35b5ecfe7c74d972',
  'url' => 'http://localhost:8004/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => true,
  'timezone' => 'Asia/Jakarta',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/var/www/html/bb-data',
  'path_logs' => '/var/www/html/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'devmysql',
    'name' => 'boxbilling',
    'user' => 'root',
    'password' => '',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/var/www/html/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);