<?php
require_once('vendor/_load.php');
require_once('template/_load.php');

$f = new enc_FLEX();
$h = new enc_HTML();

$app = JFactory::getApplication();
$menu = $app->getMenu();
$active = $menu->getActive();
$alias = $active->alias;

$explode = explode("&", $active->link);
foreach($explode as $key => $val){
	$explode = explode("=", $val);;
	if($explode[0] == 'view'){
		$view = $explode[1];
	}
}

if($view == 'article'){
	$sectionArray = $f->buildLayout($active->alias);
	$f->layoutJS($sectionArray, $active->alias);
}
?>