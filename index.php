<?php get_header();

while (have_posts()) : the_post();
    echo '<p>' . the_title() . '</p>';
endwhile;


get_footer();
