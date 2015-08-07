<?php
defined('_JEXEC') or die;

echo 'This is a article';


/*$f = new enc_FLEX();
$h = new enc_HTML();

$arr = array('id', 'title', 'alias', 'asset_id');

$query = $h->joomlaQueryArray('categories', $arr, 'id', $this->item->catid, 'id', 'DESC', 99);

foreach($query as $key => $data){
	if($data->alias == 'static'){
		$section = $f->buildLayout($this->item->alias);
		$f->layout($section, $this->item->alias);
	}else{
		$h->joomlaCategoryArticle($this->item, $data->alias);
	}
}*/
?>