<?php

$locations = page('locations')->children()->visible();
$index = 0;
/*

The $limit parameter can be passed to this snippet to
display only a specified amount of locations:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $locations = $locations->limit($limit);

?>



    <?php if ($page->Comingsoon()->bool()): ?>
      <div class="gallery disable-select">
      	<div class="arrowPositioner">
      	</div>
      	<div class="galleryMover">
      		<div class='frame'>
      			<div class="imgWrapper">
      				<div class="SVGWrapper">


      					<svg id='comingSoonSVG' height="100%" version="1.1" viewbox="0 0 600 400" width="100%" xmlns="http://www.w3.org/2000/svg">
      					<defs>
      						<rect height="400" vector-effect="non-scaling-stroke" id="path-12" width="600" x="0" y="0"></rect>
      						<mask fill="white" height="100%" id="mask-22" maskcontentunits="userSpaceOnUse" maskunits="objectBoundingBox" width="100%" x="0" y="0">
      							<use xlink:href="#path-12" ></use>
      						</mask>
      					</defs>
      					<g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1" vector-effect="non-scaling-stroke">
      						<g id="comingSoonSVG" stroke="#1E1E1E" vector-effect="non-scaling-stroke">
      							<use id="Rectangle" mask="url(#mask-22)" stroke-width="6" xlink:href="#path-12" vector-effect="non-scaling-stroke"></use>
                    <path d="M3,2 L597,398" id="Line" stroke-width="3" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
                    <path d="M597,2 L3,398" id="Line" stroke-width="3" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
      						</g>
      					</g>
              </svg>
      				</div>
      			</div>
            <div class="caption"><p>Coming Soon</p></div>

      		</div>
      	</div>
      </div>


    <?php else: ?>
      <div class="gallery disable-select">
      	<div class="arrowPositioner">
      		<?php snippet('galleryArrows') ?>
      	</div>
      	<div class="galleryMover">
          <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
            <?php if($image != $page->image('map.svg')): ?>
              <div class='frame'>
                <div class="imgWrapper">
                  <img src="<?= $image->url() ?>" alt="<?php echo $image->alt() ?>" onload="fadeIn(this)" style="opacity:0"/>
                </div>
                  <div class="caption enable-select"><?php echo $image->caption()->kirbytext() ?> </div>
              </div>
            <?php endif ?>


          <?php $index++; endforeach ?>
      	</div>
      </div>

    <?php endif ?>
