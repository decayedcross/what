<?php 
defined('_JEXEC') or die;
require_once('_define.php');
require_once('vendor/autoload.php');

use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;
//use Pelago\Emogrifier;
use MatthiasMullie\Minify;

$minifier = new Minify\JS(__DIR__.'/bower/jquery/dist/jquery.min.js');
$minifier->add(__DIR__.'/bower/matchHeight/jquery.matchHeight-min.js');
$minifier->add(__DIR__.'/bower/jquery.tap/jquery.tap.min.js');
$minifier->add(__DIR__.'/bower/gsap/src/minified/jquery.gsap.min.js');
$minifier->add(__DIR__.'/bower/gsap/src/minified/easing/EasePack.min.js');
$minifier->add(__DIR__.'/bower/gsap/src/minified/plugins/CSSPlugin.min.js');
$minifier->add(__DIR__.'/bower/gsap/src/minified/TweenLite.min.js');
$minifier->add(__DIR__.'/bower/wallop/js/Wallop.min.js');
$minifier->add(__DIR__.'/bower/leviathan/src/js/init.js');
$minifier->add(__DIR__.'/bower/leviathan/src/js/accordion.js');
$minifier->add(__DIR__.'/bower/leviathan/src/js/facebook.js');
$minifier->add(__DIR__.'/scripts/app.js');

$minifier->minify(__DIR__.'/scripts/load.js');

$router = new Joomla\Router();
$menu = new Joomla\Menu();
$db = new Joomla\Database();
//$emogrifier = new Pelago\Emogrifier();
$string = new Framework\String();
$h = new Framework\Html();
$module = new Joomla\Module();
$article = new Joomla\Article();

$router->load(JRequest::getVar('id'), ROUTE, JRequest::getVar('option'), JRequest::getVar('view'), JRequest::getVar('layout'), JFactory::getConfig(), JUri::getInstance(), JURI::base());
//$emogrifier->setHtml($router->init());
//$emogrifier->setCss(file_get_contents(__DIR__.'/css/load.css'));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
		$router->meta();
	?>
	  <link rel="stylesheet" href="templates/what/bower/font-awesome/css/font-awesome.min.css">
	  <style type="text/css">
		<?php echo file_get_contents(__DIR__.'/css/load.css'); ?>
		<?php echo file_get_contents(__DIR__.'/bower/wallop/css/wallop.css'); ?>
	  	<?php echo file_get_contents(__DIR__.'/css/noinject.css'); ?>
	  </style>
  </head>
  <body>
	  <div id="fb-root"></div>
    <?php
		if($router->routerView <> 'categories'){
			$module->loadSections($router->routerId, $router->categoryParentId, __DIR__, 'header');
		}
		$router->initRequire();
		//echo $emogrifier->emogrify();
	?>
	<script>
		<?php echo file_get_contents(__DIR__.'/scripts/load.js'); ?>
    </script>
  </body>
</html>