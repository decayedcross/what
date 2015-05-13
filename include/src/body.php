<nav class="uk-navbar">
	<a href="#" class="uk-navbar-brand">Death Dealer</a>
    <ul class="uk-navbar-nav uk-hidden-small">
    	<jdoc:include type="modules" name="top-menu" />
    </ul>
    <a href="#top-menu" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
</nav>

<div id="top-menu" class="uk-offcanvas">
    <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
    	<ul class="uk-nav">
    		<jdoc:include type="modules" name="top-menu" />
    	</ul>
    </div>
</div>

<jdoc:include type="message" />
<jdoc:include type="component" />

<script src="templates/what/bower/jquery/dist/jquery.min.js"></script>
<?php require_once('uikit.php'); ?>