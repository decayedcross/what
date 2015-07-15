jQuery(document).ready(function($) {
	encAllHeightsEqualElementA('#what-header #large #brand', '#what-header #large #nav, #what-header #large #nav #menu, #what-header #large #nav #menu li, #what-header #large #nav #menu li a');
	encAllHeightsEqualElementA('#what-header #large #brand', '#what-header #large #nav #social');
	encVerticalCenter('#what-header #large #nav #social', '#what-header #large #nav #social #inner', '#what-header #large #nav #social .content');
	jQuery(window).resize(
	encAllHeightsEqualElementA('#what-header #large #brand', '#what-header #large #nav, #what-header #large #nav #menu, #what-header #large #nav #menu li, #what-header #large #nav #menu li a'),
	encAllHeightsEqualElementA('#what-header #large #brand', '#what-header #large #nav #social'),
	encVerticalCenter('#what-header #large #nav #social', '#what-header #large #nav #social #inner', '#what-header #large #nav #social .content')
	);
	jQuery(window).load(
	encAllHeightsEqualElementA('#what-header #large #brand', '#what-header #large #nav, #what-header #large #nav #menu, #what-header #large #nav #menu li, #what-header #large #nav #menu li a'),
	encAllHeightsEqualElementA('#what-header #large #brand', '#what-header #large #nav #social'),
	encVerticalCenter('#what-header #large #nav #social', '#what-header #large #nav #social #inner', '#what-header #large #nav #social .content')
	);
});