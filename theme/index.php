<?php get_header(); ?>

	<?php global $wp_query;
	query_posts(
		array_merge(
			array('category_name' => 'Frontpage', 'order' => 'ASC'),
			$wp_query->query
		)
	);

	?>
<div class="hero">
	<div class="hero-content">
		<div class="dandelion-1"></div>
        <div class="dandelion-2"></div>
        <div class="dandelion-3"></div>
        <div class="dandelion-4"></div>
		<h1>Senter for <span class="header-highlight">helse</span><br> og <span class="header-highlight">livsmestring</span></h1>
		<div class="facebook-like">Følg oss på Facebook! <div class="fb-like" data-href="https://www.facebook.com/anyuklinikken" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></div>
		<a href="online-booking/" class="hero-online-booking">Online booking</a>
	</div>
</div>
	<section class="articles">

		<div class="header">
			<div class="header-title">Om Anyu-klinikken</div>
		</div>
			<?php 
			if (have_posts()) {
				$counter = 1;
				while (have_posts() && $counter <= 1) { 
					the_post(); ?>
					<article class="main-article-frontpage" role="article">
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