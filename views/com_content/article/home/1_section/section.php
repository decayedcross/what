<?php 
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$article = new Joomla\Article;
$string = new Framework\String;

$article->sectionContent($this->articleAlias, $this->sectionAlias);

$breakArray = $string->breakExplode($article->introtext);

?>

<div class="Wallop">
  <div class="Wallop-list">
    <div data-min-height="80" class="Wallop-item Wallop-item--current" style="background-image: url(http://www.shape5.com/demo/general_contractor/images/iacf1.jpg);">
      <div class="row">
        <div class="col col-base-6 col-center" data-min-height="80">
          <div class="vertical">
            <h1 class="h1">
            CERTIFIED PROS
            </h1>
            <h2>
            GET THE JOB DONE ON TIME
            </h2>
          </div>
        </div>
      </div>
    </div>
    <div data-min-height="80" class="Wallop-item" style="background-image: url(http://www.shape5.com/demo/general_contractor/images/iacf2.jpg);">
     <div class="row">
        <div class="col col-base-6 col-center" data-min-height="80">
          <div class="vertical">
            <h1 class="h1">
            WE HELP BRING
            </h1>
            <h2>
            YOUR DREAMS TO REALITY
            </h2>
          </div>
        </div>
      </div>
    </div>
    <div data-min-height="80" class="Wallop-item" style="background-image: url(http://www.shape5.com/demo/general_contractor/images/iacf3.jpg);">
     <div class="row">
        <div class="col col-base-6 col-center" data-min-height="80">
          <div class="vertical">
            <h1 class="h1">
            HOME REMODELS
            </h1>
            <h2>
            AND MORE WE DO IT ALL
            </h2>
          </div>
        </div>
      </div>
    </div>
    <i class="next fa fa-arrow-circle-o-right"></i>
    <i class="previous fa fa-arrow-circle-o-left"></i>
  </div>

  <ul class="Wallop-pagination">
    <li class="Wallop-dot Wallop-dot--current">
      <img src="http://www.shape5.com/demo/general_contractor/images/iacf1.jpg">
    </li>
    <li class="Wallop-dot">
      <img src="http://www.shape5.com/demo/general_contractor/images/iacf2.jpg">
    </li>
    <li class="Wallop-dot">
      <img src="http://www.shape5.com/demo/general_contractor/images/iacf3.jpg">
    </li>
  </ul>
</div>