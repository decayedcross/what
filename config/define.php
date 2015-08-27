<?php
require_once('/home/mndyrs/public_html/development/what/configuration.php');

$config = new JConfig();
define('DB_HOST', $config->host);
define('DB_USER', $config->user);
define('DB_PASS', $config->password);
define('DB_NAME', $config->db);
define('ENC_PATH', '/home/mndyrs/public_html/development/what/templates/what/enclave/php/');
define('ROUTE', '/home/mndyrs/public_html/development/what/templates/what/views/');
define('PHP_FILE_EXT', '.php');
define('INCLUDE_PATH', '/home/mndyrs/public_html/development/what/templates/what');
define('CSS_PATH', '/css/');
define('CSS_EXT', '.css');
define('YOUTUBE_API_KEY', 'AIzaSyAG8sGfe9sKKQ-Io0wprlkLD7iGDTETwCg');
define('YOUTUBE_API_BASE', 'https://www.googleapis.com/youtube/v3/videos');
define('YOUTUBE_API_PLAYLISTITEMS', 'https://www.googleapis.com/youtube/v3/playlistItems');
define('YOUTUBE_CHANNEL', 'https://www.youtube.com/channel/');
define('YOUTUBE_WATCH', 'https://www.youtube.com/watch?v=');
define('YOUTUBE_EMBED', 'https://www.youtube.com/embed/');
?>