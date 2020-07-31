<?php
get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<!-- FEATURED WORK -->	
	<section class="featured-work">
		<div class="site-content">
			<h4>Featured Work</h4>

			<ul class="homepage-featured-work">
				<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
					<?php while ( have_posts() ) : the_post(); 
						$image = get_field("image_1");
						$size = "medium"; ?>
						<li class="individual-featured-work">
							<figure><a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image, $size); ?></figure>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</li>
					<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</ul>
		</div>
	</section>

<!-- RECENT POSTS -->
	<section class="recent-posts">
 		<div class="site-content">
  			<div class="blog-post">
			  <h4>From the Blog</h4>
			  <?php query_posts('posts_per_page=1'); ?>
  				<?php while ( have_posts() ) : the_post(); ?>
					<h3><?php the_title(); ?></h3>
       				<?php the_excerpt(); ?> 
  				<?php endwhile; ?> 
			  <?php wp_reset_query(); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
