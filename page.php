<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="header">
		<div id="menu">
			<ul>
				<li class="page_item <?php if ( is_home() ) { ?>current_page_item<?php } ?>"><a href="<?php bloginfo('url'); ?>"><?php _e('Home') ?></a></li>
				<?php wp_list_pages('title_li=&depth=1&exclude=2'); ?>
			</ul>
		</div>
	
		<h1><?php the_title(); ?><?php edit_post_link('Edit', '<span class="edit">', '</span>'); ?></h1>
	</div><!-- end header -->
						
	<div class="postnoline">

		<?php the_content('[Read more &rarr;]'); ?>
			
	</div><!-- end post -->

<?php endwhile; ?>
								
<?php else : ?>
	
	<div class="postnoline">
		<h2>Doh! File Not Found</h2>
		<p>Sorry, what you're looking for isn't here.</p>
	</div><!-- end post -->
	
<?php endif; ?>
	
<?php get_footer(); ?>