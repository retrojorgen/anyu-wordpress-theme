<?php get_header(); ?>


						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<header class="post-header" style="background-image: url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>)">
							<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
						</header>

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
