<?php

$f = new enc_FLEX();
$h = new enc_HTML();
?>
<?php require_once('vendor/facebook.php'); ?>
<?php require_once('vendor/twitter.php'); ?>
<header>
<?php
$section = $f->buildLayout('header');
$f->layout($section, 'header');
?>
</header>

<main>
    <jdoc:include type="component" />
</main>

<footer>
<?php
$section = $f->buildLayout('footer');
$f->layout($section, 'footer');
?>
</footer>

<?php require_once('_loadBody.php'); ?>