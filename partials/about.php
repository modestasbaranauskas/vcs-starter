<!-- ABOUT start
================================================== -->
<section class="about-section">
    <div id="about" class="about-container flex-container">
    <?php 
    $image = get_field('a_about_image');
    // dump($image);
    ?>
        <div class="about-column-photo flex-container">
            <img src="<?php echo $image['sizes']['about_photo'] ?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <div class="about-column">
            <div class="about-text">
                <h2><?php the_field('a_heading'); ?></h2>
                <div>
                    <?php the_field('a_description'); ?>
                </div>
            </div>
            <div class="about-service flex-container">
            <?php
                if(have_rows('a_service_repeater')):
                    while(have_rows('a_service_repeater')):
                        the_row();
                        ?>
                        <div class="about-service-column flex-container">
                            <div class="service-icon">
                                <?php the_sub_field('icon'); ?>
                            </div>
                            <div class="service-text">
                                <h3><?php the_sub_field('heading'); ?></h3>
                                <p><?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
            ?>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT end
================================================== -->