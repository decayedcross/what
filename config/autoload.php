<?php
spl_autoload_register('whatAutoLoader');

function whatAutoLoader($className){
	$file = str_replace('\\',DIRECTORY_SEPARATOR,$className);
    require_once ENC_PATH.$file.PHP_FILE_EXT;
}
?>