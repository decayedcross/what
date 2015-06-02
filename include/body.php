<header id="what-header">
	<nav id="nav">
		<section id="large">
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
		<section id="small">	
			<div id="logo">
				<ul>
					<jdoc:include type="modules" name="logo" />	
				</ul>
			</div>
			<div id="menu">
				<a href="#what-header-nav-small-menu-offcanvas" data-uk-offcanvas></a>			
			</div>
		</section>
	</nav>	
	<div id="what-header-nav-small-menu-offcanvas" class="uk-offcanvas">
    		<div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
      			<ul class="uk-nav">
           			<jdoc:include type="modules" name="top-menu" />
       			</ul>
    		</div>
	</div>	
</header>
<main id="what-main">
	<jdoc:include type="modules" name="development" />
    	<jdoc:include type="component" />
</main>
<footer id="what-footer">
	<jdoc:include type="modules" name="footer" />	
</footer>
<?php require_once('_loadBody.php'); ?>
