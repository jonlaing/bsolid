<?php if (is_page()): the_post() ?>
	<article id="page-<?php the_ID() ?>">
		<?php the_content(); ?>
	</article>
<?php else: ?>
	<?php if (have_posts()):
		while (have_posts()) : the_post() ?>
			<article id="article-<?php the_ID() ?>" class="article">
				<header class="article-header">
                                    <?php if (is_singular()) : ?>
					<h1 class="article-title"><?php the_title() ?></h1>
                                    <?php else : ?>
					<h2 class="article-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title() ?></a></h1>
                                    <?php endif; ?>
					<div class="article-info">
						<span class="date">Posted on <?php the_date('m-d-Y') ?></span>
					</div>
				</header>
				<div class="article-content">
					<?php if (has_post_thumbnail()): ?>
						<div class="featured-image">
                                                    <?php if (is_single()): ?>
                                                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('medium') ?></a>
                                                    <?php else: ?>
                                                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('thumbnail') ?></a>
                                                    <?php endif; ?>
						</div>
					<?php endif; ?>
					<?php (is_single()) ? the_content() : the_excerpt() ?>
				</div>
			</article>
		<?php endwhile; ?>
	<?php else: ?>
		<p>Nothing matches your query.</p>
	<?php  endif; ?>
<?php  endif; ?>
