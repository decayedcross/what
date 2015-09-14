
<?php
require_once('templates/what/vendor/james-heinrich/getid3/getid3/getid3.php');
use Antfuentes\Titan\Framework;

$h = new Framework\Html;
$string = new Framework\String;
$fileExt = $string->getFileExt($this->content);

$getID3 = new getID3;

if(is_file(trim($this->content))){
	$content = trim($this->content);
	$ID3 = $getID3->analyze(trim($this->content));
	$ID3_Title = $ID3["tags"]["id3v2"]["title"][0];
	$flag = $this->key / 3;
	if($this->counter == 0){
		$h->b('audio', 0, 1, '', '{"preload":"auto", "tabindex":"0", "controls":"controls", "type":"audio/mpeg", "id":"audio", "class":"col col-xs-12"}');
			$h->b('source', 0, 1, '', '{"type":"audio/mpeg", "src":"'.$content.'"}');	
		$h->b('audio', 1, 1);			
		$h->b('ul', 0, 1, '', '{"class":"col col-xs-12 playlist", "id":"playlist"}');		
		$h->b('li', 0, 1, '', '{"class":"active", "id":"li"}');
			$h->b('i', 0, 1, '', '{"class":"fa fa-play-circle"}');
			$h->b('i', 1, 1);
			$h->b('a', 0, 1, '', '{"href":"'.$content.'", "id":"a"}');
				$h->e(1, $ID3_Title);
			$h->b('a', 1, 1);
		$h->b('li', 1, 1);
		$this->counter++;
	}else{
		if($this->counter != 0 AND $this->key != ($this->count - 1)){
			if($flag <> 1){
				$h->b('li', 0, 1, '', '{"id":"li"}');
					$h->b('i', 0, 1, '', '{"class":"fa fa-play-circle"}');
					$h->b('i', 1, 1);
					$h->b('a', 0, 1, '', '{"href":"'.$content.'", "id":"a"}');
						$h->e(1, $ID3_Title);
					$h->b('a', 1, 1);
				$h->b('li', 1, 1);
				$this->counter++;
			}
		}
	}
	if($this->key == ($this->count - 1)){
		if($flag <> 1){
			$h->b('li', 0, 1, '', '{"id":"li"}');
				$h->b('i', 0, 1, '', '{"class":"fa fa-play-circle"}');
				$h->b('i', 1, 1);
				$h->b('a', 0, 1, '', '{"href":"'.$content.'", "id":"a"}');
					$h->e(1, $ID3_Title);
				$h->b('a', 1, 1);
			$h->b('li', 1, 1);
		$h->b('ul', 1, 1);
		$this->counter++;
		}
	}
}
?>

