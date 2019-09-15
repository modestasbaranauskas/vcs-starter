<!-- PORTFOLIO start
================================================== -->
<section id="portfolio" class="portfolio-section">
    <div class="portfolio-container flex-container">
        <div class="portfolio-column">
            <h2><?php the_field('p_heading'); ?></h2>
            <p><?php the_field('p_description'); ?></p>
        </div>
    </div>
    <div class="gallery-container flex-container">
        <div class="filter-column">
            <div class="filter-title">
                <h4><?php the_field('p_filter_heading'); ?></h4>
            </div>
            <div class="filter-category">
                <ul class="filter-nav">
                <?php
                    if(have_rows('p_filter_menu_repeater')):
                        while(have_rows('p_filter_menu_repeater')):
                            the_row();
                            ?>
                            <li>
                                <a data-rel="<?php the_sub_field('filter_value'); ?>" href="#" class="filters"><?php the_sub_field('filter_value'); ?></a>
                            </li>
                            <?php
                        endwhile;
                    endif;
                ?>
                </ul>
            </div>
        </div>
        <?php
            if(have_rows('p_gallery_repeater')):
                while(have_rows('p_gallery_repeater')):
                    the_row();

                    $image = get_sub_field('image');
                    // dump($image);
                    ?>
                    <div class="gallery-column" data-filter="<?php the_sub_field('image_category'); ?>">
                        <a class="fancybox" data-fancybox="gallery" href="<?php echo $image['sizes']['large']; ?>">
                            <img src="<?php echo $image['sizes']['gallery_image']; ?>" alt="<?php echo $image['alt']; ?>">
                                <div class="overlay">
                                    <i class="search-icone fas fa-search"></i>
                                </div>
                        </a>
                    </div>
                    <?php
                endwhile;
            endif;
        ?>
    </div>
</section>
<!-- PORTFOLIO end
================================================== -->