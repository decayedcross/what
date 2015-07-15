<?php
defined('_JEXEC') or die;
//require('templates/what/bower/enclave/php/enc_FLEX.php');
$flex = new enc_FLEX();
$sectionArray = $flex->buildLayout($module->title);
$flex->layout($sectionArray, $module->title);
?>