<?php get_header() ?>
<div id="content" class="container">
  <div class="row">
    <h1><?php echo 'Результат поиска: ' . '<span>' . get_search_query() . '</span>'; ?></h1>
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <div id="posts">
        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
        <p><?php the_excerpt() ?></p>
      </div>
    <?php endwhile; ?>
  <?php else : echo "Извините по Вашему результату ничего не найдено!"; endif;?>
  </div>
</div>
<?php get_footer() ?>
