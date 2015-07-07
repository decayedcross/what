<?php
$db = 'tvtownus_joomla';
$user = 'tvtownus_admin';
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

$formatDate = date("F j, Y, g:i a", $_POST['date']);

$to = 'contact@tvtownusa.com';
$subject = $_POST['name'].' has contacted Tv Town Usa';

$headers = "From: " . $_POST['email'] . "\r\n";
$headers .= "Reply-To: ". $_POST['email'] . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #777;" cellpadding="10">';
$message .= "<tr style='background: #ccc;'><td><strong>IP:</strong> </td><td>" . strip_tags($_POST['ip']) . "</td></tr>";
$message .= "<tr><td><strong>Date / Time:</strong> </td><td>" . $formatDate . "</td></tr>";
$message .= "<tr style='background: #ccc;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr style='background: #ccc;'><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

mail($to, $subject, $message, $headers);

echo "true";
?>