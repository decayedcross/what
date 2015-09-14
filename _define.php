<?php
$joomlaBaseDir = dirname(dirname(__DIR__));

if (!class_exists('JConfig')) {
   require($joomlaBaseDir.'/configuration.php');
}

$JConfig = new JConfig();

define('DB_HOST', $JConfig->host);
define('DB_USER', $JConfig->user);
define('DB_PASS', $JConfig->password);
define('DB_NAME', $JConfig->db);
define('ROUTE', __DIR__.'/views/');
define('INCLUDE_PATH', __DIR__);
define('PHP_EXT', '.php');
define('CSS_PATH', '/css/');
define('CSS_EXT', '.css');
define('YOUTUBE_API_KEY', 'AIzaSyAG8sGfe9sKKQ-Io0wprlkLD7iGDTETwCg');
define('YOUTUBE_API_BASE', 'https://www.googleapis.com/youtube/v3/videos');
define('YOUTUBE_API_PLAYLISTITEMS', 'https://www.googleapis.com/youtube/v3/playlistItems');
define('YOUTUBE_CHANNEL', 'https://www.youtube.com/channel/');
define('YOUTUBE_WATCH', 'https://www.youtube.com/watch?v=');
define('YOUTUBE_EMBED', 'https://www.youtube.com/embed/');
define('AUDIO_PATH', 'images/audio/');
define('GOOGLE_MAP_API', 'AIzaSyCZ2TUfs-xFUnhgcmTtkderv6_3-3QwmDQ');
?>