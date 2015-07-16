<?php
require_once('templates/what/enclave/php/enc_FLEX.php');
$flex = new enc_FLEX();
$app = JFactory::getApplication(); // Access the Application Object
$menu = $app->getMenu(); // Load the JMenuSite Object
$active = $menu->getActive(); // Load the Active Menu Item as an stdClass Object

require_once('vendor/_load.php');
require_once('template/_load.php');

$sectionArray = $flex->buildLayout($active->alias);
$flex->layoutJS($sectionArray, $active->alias);
?>
