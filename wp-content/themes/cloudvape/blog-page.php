<?php
/*
PostType Page Template: Страница блога
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container-fluid" style="max-width: 1600px;">
  <div class="row">
    <div class="col">
      <h1 class="cv cv-title"><span><?php the_title(); ?></span></h1>
      <div class="cv-img-blog">
        <?php echo get_the_post_thumbnail() ?>
      </div>
      <p class="post"><?php the_content(); ?></p>
    </div>
  </div>
</div>
<?php endwhile; else: ?>
  <p style="padding: 50px 20px;"><?php _e('К сожалению, ни один из постов не подошел под ваши критерии поиска.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>