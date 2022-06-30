<?php get_header(); ?>
<hr>

<?php while (have_posts()) : the_post(); ?>
    <p>
        <?php the_title(); ?>
    </p>
<?php endwhile; ?>
<hr>

<aside>
    <?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>