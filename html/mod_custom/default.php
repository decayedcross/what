<?php
defined('_JEXEC') or die;

$f = new enc_FLEX();

$section = $f->buildLayout($module->position);
$f->layout($section, $module->position);
?>