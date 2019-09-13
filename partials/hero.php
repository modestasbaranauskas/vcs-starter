<!-- HERO start
    ================================================== -->
    
    <?php 
    
    $image = get_field('h_background');
    // dump($image);
    ?>
	<section id="hero" class="hero-section" style="background-image: url(<?php echo $image['sizes']['large'] ?>);">
		<div class="hero-container flex-container">
			<div class="hero-column">
                <h1><?php the_field('h_heading') ?></h1>
                <?php
                $link = get_field('h_link');
                dump($link);
                ?>
				<a class="js-scroll-trigger" href="#summary">Learn more</a>
			</div>
		</div>
	</section>
	<!-- HERO end
    ================================================== -->