<?php get_header(); ?>
<div class="container">
    <div id="page-content">
            <?php get_template_part('loop', 'single'); ?>
            <?php //comments_template(); ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
