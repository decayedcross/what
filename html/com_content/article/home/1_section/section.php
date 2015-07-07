<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatHomeSection_1 = array(
	"id" => "what-home-section-1",
	"page" => "slideshow",
	"pagePath" => "templates/what/html/com_content/article/home/1_section/",
	"available" => "*Available Everywhere*"
	
);
?>


<div id="showcase">
	<div class="moduletable">
		<div class="module_container">
			<div id="camera-slideshow_92" class="camera_wrap pattern_1">
				<div class="camera-item" data-src="images/what/home/home-carousel-1.jpg">
					<div class="camera_caption moveFromLeft">
						<h3 <?php $html->setClass($whatHomeSection_1, 'h3');?>>I’m Mike Finch!</h3> 
						<p <?php $html->setClass($whatHomeSection_1, 'p');?>>I have helped hundreds switch to a <span class='red-bold'>better TV provider!</span></p>
						<p <?php $html->setClass($whatHomeSection_1, 'p-small');?>>
							<?php echo $whatHomeSection_1['available']; ?>
						</p>
					</div>
				</div>
				<div class="camera-item" data-src="images/what/home/home-carousel-2.jpg" data-thumb="images/what/home/home-carousel-2.jpg">
					<div class="camera_caption moveFromLeft">
						<h3 <?php $html->setClass($whatHomeSection_1, 'h3');?>>Fast and <span class='red-bold'>convenient</span></h3> 
						<p <?php $html->setClass($whatHomeSection_1, 'p');?>>way of delivering</p>
						<p <?php $html->setClass($whatHomeSection_1, 'p-small');?>>
							<?php echo $whatHomeSection_1['available']; ?>
						</p>
					</div>
				</div>
				<div class="camera-item" data-src="images/what/home/home-carousel-3.jpg" data-thumb="himages/what/home/home-carousel-3.jpg">
					<div class="camera_caption moveFromLeft">
						<h3 <?php $html->setClass($whatHomeSection_1, 'h3');?>>We are proud</h3> 
						<p <?php $html->setClass($whatHomeSection_1, 'p');?>>to be <span class='red-bold'>always</span> on demand</p>
						<p <?php $html->setClass($whatHomeSection_1, 'p-small');?>>
							<?php echo $whatHomeSection_1['available']; ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
	