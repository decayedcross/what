<header id="header">
    <nav id="navbar" class="uk-navbar">
        <section id="large">
            <div id="logo">
                <a href="#">
                    <jdoc:include type="modules" name="logo" />
                </a>
            </div>
            <div id="nav">
                <ul class="uk-navbar-nav">
                    <jdoc:include type="modules" name="top-menu" />
                </ul>
            </div>
        </section>
        <section id="small">
            <div id="logo">
                <a href="#"><jdoc:include type="modules" name="logo" /></a>
            </div>
            <div id="offcanvas">
                <a href="#offcanvas-top-menu" data-uk-offcanvas></a>
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
    <jdoc:include type="component" />
</main>
<footer id="footer">
</footer>
<script src="templates/what/bower/jquery/dist/jquery.min.js"></script>
<?php require_once('uikit.php'); ?>