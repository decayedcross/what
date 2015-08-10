<?php 
defined('_JEXEC') or die;

/*LETS GET THE PARTY STARTED*/
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'what');
define('ENC_PATH', 'templates/what/enclave/php/');
define('ROUTE', 'templates/what/views/');
define('PHP_FILE_EXT', '.php');
define('INCLUDE_PATH', 'templates/what');
define('CSS_PATH', '/css/');
define('CSS_EXT', '.css');
define('YOUTUBE_API_KEY', 'AIzaSyAG8sGfe9sKKQ-Io0wprlkLD7iGDTETwCg');
define('YOUTUBE_API_BASE', 'https://www.googleapis.com/youtube/v3/videos');
define('YOUTUBE_API_PLAYLISTITEMS', 'https://www.googleapis.com/youtube/v3/playlistItems');
define('YOUTUBE_CHANNEL', 'https://www.youtube.com/channel/');
define('YOUTUBE_WATCH', 'https://www.youtube.com/watch?v=');
define('YOUTUBE_EMBED', 'https://www.youtube.com/embed/');

spl_autoload_register('WhatAutoLoader');

function WhatAutoLoader($className){
	$file = str_replace('\\',DIRECTORY_SEPARATOR,$className);
    require_once ENC_PATH.$file.PHP_FILE_EXT;
}

use joomla\database;
use joomla\menu;
use joomla\router;
use joomla\article;
use framework\html;

$h = new html();
$db = new database();
$menu = new menu();
$router = new router();
$article = new article();

?>
<!DOCTYPE html>
	<html lang="en">
		<head>
            <?php
			$router->head(__DIR__);
			?>
			<div id="fb-root"></div>
			<script src="templates/what/js/facebook.js"></script>
			<script src="templates/what/js/twitter.js"></script>
			<script src="https://apis.google.com/js/platform.js"></script>
		</head>
		<body>
			<?php
			$article->sections(__DIR__.'/views/com_content/article/header', 'header', 'header', 'off');
			//echo JRequest::getVar('id');
			//$menu->build('topmenu', 'li', JRequest::getVar('Itemid'), 'MyId', 'MyClass');
			$h->b('main', 0, 1);
			$router->route(JRequest::getVar('id'), ROUTE, JRequest::getVar('option'), JRequest::getVar('view'), JRequest::getVar('layout'));
			$h->b('main', 1, 1);
			//$router->route(ROUTE, JRequest::getVar('option'), JRequest::getVar('view'), JRequest::getVar('layout'), JDocumentHTML::getTitle());
			?>
			<script src="templates/what/bower/jquery/dist/jquery.min.js"></script>
			<script src="templates/what/bower/velocity/velocity.min.js"></script>

			<script src="templates/what/enclave/js/enclave.js"></script>
			<script src="templates/what/enclave/js/slider.js"></script>

			<script src="templates/what/bower/gsap/src/minified/jquery.gsap.min.js"></script>
			<script src="templates/what/bower/gsap/src/minified/TimelineLite.min.js"></script>
			<script src="templates/what/bower/gsap/src/minified/TimelineMax.min.js"></script>
			<script src="templates/what/bower/gsap/src/minified/TweenLite.min.js"></script>
			<script src="templates/what/bower/gsap/src/minified/TweenMax.min.js"></script>
			<script src="templates/what/bower/gsap/src/minified/easing/EasePack.min.js"></script>
			<script src="templates/what/bower/gsap/src/minified/plugins/CSSPlugin.min.js"></script>

			<script src="templates/what/js/load.js"></script>
		</body>
</html>