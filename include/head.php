<?php
$view = JRequest::getVar('view');
$app = JFactory::getApplication()->input;
$currentId = $app->getInt('id');


$config = JFactory::getConfig();
$globalSiteName = $config->get( 'sitename' );
$globalMailFrom = $config->get( 'mailfrom' );

if($view == 'category'){
	$input = JFactory::getApplication()->input;
	$catId = $input->getInt('id');
	$cat = JTable::getInstance('category');
	$catId = $cat->get('id');
	
	$catAssetId = $cat->get('asset_id');
	$catParentId = $cat->get('parent_id');
	$catLft = $cat->get('lft');
	$catRgt = $cat->get('rgt');
	$catLevel = $cat->get('level');
	$catPath = $cat->get('path');
	$catExtension = $cat->get('extension');
	$catTitle = $cat->get('title');
	$catAlias = $cat->get('alias');
	$catNote = $cat->get('note');
	$catDescription = $cat->get('description');
	$catPublished = $cat->get('published');
	$catCheckedOut = $cat->get('checked_out');
	$catCheckedOutTime = $cat->get('checked_out_time');
	$catAccess = $cat->get('access');
	
	$catParams = json_decode($cat->get('params'));
	
	$catMetaDesc = $cat->get('metadesc');
	$catMetaKey = $cat->get('metakey');
	$catMetaData = $cat->get('metadata');
	$catCreatedUserId = $cat->get('created_user_id');
	$catCreatedTime = $cat->get('created_time');
	$catModifiedUserId = $cat->get('modified_user_id');
	$catModifiedTime = $cat->get('modified_time');
	$catHits = $cat->get('hits');
	$catLanguage = $cat->get('language');
	$catVersion = $cat->get('version');
}

if($view == 'article'){
	$input = JFactory::getApplication()->input;
	$articleId = $input->getInt('id');
	$article = JTable::getInstance('content');
	$article->load($articleId);

	$articleAssetId = $article->get('asset_id');
	$articleTitle = $article->get('title');
	$articleAlias = $article->get('alias');
	$articleIntroText = $article->get('introtext');
	$articleFullText = $article->get('fulltext');
	$articleState = $article->get('state');
	$articleCatId = $article->get('catid');
	$articleCreated = $article->get('created');
	$articleCreatedBy = $article->get('created_by');
	$articleCreatedByAlias = $article->get('created_by_alias');
	$articleModified = $article->get('modified');
	$articleModifiedBy = $article->get('modified_by');
	$articleCheckedOut = $article->get('checked_out');
	$articleCheckedOutTime = $article->get('checked_out_time');
	$articlePublishUp = $article->get('publish_up');
	$articlePublishDown = $article->get('publish_down');

	$articleAttribs = $article->get('attribs');
	$articleVersion = $article->get('version');
	$articleOrdering = $article->get('ordering');
	$articleMetaKey = $article->get('metakey');
	$articleMetaDesc = $article->get('metadesc');
	$articleAccess = $article->get('access');
	$articleHits = $article->get('hits');
	$articleFeatured = $article->get('featured');
	$articleLanguage = $article->get('language');
	$articleXrefence = $article->get('xreference');

	$articleImages = json_decode($article->get('images'));
	$articleImageIntro = $articleImages->image_intro;
	$articleImageFloatIntro = $articleImages->float_intro;
	$articleImageIntroAlt = $articleImages->image_intro_alt;
	$articleImageIntroCaption = $articleImages->image_intro_caption;
	$articleImageFulltext = $articleImages->image_fulltext;
	$articleImageFloatFulltext = $articleImages->float_fulltext;
	$articleImageFulltextAlt = $articleImages->image_fulltext_alt;
	$articleImageFulltextCaption = $articleImages->image_fulltext_caption;

	$articleUrls = json_decode($article->get('urls'));
	$articleLinkA = $articleUrls->urla;
	
	$articleMetaData = json_decode($article->get('metadata'));
	$articleMetaDataRobots = $articleMetaData->robots;
	$articleMetaDataAuthor = $articleMetaData->author;
	$articleMetaDataRights = $articleMetaData->rights;
	$articleMetaDataXreference = $articleMetaData->xreference;
}
?>

<meta charset="utf-8">
<meta name='designer' content='Viking Web Development'>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name='HandheldFriendly' content='True'>
<meta name='MobileOptimized' content='240'>
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php if($view == 'category'){ ?>
	<meta name='keywords' content='<?php echo $articleMetaKey; ?>'>
	<meta name='language' content='<?php echo $articleLanguage; ?>'>
	<meta name='robots' content='<?php echo $articleMetaDataRobots; ?>'>
	<meta name='revised' content='<?php echo $articleModified; ?>'>
	<meta name='author' content='<?php echo $articleMetaDataAuthor; ?>'>
	<meta name='reply-to' content='<?php echo $globalMailFrom; ?>'>
	<meta name='pagename' content='<?php echo $catTitle; ?>'>
	<meta name="description" content="<?php echo $catMetaDesc; ?>">

	<!-- FACEBOOK -->
	<meta property="og:url" content="<?php echo JUri::getInstance(); ?>" />
	<meta property="og:type" content="<?php echo $view; ?>" />
	<meta property="og:title" content="<?php echo $catTitle; ?>" />
	<meta property="og:description" content="<?php echo $catMetaDesc; ?>" />
	<meta property="og:image" content="<?php echo $articleImageIntro; ?>" />
	<meta property='og:site_name' content='<?php echo $globalSiteName; ?>'>

	<title><?php echo $catTitle; ?></title>
<?php } ?>

<?php if($view == 'article'){ ?>
	<meta name='keywords' content='<?php echo $articleMetaKey; ?>'>
	<meta name='language' content='<?php echo $articleLanguage; ?>'>
	<meta name='robots' content='<?php echo $articleMetaDataRobots; ?>'>
	<meta name='revised' content='<?php echo $articleModified; ?>'>
	<meta name='reply-to' content='<?php echo $globalMailFrom; ?>'>
	<meta name='pagename' content='<?php echo $articleTitle; ?>'>
	<meta name="description" content="<?php echo $articleMetaDesc; ?>">

	<!-- FACEBOOK -->
	<meta property="og:url" content="<?php echo JUri::getInstance(); ?>" />
	<meta property="og:type" content="<?php echo $view; ?>" />
	<meta property="og:title" content="<?php echo $articleTitle; ?>" />
	<meta property="og:description" content="<?php echo $articleMetaDesc; ?>" />
	<meta property="og:image" content="<?php echo JURI::base().$articleImageIntro; ?>" />
	<meta property='og:site_name' content='<?php echo $globalSiteName; ?>'>
	<meta property="article:author" content="<?php echo $articleLinkA; ?>" />

	<title><?php echo $articleTitle; ?></title>
<?php } ?>

<link rel="stylesheet" href="https://i.icomoon.io/public/temp/2307cd874d/WizardTodayIcons/style.css">
<link rel="stylesheet" type="text/css" href="templates/what/css/load.css" />