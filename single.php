<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="header single">
		<h3><?php the_title(); ?><?php edit_post_link('Edit', '<span class="edit">', '</span>'); ?></h3>

		<p class="byline">In <?php the_category(', ') ?> on <?php the_time('j F Y') ?> <?php the_tags('tagged ', ', ', ''); ?> with <?php comments_number('no comments', '1 comment', '% comments'); ?></p>
	</div><!-- end header -->

	<div class="post single">

		<?php the_content(); ?>

		<br />

	</div><!-- end post -->

			<?php comments_template(); ?>
			
		<?php endwhile; else: ?>
		
			<h2 class="page_header">Uh oh.</h2>
			<div class="entry">
				<p>Sorry, no posts matched your criteria. Wanna search instead?</p>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</div>
			
		<?php endif; ?>
		
<div class="postnoline">
	<span class="previous"><?php previous_post_link('&larr; %link') ?></span>
	<span class="next"><?php next_post_link('%link &rarr;') ?></span>
</div>

<?php get_footer(); ?>