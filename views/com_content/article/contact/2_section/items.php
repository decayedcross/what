<?php
//ARTICLE
//CONTACT
//SECTION #2
//ITEMS
use Antfuentes\Titan\Framework;
$h = new Framework\Html;

$labels = array(0 => 'name', 1 => 'email', 2 => 'subject', 3 => 'message', 4 => 'copy');
$listLabel = '{"class":"list-label col col-xs-12"}';
$listContainer = '{"class":"list-container col col-xs-12"}';
$listInput = '" class":"list-input col col-xs-6"';
$listCheckbox = '" class":"list-checkbox"';
$listBtn = '" class":"list-btn"';

if(array_key_exists($this->key, $labels)){
	$h->b('dt', 0, 1, '', $listLabel);
		$h->b('label', 0, 1, '', '{"for":"'.$labels[$this->key].'"}');
			$h->e(1, $this->content.' *');
		$h->b('label', 1, 1);
	$h->b('dt', 1, 1);
}

switch($this->key){
	case 0:
	case 2:
		$h->b('dd', 0, 1, '', $listContainer);
			$h->b('input', 0, 1, '', '{"type":"text", "id":"'.$labels[$this->key].'", "required":"", '.$listInput.'}');
		$h->b('dd', 1, 1);
	break;
	case 1:
		$h->b('dd', 0, 1, '', $listContainer);
			$h->b('input', 0, 1, '', '{"type":"'.$labels[$this->key].'", "id":"'.$labels[$this->key].'", "required":"", '.$listInput.'}');
		$h->b('dd', 1, 1);
	break;
	case 3:
		$h->b('dd', 0, 1, '', $listContainer);
			$h->b('textarea', 0, 1, '', '{"id":"'.$labels[$this->key].'", "required":"", '.$listInput.'}');
			$h->b('textarea', 1, 1);
		$h->b('dd', 1, 1);
	break;
	case 4:
		$h->b('dd', 0, 1, '', $listContainer);
			$h->b('input', 0, 1, '', '{"type":"checkbox", "id":"'.$labels[$this->key].'", '.$listCheckbox.'}');
		$h->b('dd', 1, 1);
	break;
	case 5:
		$h->b('dd', 0, 1, '', $listContainer);
			$h->b('input', 0, 1, '', '{"type":"submit", "value":"'.trim($this->content).'", '.$listBtn.'}');
		$h->b('dd', 1, 1);
	break;
}
