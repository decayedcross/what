<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
require_once('templates/what/html/com_content/article/packages/2_section/content_array.php');
$html = new enc_HTML();

echo '<article class="'.$sectionArray["id"].'-package">';
echo '<div class="'.$sectionArray["id"].'-package-inner">';

echo '<hgroup class="'.$sectionArray["id"].'-package-hgroup">';
foreach ($content[$key]["title"] as &$title){
	echo '<h2 class="'.$sectionArray["id"].'-package-title" id="'.$sectionArray["id"].'-package-title-'.$key.'">';
		echo '<a href="#" class="'.$sectionArray["id"].'-package-title-link">';
			echo $title;
		echo '</a>';
	echo '</h2>';
}
foreach ($content[$key]["channels"] as &$channels){
	echo '<h3 class="'.$sectionArray["id"].'-package-channels">';
		echo $content["static"]["channelsBefore"];
		echo ' '.$channels.' ';
		echo $content["static"]["channelsAfter"];
	echo '</h3>';
}
echo '</hgroup>';

echo '<div class="'.$sectionArray["id"].'-package-price">';
foreach ($content[$key]["prices"] as &$price){
	echo '<span class="'.$sectionArray["id"].'-package-price-before">';
		echo $content["static"]["priceBefore"];
	echo '</span>';
	echo '<span class="'.$sectionArray["id"].'-package-price-value">';
		echo $price.'.';
		echo $content["static"]["priceAfterCents"];
	echo '</span>';
	echo '<span class="'.$sectionArray["id"].'-package-price-after">';
		echo $content["static"]["priceAfterMonth"];
		echo $content["static"]["priceAfterStar"];
	echo '</span>';
}
echo '</div>';

echo '<span class="'.$sectionArray["id"].'-package-everyday">';
foreach ($content[$key]["prices"] as &$everydayPrice){
	echo $content["static"]["everydayPriceBefore"].' ';
	echo $content["static"]["priceBefore"];
	echo $everydayPrice.'.';
	echo $content["static"]["priceAfterCents"];
	echo $content["static"]["priceAfterMonth"];
}
echo '</span>';

echo '<p class="'.$sectionArray["id"].'-package-paragraph">';
foreach ($content[$key]["paragraph"] as &$paragraph){
	echo $paragraph;	
}
echo '</p>';

echo '<h4 class="'.$sectionArray["id"].'-package-offers-title">';
	echo $content["static"]["speicalOffersTitle"];
echo '</h4>';

echo '<ul class="'.$sectionArray["id"].'-package-offers-list">';
	foreach ($content[$key]["specialOffers"] as &$specialOffer){
		echo '<li>';
			echo $specialOffer;
		echo '</li>';
	}	
echo '</ul>';

echo '<ul class="'.$sectionArray["id"].'-package-icons">';
	foreach ($content[$key]["svg"] as &$svg){
		echo '<li class="'.$sectionArray["id"].'-package-icons-li">';
			echo '<span class="'.$sectionArray["id"].'-package-icons-li-icon '.$svg.'"></span>';
		echo '</li>';
	}	
echo '</ul>';

echo '<div class="'.$sectionArray["id"].'-package-button">';
	echo '<a href="http://www.tvtownusa.com/contact">';	
		echo $content["static"]["button"];
	echo '</a>';
echo '</div>';

echo '</div>';
echo '</article>';
?>