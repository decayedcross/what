<?php
//SECTION 2
use framework\html;
use framework\string;
use joomla\article;
use framework\ENCschema;

$sch = new ENCSchema;
$h = new html();
$article = new article();
$string = new string();

$article->sectionContent($this->articleAlias, $this->parallaxSectionAlias);
$string->breakExplodeVars($article->introtext);

$h->b('div', 0, 1, '', '{"class":"row", "data-min-height":"50"}');
	$h->b('div', 0, 1, '{"class":"vertical"}');
		$h->b('hgroup', 0, 1, '{"class":"col col-xs-11 col-sm-10 col-md-9 col-lg-8 col-center"}');
			$h->b('h1', 0, 1, '', '{"class":"col col-base-12"}');
				$h->e(1, $string->text_1, 1);
			$h->b('h1', 1, 1);
			$h->b('h2', 0, 1, '', '{"class":"col col-base-12"}');
				$h->e(1, $string->text_2);
			$h->b('h2', 1, 1);
		$h->b('hgroup', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>
