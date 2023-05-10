<?php
/**
 * The template used for displaying post content in index.php
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('Post'); ?>>

  <header class="post__header">
    <h1 class="h2"><?php the_title(); ?></h2>

    <div class="post__meta">
      Posted by <?php the_author(); ?>
      <?php echo get_the_date( 'F j, Y' ); ?>
      
    </div>
  </header>

  <?php /* Show featured image (if present) and add lazyloading markup */ ?>
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="post__thumbnail">
      <?php the_post_thumbnail( 'large', array( 'class' => 'lazyload' ) ); ?>
    </div>
  <?php endif; ?>

  <div class="post__content entry-content">
    <?php the_content(); ?>
  </div>

</article><!-- .Post -->
