<?php get_header(); ?>
<hr>
<table>
    <tr>
        <th><?php _e('翻譯中文字', 'trainingTheme'); ?></th>
    </tr>
</table>
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