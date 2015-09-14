<?php 
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$article = new Joomla\Article;
$string = new Framework\String;

$article->sectionContent($this->articleAlias, $this->sectionAlias);


function breakExplode($string){
	//$results = explode('{BREAK}', $array);
	//below uses regex - can use {BREAK<anything>} in introtext
	$results = preg_split("/{BREAK(?:.*)}/i", $string);
	return $results;
}

 
		
$breakArray = breakExplode($article->introtext);






$title = trim($breakArray[0]);
$backgroundImageSrc = trim($breakArray[1]);
$content = array_slice($breakArray, 2);

//start
//$h->b(something)


$h->b('div', 0, 1, '', '{"class":"row", "data-min-height":"70", "style":"background-image:url('.$backgroundImageSrc.')"}');
	$h->b('div', 0, 1, '', '{"class":"vertical"}');
		$h->b('div', 0, 1, '', '{"class":"col col-sm-8 col-center"}');
			$h->b('div', 0, 1, '', '{"class":"col col-sm-12", "style": "margin-bottom: 90px; margin-top: 140px; padding: 40px"}');
				$h->b('h1', 0, 1, '', '{"class":"h1 col col-xs-12", "style":"padding-bottom: 20px; font-size: 4em;"}');
					$h->e(1, $title);
				$h->b('h1', 1, 1);
				$h->b('div', 0, 1, '', '{"class":"left-img-col col col-xs-2", "data-mh":"home-section-2-col"}');
					$h->b('div', 0, 1, '', '{"class":"left-img", "style":"", "data-mh":"home-section-2-col"}');
					$h->b('div', 1, 1);
				$h->b('div', 1, 1);

				$string->breakByGroupSize(6, $content, __DIR__, 'service');
			$h->b('div', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);

//end
//$h->b(something)

?>