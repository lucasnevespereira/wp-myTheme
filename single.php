<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-12 p-5 pb-5">
      <h2><?php the_title()?></h2>

      <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('largest') ?>" class="img-fluid">
      <?php endif; ?>

      <?php if (have_posts()) : while(have_posts()) : the_post()?>
        <?php the_content(); ?>
      <?php endwhile; endif;?>

    </div>
  </div>
</div>
<?php get_footer(); ?>