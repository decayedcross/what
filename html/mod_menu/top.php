<?php
defined('_JEXEC') or die;

foreach ($list as $i => &$item)
{
	if(isset($_GET['Itemid'])){
		if($_GET['Itemid'] == $item->id){
			echo '<li class="what-active">';
		}else{
			echo '<li>';
		}
	}else{
		if($item->id == 101){
			echo '<li class="what-active">';
		}else{
			echo '<li>';
		}
	}
	switch ($item->type) :
		case 'separator':
		case 'url':
		case 'component':
		case 'heading':
			require JModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
			break;

		default:
			require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
			break;
	endswitch;

	echo '</li>';
}
?>
