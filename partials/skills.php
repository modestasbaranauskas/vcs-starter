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
                <div class="skills">
                    <h3 class="skills-info-text">Photoshop</h3>
                    <progress value="90" max="100">90%</progress>
                    <style> 
                    .skills:nth-child(1) progress[value]:after {
                        left: 90%;
                    }
                    </style>
                </div>
                <div class="skills">
                    <h3 class="skills-info-text">Illustrator</h3>
                    <progress value="80" max="100">80%</progress>
                    <style> 
                    .skills:nth-child(2) progress[value]:after {
                        left: 80%;
                    }
                    </style>
                </div>
                <div class="skills">
                    <h3 class="skills-info-text">HTML / CSS</h3>
                    <progress value="90" max="100">90%</progress>
                    <style> 
                    .skills:nth-child(3) progress[value]:after {
                        left: 90%;
                    }
                    </style>
                </div>
                <div class="skills">
                    <h3 class="skills-info-text">PHP / MYSQL</h3>
                    <progress value="70" max="100">70%</progress>
                    <style>
                    .skills:nth-child(4) progress[value]:after {
                        left: 70%;
                    }
                    </style>
                </div>
                
            </div>
        </div>
    </div>	
</section>
<!-- SKILLS end
================================================== -->