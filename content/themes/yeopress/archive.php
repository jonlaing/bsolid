<?php get_header(); ?>
<div class="container">
    <div id="page-content">
            <?php if (have_posts()) : ?>
                    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                    <?php if (is_category()): ?>
                            <h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
                    <?php elseif(is_tag()): ?>
                            <h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
                    <?php elseif (is_day()): ?>
                            <h1>Archive for <?php the_time('F jS, Y'); ?></h2>
                    <?php elseif (is_month()): ?>
                            <h1>Archive for <?php the_time('F, Y'); ?></h2>
                    <?php elseif (is_year()): ?>
                            <h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
                    <?php elseif (is_author()): ?>
                            <h1 class="pagetitle">Author Archive</h2>
                    <?php elseif (isset($_GET['paged']) and !empty($_GET['paged'])): ?>
                            <h1 class="pagetitle">Blog Archives</h2>
                    <?php endif; ?>
                    <?php get_template_part('loop', 'archive'); ?>
            <?php else : ?>
                    <h1>Nothing found</h1>
            <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
