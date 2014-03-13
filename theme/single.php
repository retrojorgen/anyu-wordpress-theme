<?php get_header(); ?>
					<div class="article fb-like" data-href="<?php the_permalink() ?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


						<article id="post-<?php the_ID(); ?>" <?php post_class('main-article'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<header class="article-header">

								<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
								<p class="byline vcard"><?php
									printf( __( 'Publisert <time class="updated" datetime="%1$s" pubdate>%2$s</time> av <span class="author">%3$s</span> <span class="amp">&amp;</span> i %4$s.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', ') );
								?></p>

							</header>

							<section class="entry-content clearfix" itemprop="articleBody">
							
								<?php the_content(); ?>
							</section>

							<footer class="article-footer">
								<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

							</footer>

							<?php comments_template(); ?>

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
					<?php get_sidebar(); ?>
					<?php get_footer(); ?>


