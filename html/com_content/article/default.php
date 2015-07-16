<?php
defined('_JEXEC') or die;
require('templates/what/enclave/php/enc_FLEX.php');
$flex = new enc_FLEX();
$sectionArray = $flex->buildLayout($this->item->alias);
$flex->layout($sectionArray, $this->item->alias);
?>