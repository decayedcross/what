<?php
use joomla\database;
use joomla\article;
use joomla\link;
use joomla\menu;

use framework\youtube;
use framework\html;
use framework\css;
use framework\string;
use framework\ENCSchema;

$db = new database();
$h = new html();
$sch = new ENCSchema();
$css = new css();
$string = new string();
$youtube = new youtube();
$article = new article();
$link = new link();
$menu = new menu();
$menu->link(JRequest::getVar('Itemid'));

$db->tables();

$results = $db->q("SELECT * FROM $db->categories WHERE alias = 'video'");
$catid = $results[0]['id'];

$results = $db->q("SELECT * FROM $db->content WHERE catid = '$catid' ORDER BY id DESC LIMIT 0,4");

foreach ($results as $resultsKey => $result){
	$article->variable($result);
	$youtube->snippet($article->introtext);

	$h->b('figure', 0, 1, $sch::imageObject, '{"class":"object"}');
	$h->b('meta', 0, 1, $sch::datePublished, '{"content":"'.$youtube->videoPublishedAt.'"}');
	$h->b('a', 0, 1, '', '{"href":"'.$link->article($article->id, JRequest::getVar('Itemid')).'"}');
		$h->b('div', 0, 1, '', '{"style":"background-image:url('.$youtube->videoThumbnailHighUrl.')"}');
		$h->b('div', 1, 1);
		//$h->b('img', 0, 1, $sch::contentUrl, '{"src":"'.$youtube->videoThumbnailHighUrl.'", "alt":"'.$youtube->videoThumbnailAlt.'", "width":"'.$youtube->videoThumbnailHighWidth.'", "height":"'.$youtube->videoThumbnailHighHeight.'"}');
	$h->b('a', 1, 1);
	$h->b('figcaption', 0, 1, '', '{"class":"content"}');
		$h->b('h2', 0, 1, $sch::name);
			$h->b('a', 0, 1, '', '{"href":"'.$link->article($article->id, JRequest::getVar('Itemid')).'"}');
				$h->e(1, $youtube->videoTitle);
			$h->b('a', 1, 1);
		$h->b('h2', 1, 1);
		$h->b('a', 0, 1, '', '{"href":"'.$link->article($article->id, JRequest::getVar('Itemid')).'", "class":"button"}');
			$h->b('i', 0, 1, '', $css::faYouTubePlay);
			$h->b('i', 1, 1);			
		$h->b('a', 1, 1);
	$h->b('figcaption', 1, 1);
$h->b('figure', 1, 1);

}



//$article->variables($results);

//echo $article->id;
?>