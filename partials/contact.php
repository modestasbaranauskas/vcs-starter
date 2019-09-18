<!-- CONTACT start
================================================== -->
<section id="contact" class="contact-section">
    <div class="contact-title">
        <h2><?php the_field('c_heading'); ?></h2>
    </div>
    <div class="contact-container flex-container">
        <div class="contact-column">
            <div>
                <?php the_field('c_description'); ?>
            </div>
            <div>
                <?php the_field('c_address') ?>
            </div>
            <div>
                <?php the_field('c_contact_info') ?>
            </div>
            <div class="google-map">
                <?php the_field('c_google_map'); ?>
            </div>
        </div>
        <div class="contact-column">
            <div class="contact-form">
                <?php
                    echo do_shortcode(get_field('c_contact_form_shortcode'));
                ?>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT end
================================================== -->