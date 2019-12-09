<?php
if( get_field('hero_type') == 'image' ):
	$heroImage = get_field('hero_background_image');
elseif ( get_field('hero_type') == 'color' ):
	$heroColor = get_field('hero_background_colour');
endif;?>

<div class="hero <?php the_field('hero_height');?>" style="background-image: url(<?php echo $heroImage['url']; ?>); background-color: <?php echo $heroColor; ?>;">

    <div class="container cols-3-12-6-3">
        <div class="col"></div>
		<div class="col">
		    <div class="hero__content">
                <div class="inner-section">
                    <h1 class="heading heading__md heading__light mt0 mb0"></h1>
                </div>
				<!--<div class="buttons">
					<a href=""  class="">Button Text</a>
					<a href="">Button Text</a>
				</div>-->
		    </div>
		</div>
	</div>

</div><!--hero-->
