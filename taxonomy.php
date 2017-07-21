<?php get_header(); ?>
				
<div class="archive-container">
	<div class="container">
		<div class="row">
			<?php if ( have_posts() ): ?>
				<?php while( have_posts() ): the_post(); ?>
					<div class="col-md-4 col-xs-6">
						<div class="post-item">
							<div class="details">
								<h2><?php echo $post->post_title ?></h2>
								<p class="excerpt"><?php echo $post->post_excerpt ?></p>
							</div>
							<p class="date"><?php the_time(get_option('date_format')); ?> by <?php the_author(); ?></p>
							<a href="<?php echo get_permalink( $post->ID ); ?>" class="text-center fade-effect">READ MORE</a>
						</div>
					</div>
				<?php endwhile ?>
				<div class="clearfix"></div>
			<?php endif ?>
		</div>
	</div>
</div>

<?php get_footer();