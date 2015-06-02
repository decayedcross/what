<?php
$db = 'mndyrs_beatpeaceconcierge';
$user = 'mndyrs_admin';
$pass = 'coiNtreau$4';
$link = mysqli_connect("localhost", $user, $pass, $db);

$formData = array('date', 'ip', 'first_name', 'last_name', 'phone_number', 'email', 'content');
$formDataPost = array($_POST['date'], $_POST['ip'], $_POST['first_name'], $_POST['last_name'], $_POST['phone_number'], $_POST['email'], $_POST['content']);
$formErrors = array();

$formDataImplodeCols = implode("`,`", $formData);
$formDataImplodeValues = implode("','", $formDataPost);
	
$formDataCols = "`".$formDataImplodeCols."`";
$formDataValues = "'".$formDataImplodeValues."'";

$query = mysqli_query($link,"INSERT INTO bapc_contact_form ($formDataCols) VALUES ($formDataValues)") or die(mysqli_error($link));

echo "true";
?>