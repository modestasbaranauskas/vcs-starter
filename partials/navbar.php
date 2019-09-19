<!-- HEADER start
================================================== -->
<section id="nav" class="main-nav-section">
    <div class="main-nav-container flex-container">
        <div class="main-nav-logo">
            <a class="js-scroll-trigger flex-logo" href="<?php bloginfo('wpurl'); ?>">
            <?php
            $image = get_field('ho_image', 'option');
            ?>    
            <img src="<?php echo $image['sizes']['logo']; ?>" alt="<?php echo $image['alt']; ?>">
            </a>
        </div>
        <div class="main-nav-column">
            <button class="burger"><i class="fas fa-bars"></i></button>
            <nav id="main-nav" class="main-nav">

            <?php 
                $menu_options = [
                    'menu_class' => "nav-menu-list flex-container",
                    'container' => false,
                    'theme_location' => "primary-navigation",
                    'walker' => new custom_navwalker()
                ];

                wp_nav_menu($menu_options);
            ?>
            </nav>
        </div>
    </div>
</section>
<!-- HEADER end
================================================== -->