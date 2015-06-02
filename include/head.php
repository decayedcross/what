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

$articleImages = json_decode($article->get('images'));

$articleUrls = $article->get('urls');

$articleAttribs = $article->get('attribs');
$articleVersion = $article->get('version');
$articleOrdering = $article->get('ordering');
$articleMetaKey = $article->get('metakey');
$articleMetaDesc = $article->get('metadesc');
$articleAccess = $article->get('access');
$articleHits = $article->get('hits');
$articleMetaData = $article->get('metadata');
$articleFeatured = $article->get('featured');
$articleLanguage = $article->get('language');
$articleXrefence = $article->get('xreference');

$articleImageIntro = $articleImages->image_intro;
$articleImageFloatIntro = $articleImages->float_intro;
$articleImageIntroAlt = $articleImages->image_intro_alt;
$articleImageIntroCaption = $articleImages->image_intro_caption;
$articleImageFulltext = $articleImages->image_fulltext;
$articleImageFloatFulltext = $articleImages->float_fulltext;
$articleImageFulltextAlt = $articleImages->image_fulltext_alt;
$articleImageFulltextCaption = $articleImages->image_fulltext_caption;
?>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $articleTitle; ?></title>
<link href="templates/what/css/load.css" type="text/css" rel="stylesheet">

<!-- FACEBOOK -->
<meta property="og:url" content="<?php echo 'http://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]; ?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $articleTitle; ?>" />
<meta property="og:description" content="<?php echo $articleMetaDesc; ?>" />
<meta property="og:image" content="<?php echo $articleImageIntro; ?>" />
