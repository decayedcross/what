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


https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=UCwNlh9ns6PMbCkcRnjzuzwA&key={YOUR_API_KEY}

spl_autoload_register('WhatAutoLoader');

function WhatAutoLoader($className){
	$file = str_replace('\\',DIRECTORY_SEPARATOR,$className);
    require_once ENC_PATH.$file.PHP_FILE_EXT;
}

use joomla\database;
use joomla\menu;
use joomla\router;

$db = new database;
$menu = new menu;
$router = new router;

?>
<!DOCTYPE html>
	<html lang="en">
		<head>
            <?php
			$router->head(__DIR__);
			?>
		</head>
		<body>
			<?php
			//echo JRequest::getVar('id');
			$menu->build('topmenu', 'li', JRequest::getVar('Itemid'), 'MyId', 'MyClass');
			$router->routerv2(JRequest::getVar('id'), ROUTE, JRequest::getVar('option'), JRequest::getVar('view'), JRequest::getVar('layout'));
			//$router->route(ROUTE, JRequest::getVar('option'), JRequest::getVar('view'), JRequest::getVar('layout'), JDocumentHTML::getTitle());
			?>
		</body>
</html>