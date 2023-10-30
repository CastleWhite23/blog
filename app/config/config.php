<?php

if (!defined('DB_NAME'))
    define('DB_NAME', 'db_postagens');

if (!defined('DB_USER'))
    define('DB_USER', 'root');

if (!defined('DB_PASSWORD'))
    define('DB_PASSWORD', '');

if (!defined('DB_HOST'))
    define('DB_HOST', 'localhost');



//caminho absoluto da pasta
if (!defined('ABSPATH'))
    define('ABSPATH',  dirname(dirname(dirname(__FILE__))) . '/');

//caminho no server para o sistema 
if (!defined('BASEURL'))
    define('BASEURL', '/blog/');

if (!defined('DBAPI'))
    define('DBAPI', ABSPATH . 'app/inc/database.php');

//caminho para verificação de session

if (!defined('LOGIN_VERIFICATION'))
    define('LOGIN_VERIFICATION', ABSPATH . 'views/layouts/verification.php');


if (!defined('HEADER_TEMPLATE'))
    define('HEADER_TEMPLATE', ABSPATH . 'views/layouts/header.php');

if (!defined('FOOTER_TEMPLATE'))
    define('FOOTER_TEMPLATE', ABSPATH . 'views/layouts/footer.php');
