<header class="what-header-outer">
	<div class="what-header-inner">
		<div class="what-header-content">
			<div class="what-header-center">
				<a href="http://www.tvtownusa.com" id="what-header-link">
					<div class="what-header-brand">
						<div class="what-header-brand-icon">
							<i class="fa fa-home"></i>
						</div>
						<div class="what-header-brand-text">
							Tv Town 
							<span>Usa</span>
						</div>
					</div>
				</a>
				<nav class="what-header-menu">
					<div id="large">
						<ul class="menu">
							<jdoc:include type="modules" name="top-menu" />
						</ul>
					</div>
					<div id="small">
						<a href="#menu" id="icon" data-uk-offcanvas>
							<i class="fa fa-bars"></i>
						</a>
						<div id ="menu" class="uk-offcanvas">
							<div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
								<ul>
									<jdoc:include type="modules" name="top-menu" />
								</ul>
							</div>
						</div>						
					</div>
				</nav>		
			</div>
		</div>
	</div>
</header>
<main id="what-main">
	<jdoc:include type="modules" name="development" />
    <jdoc:include type="component" />
</main>

<jdoc:include type="modules" name="footer" />	

<?php require_once('_loadBody.php'); ?>