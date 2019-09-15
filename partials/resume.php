<!-- RESUME start
================================================== -->
<section id="resume" class="resume-section">
    <div class="resume-container flex-container">
        <h2><?php the_field('r_heading'); ?></h2>
        <p><?php the_field('r_description'); ?></p>
        <a href="#">Download resume</a>
    </div>
</section>
<!-- RESUME end
================================================== -->
<!-- EDUCATION start
================================================== -->
<section class="education-section">
    <?php
        if(have_rows('r_resume_section_repeater')):
            while(have_rows('r_resume_section_repeater')):
                the_row();
                ?>
                <div class="education-title">
                    <h2><?php the_sub_field('heading'); ?></h2>
                </div>
                <div class="education-container flex-container border-line">
                    <div class="education-column">
                        <div>
                            <?php the_sub_field('description'); ?>
                        </div>
                    </div>
                    <div class="education-column">
                    <?php
                        if(have_rows('experience_repeater')):
                            while(have_rows('experience_repeater')):
                                the_row();
                                ?>
                                <div class="education-info-column">
                                    <h3><?php the_sub_field('experience_heading'); ?></h3>
                                    <div><?php the_sub_field('name_date'); ?></div>
                                    <p class="rating"><?php the_sub_field('rating'); ?></p>
                                    <p class="paragraph-border"><?php the_sub_field('experience_description'); ?></p>
                                </div>
                                <?php
                            endwhile;
                        endif;
                    ?>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
    ?>
</section>
<!-- EDUCATION end
================================================== -->