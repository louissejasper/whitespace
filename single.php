<?php get_header(); ?>
				
	<!-- CONTENT -->
	<div class="col-lg-8">
		<div class="content">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	<!-- END CONTENT -->

	<h1>SINGLE</h1>

	<!-- SIDEBAR -->
	<div class="col-lg-4">
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
	<!-- END SIDEBAR -->

<?php get_footer(); ?>