<header>
	<nav>
		<section id="large-menu">
			<div id="logo">
				<a>
					<jdoc:include type="modules" name="logo" />	
				</a>			
			</div>
			<div id="menu">
				<ul>
					<jdoc:include type="modules" name="top-menu" />	
				</ul>
			</div>
		</section>
		<section id="small-menu">	
			<div id="logo">
				<ul>
					<jdoc:include type="modules" name="logo" />	
				</ul>
			</div>
			<div id="offcanvas">
				<a href="#offcanvas-top-menu" data-uk-offcanvas>
				</a>			
			</div>
		</section>
	</nav>	
	<div id="offcanvas-top-menu" class="uk-offcanvas">
    	<div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
      		<ul class="uk-nav">
           		<jdoc:include type="modules" name="top-menu" />
       		</ul>
    	</div>
	</div>	
</header>
<main id="main">
	<jdoc:include type="modules" name="position-1" />
    <jdoc:include type="component" />
</main>
<footer id="footer">
	<jdoc:include type="modules" name="footer" />	
</footer>
<?php echo '<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>'; ?>
<?php require_once('uikit.php'); ?>
<?php require_once('enclave.php'); ?>
<?php require_once('html.php'); ?>
