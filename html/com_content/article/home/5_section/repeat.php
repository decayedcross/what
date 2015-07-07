<?php
$paragraphs = array(
	"Michael Finch",
	"<span class='white'>Phone:</span> (812) 302-3025",
	"<span class='white'>Email:</span> contact@tvtownusa.com",
	"<span class='white'>Address:</span> 5353 LaCross Drive. Bloomington, Indiana 47404",
	"pageExt" => "p",
	"id" => "what-home-section-7"
);
?>
<p class="what-home-section-7-p" <?php $this->setRepeatID($paragraphs, 'pageExt', $key);?>>
	<?php echo $paragraphs[$key]; ?>
</p>