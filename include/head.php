<?php
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

$articleUrls = $article->get('urls');


$articleMetaData = json_decode($article->get('metadata'));
$articleMetaDataRobots = $articleMetaData->robots;
$articleMetaDataAuthor = $articleMetaData->author;
$articleMetaDataRights = $articleMetaData->rights;
$articleMetaDataXreference = $articleMetaData->xreference;

$config = JFactory::getConfig();
$globalMailFrom = $config->get('mailfrom');
$globalSiteName = $config->get('sitename');
?>

<meta charset="utf-8">
<meta name='keywords' content='<?php echo $articleMetaKey; ?>'>
<meta name='language' content='<?php echo $articleLanguage; ?>'>
<meta name='robots' content='<?php echo $articleMetaDataRobots; ?>'>
<meta name='revised' content='<?php echo $articleModified; ?>'>
<meta name='author' content='<?php echo $articleMetaDataAuthor; ?>'>
<meta name='designer' content='Viking Web Development'>
<meta name='reply-to' content='<?php echo $globalMailFrom; ?>'>
<meta name='pagename' content='<?php echo $articleTitle; ?>'>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name='HandheldFriendly' content='True'>
<meta name='MobileOptimized' content='240'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $articleMetaDesc; ?>">

<!-- FACEBOOK -->
<meta property="og:url" content="<?php echo JUri::getInstance(); ?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $articleTitle; ?>" />
<meta property="og:description" content="<?php echo $articleMetaDesc; ?>" />
<meta property="og:image" content="<?php echo $articleImageIntro; ?>" />
<meta property='og:site_name' content='<?php echo $globalSiteName; ?>'>

<title><?php echo $articleTitle; ?></title>
<link href="templates/what/css/load.css" type="text/css" rel="stylesheet">
