<?php 
defined('_JEXEC') or die;

spl_autoload_register('WhatAutoLoader');

function WhatAutoLoader($className){
	$file = str_replace('\\',DIRECTORY_SEPARATOR,$className);
    require_once 'templates/what/enclave/php/'.$file.'.php';
}

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'what');

use joomla\database;
use joomla\menu;

$db = new database;
$menu = new menu;

//$menu->load('topmenu');
//$db->tables();
//$db->columns($db->menu);
$menu->build('topmenu', 'li', JRequest::getVar('Itemid'), 'MyId', 'MyClass');
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
            <?php
			/*	if(file_exists('templates/'.$this->template.'/include/head.php')){
	  				require_once('templates/'.$this->template.'/include/head.php');
				}else{
					echo 'Can not find head.php @ templates/'.$this->template.'/include/';
				}
			*/
			?>
		</head>
		<body>
			<!-- <jdoc:include type="component" /> -->
			<?php
			$html = 'views/';

			if(JRequest::getVar('option')){
				$html .= JRequest::getVar('option').'/';
			}

			if(JRequest::getVar('view')){
				$html .= JRequest::getVar('view').'/';
			}

			if(JRequest::getVar('layout')){
				$html .= JRequest::getVar('layout').'/';
			}

			if(JDocumentHTML::getTitle()){
				$html .= strtolower(JDocumentHTML::getTitle()).'/';
			}

			$html .= 'default.php';

			require_once($html);

			//echo JDocumentHTML::getTitle();
			//echo JRequest::getVar('option');
			//echo JRequest::getVar('view');
			//echo JRequest::getVar('layout');
			//echo JRequest::getVar('id');
			//echo JRequest::getVar('Itemid');

			//var_dump(JDocumentHTML::getInstance());
			//require_once('views/'.JDocumentHTML::getTitle().'.php');

			//include 'templates/what/html/com_content/article/default.php';
			/*
				if(file_exists('templates/'.$this->template.'/include/body.php')){
	  				require_once('templates/'.$this->template.'/include/body.php');
				}else{
					echo 'Can not find body.php @ templates/'.$this->template.'/include/';
				}
			*/
			?>
		</body>
</html>