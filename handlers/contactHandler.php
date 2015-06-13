<?php
$db = 'mndyrs_headlightresto';
$user = 'mndyrs_admin';
$pass = 'coiNtreau$4';
$link = mysqli_connect("localhost", $user, $pass, $db);

$formData = array('date', 'ip', 'name', 'phone', 'email', 'message');
$formDataPost = array($_POST['date'], $_POST['ip'], $_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message']);
$formErrors = array();

$formDataImplodeCols = implode("`,`", $formData);
$formDataImplodeValues = implode("','", $formDataPost);
	
$formDataCols = "`".$formDataImplodeCols."`";
$formDataValues = "'".$formDataImplodeValues."'";

$query = mysqli_query($link,"INSERT INTO what_contact_form ($formDataCols) VALUES ($formDataValues)") or die(mysqli_error($link));

echo "true";
?>