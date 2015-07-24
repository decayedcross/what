<?php
$introData = $this->catLeadArray;

$query = $this->joomlaQueryArray('categories', 'alias', 'id', $introData->catid, 'id', 'ASC', 99);

foreach($query as $key => $value){
	$alias = $value->alias;
}

$query = $this->joomlaQueryArray('menu', 'id', 'alias', $alias, 'id', 'ASC', 99);

foreach($query as $key => $value){
	$id = $value->id;
}
$this->div(0, 1, 'blog-container');
	$this->figure(0, 1, 'blog-container');
		$this->image('http://livedemo00.template-help.com/joomla_53717/images/blog/blog-img1.jpg', 'blog-photo-1', 1);
	$this->figure(1, 1);
	$this->a(0, 1, 'index.php?option=com_content&view=article&id='.$introData->id.'&Itemid='.$id);
	$this->exe($introData->title, 1);
	$this->a(1, 1);
$this->div(1, 1);
?>