<style>
#playlist,audio{background:#666;}
a.active{color:#5DB0E6;text-decoration:none;}
li a{color:#eeeedd;background:#333;padding:5px;display:block;}
li a:hover{text-decoration:none;}
</style>

<?php 
require_once('templates/what/vendor/james-heinrich/getid3/getid3/getid3.php');
		
use Antfuentes\Titan\Joomla;

$article = new Joomla\Article;

$article->content($this->routerId);

$audio = scandir(AUDIO_PATH.$article->alias);

$getID3 = new getID3;
// Analyze file and store returned data in $ThisFileInfo

echo '<div>';

foreach($audio as $key => $val){
	if($val <> '.' AND $val <> '..'){
		$path = AUDIO_PATH.$article->alias.'/'.$val;
		if($key === 2){
			echo '<audio id="audio" preload="auto" tabindex="0" controls="" type="audio/mpeg">';
			echo '<source type="audio/mp3" src="'.$path.'">';
			echo '</audio>';
			echo ' <ul id="playlist">';
			$a_start = '<li><a href="'.$path.'" class="active">';
		}else{
			$a_start = '<li><a href="'.$path.'">';
		}
		
		echo $a_start;
		
		$array = $getID3->analyze($path);
		foreach($array["tags"]["id3v2"]["title"] as $arrayKey => $arrayVal){
			echo $arrayVal;
		}
		
		echo '</a>';
		
		echo '</li>';
		
		
	}
}

echo '</ul>';

echo '</div>';

?>

