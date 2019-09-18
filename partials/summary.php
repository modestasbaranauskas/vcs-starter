<!-- SUMMARY start
================================================== -->
<section class="summary-section">
    <div id="summary" class="summary-container flex-container">
    <?php
        if(have_rows('s_summary_repeater')):
            while(have_rows('s_summary_repeater')):
                the_row();
                ?>
                <div class="summary-column">
                    <h2><?php the_sub_field('heading') ?></h2>
                    <p><?php the_sub_field('description') ?></p>
                </div>
                <?php
            endwhile;
        endif;
    ?>    
    </div>
</section>
<!-- SUMMARY end
================================================== -->