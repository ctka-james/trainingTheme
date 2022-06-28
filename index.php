<?php get_header(); ?>
<hr>
<?php
while (have_posts()) : the_post();
    echo '<p>' . the_title() . '</p>';
endwhile;
?>
<hr>

<?php get_footer(); ?>