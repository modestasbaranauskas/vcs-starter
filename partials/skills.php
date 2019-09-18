<!-- SKILLS start
================================================== -->
<section id="skills" class="skills-section">
    <div class="skills-title">
        <h2><?php the_field('ms_heading'); ?></h2>
    </div>
    <div class="skills-container flex-container">
        <div class="skills-text-column">
            <div class="skills-text-block">
                <div>
                    <?php the_field('ms_description'); ?>
                </div>
                <?php
                $link = get_field('ms_link');
                // dump($link);
                ?>
                <a class="js-scroll-trigger" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
            </div>
        </div>
        <div class="skills-info-column">
            <div class="skills-info-block">
            <?php
                if(have_rows('ms_skills_repeater')):
                    $i = 1;
                    while(have_rows('ms_skills_repeater')):
                        the_row();

                        $progress = get_sub_field('value');
                        // dump($progress);
                        ?>
                        <div class="skills">
                            <h3 class="skills-info-text"><?php the_sub_field('heading'); ?></h3>
                            <progress value="<?php echo $progress ?>" max="100"><?php echo $progress ?>%</progress>
                            <style> 
                            .skills:nth-child(<?php echo $i ?>) progress[value]:after {
                                left: <?php echo $progress ?>%;
                            }
                            </style>
                        </div>
                        <?php
                        $i++;
                    endwhile;
                endif;
            ?> 
            </div>
        </div>
    </div>	
</section>
<!-- SKILLS end
================================================== -->