<?php
// Uzklausos parametrai

$sql = [
    'parametras_1' => 'reiksme 1',
    'parametras_1' => 'reiksme 1',
];

// Uzklausos vykdymas ir rezultato saugojimas

$result = new WP_Query($sql);

// Gautu duomenu isvedimas

if($result->have_post()):
    while($result->have_post()):
        $result->the_post();
        ?>
        <!-- HTML BLOKAS -->
        <?php
    endwhile;
endif;

//Atsatome pradine puslapio uzklausa
wp_reset_postdata();

?>

