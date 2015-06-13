<?php 
$whatContactSection_3_Information = array(
	"9863 - 9867 Mill Road",
	"Cambridge, MG09 99HT.",
	"+1 800 603 6035",
	"+1 800 889 9898",
	"mail@demolink.org"
);
?>
<?php
if($key == 0){
	echo '<dl class="'.$sectionArray['id'].'-dl">';
	echo '<dt class="'.$sectionArray['id'].'-dt">'.$whatContactSection_3_Information[$key].', ';
}
if($key == 1){
	echo '<br>'.$whatContactSection_3_Information[$key].'</dt>';
}
if($key == 2){
	echo '<dd class="'.$sectionArray['id'].'-dd"><span>Telephone:</span> '.$whatContactSection_3_Information[$key].'</dd>';
}

if($key == 3){
	echo '<dd class="'.$sectionArray['id'].'-dd"><span>FAX:</span> '.$whatContactSection_3_Information[$key].'</dd>';
}
?>
<?php
if($key == 4){
	echo '<dd class="'.$sectionArray['id'].'-dd">E-mail: <a href="mailto:'.$whatContactSection_3_Information[$key].'">'.$whatContactSection_3_Information[$key].'</a></dd>';
	echo '</dl>';
}
?>