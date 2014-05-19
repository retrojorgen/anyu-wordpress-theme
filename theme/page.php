<?php get_header(); ?>


						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div class="post-image-article">
							<?php echo get_the_post_thumbnail( $post_id, '', $attr ); ?>
						</div>
						<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
						<section class="main-article">

							<article id="post-<?php the_ID(); ?>" <?php post_class('main-article'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content clearfix" itemprop="articleBody">
								
									<?php the_content(); ?>
								</section>

							</article>

						<?php endwhile; else : ?>


						<?php endif; ?>

					</section>

<?php get_footer(); ?>
