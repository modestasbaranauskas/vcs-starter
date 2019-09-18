<!-- HERO start
================================================== -->
<section id="hero" class="hero-section owl-carousel owl-theme">
<?php
    if(have_rows('h_hero_section_repeater')):
        while(have_rows('h_hero_section_repeater')):
            the_row();
            $image = get_sub_field('background');
            // dump($image);
            $link = get_sub_field('link');
            // dump($link);
            ?>
            <div class="hero-container" style="background-image: url(<?php echo $image['sizes']['hero'] ?>);">
                <div class="bg-overlay flex-container">
                    <div class="hero-column">
                        <h1><?php the_sub_field('heading') ?></h1>
                        <a class="js-scroll-trigger" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
    endif;
?>
</section>
<!-- HERO end
================================================== -->