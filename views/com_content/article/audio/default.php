<?php 
//ARTICLE
//AUDIO
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;
require_once('templates/what/vendor/james-heinrich/getid3/getid3/getid3.php');

$db = new Joomla\Database;
$article = new Joomla\Article;
$menu = new Joomla\Menu;
$string = new Framework\String;
$h = new Framework\Html;

$article->content($this->routerId);
$audio = scandir(AUDIO_PATH.$article->alias);
$audio = array_slice($audio, 2);

$getID3 = new getID3;

$introtext = $string->breakExplode($article->introtext);
$content = array_slice($introtext, 2);
$img = json_decode($article->images);
$fbCommentsLink = $menu->link(JRequest::getVar('Itemid'));
$article->getCatergoryPath($this->routerId);
$city = ucwords($string->replaceString('-', ' ', $article->path_1));
$artist = ucwords($article->path_2);

$row = '{"class":"row", "id":"article-audio", "data-min-height":"80"}';
$vertical = '{"class":"vertical"}';
$container = '{"class":"col col-center col-xs-11 col-sm-10 col-md-9 col-lg-8"}';
$title = '{"class":"title col col-xs-12"}';
$imgCol = '{"class":"img-col col col-xs-6", "data-mh":"article-audio-col"}';
$imgVertical = '{"class":"vertical"}';
$imgContainer = '{"class":"col col-xs-12"}';
$img = '{"class":"img", "src":"'.$img->image_fulltext.'", "alt":"'.$img->image_fulltext_alt.'"}';
$contentCol = '{"class":"content-col col col-xs-6", "data-mh":"article-audio-col"}';
$contentVertical = '{"class":"vertical"}';
$contentContainer = '{"class":"col col-xs-12"}';
$playBar = '{"class":"play-bar col col-xs-12", "preload":"auto", "tabindex":"0", "controls":"controls", "type":"audio/mpeg", "id":"audio"}';
$playBarSource = ' "class":"play-bar-source", "type":"audio/mpeg"';
$playList = '{"class":"play-list col col-xs-12", "id":"playlist"}';
$playListItemActive = '{"class":"play-list-item active col col-xs-12"}';
$playListItem = '{"class":"play-list-item col col-xs-12"}';
$playListItemIcon = '{"class":"play-list-item-icon fa fa-play-circle"}';
$playListItemLink = ' "class":"play-list-item-link"';
$fbCommentsRow = '{"class":"fb-comments-row row", "data-min-height":"20"}';
$fbContainer = '{"class":"fb-comments-container col col-center col-xs-11 col-sm-10 col-md-9 col-lg-8"}';
$fbComments = '{"class":"fb-comments col col-xs-12", "data-href":"'.$fbCommentsLink.'", "data-numposts":"5"}';

$h->b('div', 0, 1, '', $row);
	$h->b('div', 0, 1, '', $vertical);
		$h->b('div', 0, 1, '', $container);
			$h->b('h1', 0, 1, '', $title);	
				$h->e(1, $city.' / '.$artist);
			$h->b('h1', 1, 1);
			$h->b('div', 0, 1, '', $imgCol);
				$h->b('div', 0, 1, '', $imgVertical);
					$h->b('div', 0, 1, '', $imgContainer);
						$h->b('img', 0, 1, '', $img);
					$h->b('div', 1 ,1);
				$h->b('div', 1 ,1);
			$h->b('div', 1 ,1);
			$h->b('div', 0, 1, '', $contentCol);
				$h->b('div', 0, 1, '', $contentVertical);
					$h->b('div', 0, 1, '', $contentContainer);
						foreach($audio as $key => $track){
							$audioCount = count($audio) - 1;
							$trackPath = AUDIO_PATH.$article->alias.'/'.$track;
							$trackArray = $getID3->analyze($trackPath);
							$trackTitle = $trackArray["tags"]["id3v2"]["title"][0];
							$trackArtist = $trackArray["tags"]["id3v2"]["artist"][0];
							if($key == 0){
								$h->b('audio', 0, 1, '', $playBar);
									$h->b('source', 0, 1, '', '{"src":"'.$trackPath.'", '.$playBarSource.'}');	
								$h->b('audio', 1, 1);
								$h->b('ul', 0, 1, '', $playList);
									$h->b('li', 0, 1, '', $playListItemActive);
										$h->b('i', 0, 1, '', $playListItemIcon);
										$h->b('i', 1, 1);
										$h->b('a', 0, 1, '', '{"href":"'.$trackPath.'", '.$playListItemLink.'}');	
											$h->e(1, $trackArtist.' - '.$trackTitle);
										$h->b('a', 1, 1);
									$h->b('li', 1, 1);
							}elseif($key < $audioCount){
									$h->b('li', 0, 1, '', $playListItem);
										$h->b('i', 0, 1, '', $playListItemIcon);
										$h->b('i', 1, 1);
										$h->b('a', 0, 1, '', '{"href":"'.$trackPath.'", '.$playListItemLink.'}');	
											$h->e(1, $trackArtist.' - '.$trackTitle);
										$h->b('a', 1, 1);
									$h->b('li', 1, 1);
							}else{
								$h->b('ul', 1, 1);
							}
						}
					$h->b('div', 1 ,1);
				$h->b('div', 1 ,1);
			$h->b('div', 1 ,1);
			$h->b('div', 0, 1, '', $fbCommentsRow);
				$h->b('div', 0, 1, '', $fbContainer);
					$h->b('div', 0, 1, '', $fbComments);
					$h->b('div', 1, 1);
				$h->b('div', 1, 1);
			$h->b('div', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);

