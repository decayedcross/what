<?php
require('/home/mndyrs/public_html/development/what/templates/what/config/init.php');

use framework\mailchimp;

$mailchimp = new mailchimp('855da08bac248e99b7936f9f54615aaa-us11');
echo $mailchimp->subscribe($_POST['email'], '87c045bf91');
?>