<?php
defined('_JEXEC') or die;
?>
<?php
$x = 0;
foreach ($list as $i => &$item)
{
	if(isset($_GET['Itemid'])){
		if($_GET['Itemid'] == $item->id){
			echo '<li class="uk-active">';
		}else{
			echo '<li>';
		}
	}else{
		if($item->id == 101){
			echo '<li class="uk-active">';
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

	if ($item->deeper)
	{
		echo '<ul class="nav-child unstyled small">';
	}
	elseif ($item->shallower)
	{
		// The next item is shallower.
		echo '</li>';
		echo str_repeat('</ul></li>', $item->level_diff);
	}
	else
	{
		// The next item is on the same level.
		echo '</li>';
	}
}
?></ul>