/*$h->b('section', 0, 1, '', $row);
	$h->b('div', 0, 1, '', $vertical);
		$h->b('div', 0, 1, '', $container);	
			$h->b('div', 0, 1, '', '{"class":"col col-xs-12 top"}');
				$h->b('div', 0, 1, '', '{"class":"vertical"}');
					$h->b('h1', 0, 1, '', '{"class":"h1"}');	
						$h->e(1, $city.' / '.$artist);
					$h->b('h1', 1, 1);
				$h->b('div', 1, 1);
			$h->b('div', 1, 1);
			foreach($audio as $key => $val){
				if($val <> '.' AND $val <> '..'){
					$path = AUDIO_PATH.$article->alias.'/'.$val;
					$array = $getID3->analyze($path);
					$title = $array["tags"]["id3v2"]["title"][0];
					$artist = $array["tags"]["id3v2"]["artist"][0];
					if($key === 2){
						$h->b('audio', 0, 1, '', '{"preload":"auto", "tabindex":"0", "controls":"controls", "type":"audio/mpeg", "id":"audio", "class":"col col-xs-12"}');
							$h->b('source', 0, 1, '', '{"type":"audio/mpeg", "src":"'.$path.'"}');	
						$h->b('audio', 1, 1);	
						$h->b('div', 0, 1, '', '{"class":"col col-xs-4", "id":"left", "data-mh":"audio-article-div", "data-min-height":"40"}');
							$h->b('div', 0, 1, '', '{"class":"vertical"}');
								$h->b('figure', 0, 1, '', '{"class":"col col-center col-xs-8"}');
									$h->b('img', 0, 1, '', '{"class":"col col-xs-12 image", "src":"'.$img->image_fulltext.'", "alt":"'.$img->image_fulltext_alt.'"}');
									$h->b('div', 0, 1, '', '{"style":"background-image: url('.$img->image_fulltext.')", "class":"div-img"}');
									$h->b('div', 1, 1);
								$h->b('figure', 1,1);
							$h->b('div', 1, 1);
						$h->b('div', 1, 1);	
						$h->b('div', 0, 1, '', '{"class":"col col-xs-8", "id":"right", "data-mh":"audio-article-div"}');
							$h->b('ul', 0, 1, '', '{"class":"col col-xs-12 playlist", "id":"playlist"}');
								$h->b('li', 0, 1, '', '{"class":"active col col-xs-12", "id":"li"}');
									$h->b('i', 0, 1, '', '{"class":"fa fa-play-circle"}');
									$h->b('i', 1, 1);
									$h->b('a', 0, 1, '', '{"href":"'.$path.'", "id":"a"}');		
										$h->e(1, $artist.' - '. $title);	
					}else{
								$h->b('li', 0, 1, '', '{"class":"col col-xs-12", "id":"li"}');
									$h->b('i', 0, 1, '', '{"class":"fa fa-play-circle"}');
									$h->b('i', 1, 1);
									$h->b('a', 0, 1, '', '{"href":"'.$path.'", "id":"a"}');
									$h->e(1, $artist.' - '. $title);	
					}
				}
									$h->b('a', 1, 1);
								$h->b('li', 1, 1);
			}
						$h->b('ul', 1, 1);
					$h->b('div', 1, 1);
				$h->b('div', 1, 1);
			$h->b('div', 1, 1);
			$h->b('section', 0, 1, '', '{"class":"comments row"}');
				$h->b('div', 0, 1, '', '{"class":"col col-center col-base-8 background"}');
				$h->b('div', 0, 1, '', '{"class":"fb-comments col-center col-base-12", "data-href":"'.$facebook.'", "data-numposts":"5"}');
				$h->b('div', 1, 1);
			$h->b('section', 1, 1);
	$h->b('div', 1, 1);
$h->b('section', 1, 1);*/
?>