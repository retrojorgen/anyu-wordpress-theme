    <div class="header">
      <div class="header-title">Våre behandlinger</div>
    </div>
    <ul class="articles-list" role="main">
  <?php
  wp_reset_query();
  query_posts('cat=3');
  ?>
      <?php 
      if (have_posts()) {
        $counter = 1;
        while (have_posts()) { 
          the_post(); ?><li class="article-container">
            <h2><?php the_title(); ?></h2>
            <?php echo get_the_post_thumbnail( $post_id, '', $attr ); ?>
        </li><?php
          $counter++;
        }
      }?>
<?php
  wp_reset_query();
  query_posts('cat=5');
  ?>
      <?php 
      if (have_posts()) {
        $counter = 1;
        while (have_posts()) { 
          the_post(); ?><li class="article-container">
            <h2><?php the_title(); ?></h2>
            <?php echo get_the_post_thumbnail( $post_id, '', $attr ); ?>
        </li><?php
          $counter++;
        }
      }?>

    </ul>