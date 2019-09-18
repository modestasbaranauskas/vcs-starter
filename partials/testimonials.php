<!-- QUOTES start
================================================== -->
<section id="testimonials" class="quotes-section">
    <div class="quotes-container flex-container owl-carousel owl-theme">
    <?php
        if(have_rows('t_testimonial_repeater')):
            while(have_rows('t_testimonial_repeater')):
                the_row();
                $photo = get_sub_field('photo', 'option');
                ?>
                <div class="quotes-slide">
                    <div class="testimonials-photo">
                        <img src="<?php echo $photo['sizes']['testimonial']; ?>" alt="<?php echo $photo['alt']; ?>">
                    </div>
                    <p class="quote-text"><?php the_sub_field('text'); ?></p>
                    <p class="author-name"><?php the_sub_field('author'); ?></p>
                </div>
                <?php
            endwhile;
        endif;
    ?> 
    </div>
</section>
<!-- QUOTES end
================================================== -->