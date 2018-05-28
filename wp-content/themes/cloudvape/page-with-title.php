<?php
/*
Template Name: Шаблон с заголовком
Template Post Type: page
*/
?>

<?php get_header(); ?>
<div class="container-fluid" style="max-width: 1600px;">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1 class="cv cv-title"><span><?php the_title(); ?></span></h1>
	<div class="row">
		<div class="col">
			<?php the_content(); ?>
		</div>
	</div>
	<?php endwhile; else: ?>
		<p style="padding: 50px 20px;"><?php _e('К сожалению, ни один из постов не подошел под ваши критерии поиска.'); ?></p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
