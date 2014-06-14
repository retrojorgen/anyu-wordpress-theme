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
<div class="frontpage-articles">
	<section class="articles">

			<?php 
			if (have_posts()) {
				$counter = 1;
				while (have_posts() && $counter <= 1) { 
					the_post(); ?>
					<article class="main-article-frontpage" role="article">
						
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						</article>
				</li><?php 
					$counter++;
				}
			}?>
			</ul>


	</section>
</div>
		<?php //get_sidebar(); ?>
		<?php get_footer(); ?>