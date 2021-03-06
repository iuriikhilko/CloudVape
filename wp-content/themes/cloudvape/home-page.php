<?php
/*
Template Name: Шаблон главной страницы
Template Post Type: page
*/
?>

<?php get_header(); ?>
<?php echo do_shortcode('[metaslider id="39"]'); ?>
<div class="container-fluid" style="max-width: 1600px;">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; else: ?>
    <p style="padding: 50px 20px;"><?php _e('К сожалению, ни один из постов не подошел под ваши критерии поиска.'); ?></p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>