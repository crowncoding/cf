<?php
if ($_SERVER['HTTP_HOST'] == 'cf') {
    define('DB_NAME', 'celebsfeet');
    define('DB_USER', 'celebsfeet');
    define( 'WP_HOME', 'https://cf:8890' );
    define( 'WP_SITEURL', 'https://cf:8890' );
    define('DB_HOST', 'localhost');
    define('DB_PASSWORD', 'Cummy_Soles1!');
    define('DB_CHARSET', 'utf8mb4');
    define('DB_COLLATE', '');
} else if ($_SERVER['HTTP_HOST'] ==  'dev.celebsfeetandsoles.com'){
    include('/var/www/vhosts/celebsfeetandsoles.com/wp-config.php');
} else if ($_SERVER['HTTP_HOST'] ==  'celebsfeetandsoles.com'){
    include('/var/www/vhosts/celebsfeetandsoles.com/wp-config.php');
}