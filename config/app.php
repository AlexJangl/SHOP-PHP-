<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS','');
define('DB_CHARSET','utf8');
define('DB_NAME','shop');
define('SECRET_KEY', 'secret');

define('APP', substr(str_replace("\\","/", __DIR__), 0,-7).'/src');

define('SMARTY_CACHE',false);
