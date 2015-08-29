<?php 
defined('_JEXEC') or die;
require_once('_define.php');
require_once('vendor/autoload.php');

use Antfuentes\Titan\Joomla\Router;
use Pelago\Emogrifier;
use MatthiasMullie\Minify;

$minifier = new Minify\JS(__DIR__.'/bower/jquery/dist/jquery.min.js');
$minifier->add(__DIR__.'/bower/matchHeight/jquery.matchHeight-min.js');
$minifier->add(__DIR__.'/bower/gsap/src/minified/jquery.gsap.min.js');
$minifier->add(__DIR__.'/bower/gsap/src/minified/easing/EasePack.min.js');
$minifier->add(__DIR__.'/bower/gsap/src/minified/plugins/CSSPlugin.min.js');
$minifier->add(__DIR__.'/bower/gsap/src/minified/TweenLite.min.js');
$minifier->add(__DIR__.'/bower/leviathan/src/js/init.js');
$minifier->add(__DIR__.'/scripts/app.js');

$minifier->minify(__DIR__.'/scripts/load.js');

$router = new Router();
$emogrifier = new Pelago\Emogrifier();

$router->load(JRequest::getVar('id'), ROUTE, JRequest::getVar('option'), JRequest::getVar('view'), JRequest::getVar('layout'), JFactory::getConfig(), JUri::getInstance(), JURI::base());
$emogrifier->setHtml($router->init());
$emogrifier->setCss(file_get_contents(__DIR__.'/css/load.css'));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
		$router->meta();
	?>
  </head>
  <body>
    <?php
		echo $emogrifier->emogrify();
	?>
	<script>
		<?php echo file_get_contents(__DIR__.'/scripts/load.js'); ?>
	</script>
  </body>
</html>