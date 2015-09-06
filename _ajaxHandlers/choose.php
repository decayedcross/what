<?php
require_once('../_define.php');
require_once('../vendor/autoload.php');

use Antfuentes\Titan\Joomla;

$db = new Joomla\Database;
$db->tables();

$state = trim($_POST['cssId']);

$results = $db->q("SELECT * FROM $db->categories WHERE alias = 'static'");

foreach($results as $key => $data){
	$explode = explode('/', $data['path']);
	$city = str_replace ('-' , '' , $explode[1]);
	if($state == $explode[0]){
		$articleId = $data['id'];
		
		//temIdQuery = $db->q("SELECT id FROM $db->menu WHERE menutype = '$city' AND alias = 'home-$city'");
			
		$contents = $db->q("SELECT * FROM $db->content WHERE catid = '$articleId' AND alias = 'home'");
		
		foreach($contents as $keyContent => $content){
			$link = 'index.php?option=com_content&view=article&id='.$content["id"];
			echo '<a style="color: black; font-size: 5rem;" href="'.$link.'">'.$city.'</a>';
			echo '<br>';
		}
		
		
	}
}




/*$result = $db->q("SELECT id FROM $db->categories WHERE path = '$path'");

$id = $result[0]['id'];

$results = $db->q("SELECT * FROM $db->categories WHERE parent_id = '$id' AND alias = 'static'");

$db->dump($results);*/

//foreach($results as $key => $data){
	
	//$db->dump($data);
	
	
	//$next = $db->q("SELECT * FROM $db->categories WHERE parent_id = '$catid' AND alias = 'static'")
	
	//$db->dump($next);
	
	/*$content = $db->q("SELECT * FROM $db->content WHERE catid = '$catid' AND alias = home");
	
	$db->dump($content);
	
	$link = 'index.php?option=com_content&view=article&id='.$content[0]["id"];
	echo '<a href="'.$link.'">'.$content[0]["title"].'</a>';
	echo '<br>';*/
//}
?>