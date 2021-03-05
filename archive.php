<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-12 p-5 pb-5">
      <h2><?php single_cat_title()?></h2>

      <?php if (have_posts()) : while(have_posts()) : the_post()?>
      <div class="card mb-4">
        <div class="card-body">
            <h3> <?php the_title();?></h3>
              <?php if(has_post_thumbnail()): ?>
                  <img src="<?php the_post_thumbnail_url('smallest') ?>" class="img-fluid">
              <?php endif; ?>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-dark" >See More</a>
          </div>
        </div>
      <?php endwhile; endif;?>

    </div>
  </div>
</div>
<?php get_footer(); ?>