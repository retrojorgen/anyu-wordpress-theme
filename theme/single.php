<?php get_header(); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post-image-article" style="background-image: url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>)">										
						</div>
					<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
					<section class="main-article">

						<article id="post-<?php the_ID(); ?>" <?php post_class('main-article'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<section class="entry-content clearfix" itemprop="articleBody">
							
								<?php the_content(); ?>
							</section>

							<footer class="article-footer">
								<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

							</footer>


						</article>
					<?php endwhile; ?>

					<?php else : ?>

						<article id="post-not-found" class="hentry clearfix">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
								</footer>
						</article>

					<?php endif; ?>
					</section>
					<?php get_footer(); ?>


