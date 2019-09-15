<?php
    if(have_rows('repeater_lauko_pavadinimas')):
        while(have_rows('repeater_lauko_pavadinimas')):
            the_row();
            ?>
            <!-- HTML KODAS KURIS KARTOJASI -->
            <?php
        endwhile;
    endif;
?>