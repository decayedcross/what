<?php
require('/config/autoload.php');

use framework\mailchimp;

$mailchimp = new mailchimp('855da08bac248e99b7936f9f54615aaa-us11');
$mailchimp->test();
?>