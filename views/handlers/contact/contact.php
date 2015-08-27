<?php
$db = 'mndyrs_what';
$user = 'mndyrs_admin';
$pass = 'coiNtreau$4';
$link = mysqli_connect("localhost", $user, $pass, $db);

$formData = array('date', 'ip', 'firstname', 'lastname', 'phone', 'email', 'subject', 'message');
$formDataPost = array($_POST['date'], $_POST['ip'], $_POST['firstname'], $_POST['lastname'], $_POST['phone'], $_POST['email'], $_POST['subject'], $_POST['message']);
$formErrors = array();

$formDataImplodeCols = implode("`,`", $formData);
$formDataImplodeValues = implode("','", $formDataPost);

$formDataCols = "`".$formDataImplodeCols."`";
$formDataValues = "'".$formDataImplodeValues."'";

$query = mysqli_query($link,"INSERT INTO what_contact_form ($formDataCols) VALUES ($formDataValues)") or die(mysqli_error($link));

echo "true";
?>