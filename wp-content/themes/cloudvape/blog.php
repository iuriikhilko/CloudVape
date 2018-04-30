<?php 
/*
    Template Name: Блог
*/
?>

<?php get_header(); ?>
    <div class="container-fluid" style="max-width: 1600px;">
      <h1 class="cv cv-title"><span>Новости</span></h1>
      <?php
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('showposts=10' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <div class="row">
        <div class="col">
          <h1 class="cv"><a class="cv-link blog" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
          <a href="<?php the_permalink() ?>"><div class="cv-img-blog"><?php echo get_the_post_thumbnail() ?></div></a>
          <p><?php the_excerpt(); ?></p>
        </div>
      </div>
      <?php endwhile; ?>

      <?php if ($paged > 1) { ?>
      <div class="row">
          <div class="col-6">
            <div class="cv-arrow" style="float: left;"><?php next_posts_link('НАЗАД'); ?></div>
          </div>
          <div class="col-6">
            <div class="cv-arrow" style="float: right;"><?php previous_posts_link('ВПЕРЕД'); ?></div>
          </div>
      </div>
      <?php } else { ?>

      <div class="row">
          <div class="col-6">
            <div class="cv-arrow" style="float: left;"><?php next_posts_link('НАЗАД'); ?></div>
          </div>
      </div>

      <?php } ?>
      <?php wp_reset_postdata(); ?>
    </div>
<?php get_footer(); ?>