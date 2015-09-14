<?php
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$menu = new Joomla\Menu;
$h = new Framework\Html;
$sch = new Framework\Sch;
$string = new Framework\String;

$menu->categoryBlog($this->catid, $this->id);

$menu->article($this->id, JRequest::getVar('Itemid'));
$text = $string->breakExplode($this->introtext);
$img = json_decode($this->images);


$link = 'index.php?option=com_content&view=article&id='.$this->id.':'.$this->alias.'&catid='.$this->catid.'&Itemid='.JRequest::getVar('Itemid');

//echo '<a href="'.$link.'">'.$this->title.'</a>';

//echo '<br>';

if($resultsKey == 0){
	
	$h->b('section', 0, 1,'{"class":"row section", "data-min-height":"80"}');
		$h->b('div', 0, 1, '', '{"class":"vertical"}');
			$h->b('div', 0, 1, '', '{"class":"col col-center col-xs-8", "data-mh":"audio-cat-div"}');			
}
			$h->b('article', 0, 1, '', '{"class":"col col-xs-12 col-sm-3 col-md-3 col-lg-3", "id":"article", "data-mh":"artists-catergory-article"}');
				$h->b('a', 0, 1, '', '{"href":"'.$menu->articleLink.'", "class":"col col-xs-12 artists-a"}');
					$h->b('figure', 0, 1, '', '{"class":"col col-xs-12 figure"}');
						$h->b('img', 0, 1, '', '{"class":"col col-xs-12 image", "src":"'.$img->image_intro.'", "alt":"'.$img->image_intro_alt.'"}');
						$h->b('div', 0, 1, '', '{"style":"background-image: url('.$img->image_intro.')", "class":"div-img"}');
						$h->b('div', 1, 1);
					$h->b('figure', 1,1);
				$h->b('a', 1, 1);	
				$h->b('a', 0, 1, '', '{"href":"'.$menu->articleLink.'", "class":"col col-xs-12 artists-a"}');
					$h->b('hgroup', 0, 1, '{"id":"hgroup"}');						
						$h->b('h2', 0, 1);
							$h->e(1, $text[0]);
						$h->b('h2', 1, 1);
						$h->b('h3', 0, 1);
							$h->e(1, $text[1]);
						$h->b('h3', 1, 1);
					$h->b('hgroup', 1, 1);
				$h->b('a', 1, 1);
			$h->b('article', 1, 1);
if($resultsKey == $this->showLimit - 1){
			$h->b('div', 1, 1);
		$h->b('div', 1, 1);
	$h->b('section', 1, 1);
}
?>