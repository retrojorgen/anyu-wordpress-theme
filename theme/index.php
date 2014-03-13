<?php get_header(); ?>
		<div class="header">
			<div class="header-title">Om Anyu-klinikken</div>
		</div>
			<?php 
			if (have_posts()) {
				$counter = 1;
				while (have_posts() && $counter <= 1) { 
					the_post(); ?>
					<article class="main-article" role="article">
						<div class="post-image">
							<?php echo get_the_post_thumbnail( $post_id, '', $attr ); ?>
						</div>
						
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						</article>
				</li><?php 
					$counter++;
				}
			}?>
			</ul> 
		<div class="header">
			<div class="header-title">Våre behandlinger</div>
		</div>
		<ul class="articles-list" role="main">
			<?php 
			if (have_posts()) {
				$counter = 1;
				while (have_posts()) { 
					the_post(); ?><li class="article-container">
					<div class="post-image">
						<?php echo get_the_post_thumbnail( $post_id, '', $attr ); ?>
					</div>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'article' ); ?> role="article">
						
						<h2><?php the_title(); ?></h2>
						<section class="entry-content clearfix">
							<?php the_content(); ?>
						</section>

						<?php // comments_template(); // uncomment if you want to use them ?>

					</article>
				</li><?php 
					$counter++;
				}
			}?>
		</ul>
	</section>
		<?php //get_sidebar(); ?>
		<?php get_footer(); ?>